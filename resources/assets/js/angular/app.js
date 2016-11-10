'use strict';

(function () {

    var env = {};
    if (window) {
        Object.assign(env, window.env);
    }

    var app = angular.module('app', []);

    app.config(function ($locationProvider) {
        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        });
    });

    app.constant('env', env);
    app.constant('status', {
        UNSUBSCRIBED: 'unsubscribed',
        PROCESSING: 'processing',
        TO_CONFIRM_BY_USER: 'to-confirm-by-user',
        CONFIRMING: 'confirming',
        TO_CONFIRM_BY_OWNER: 'to-confirm-by-owner',
        SUBSCRIBED: 'subscribed',
        UNSUBSCRIBING: 'unsubscribing',
        ERROR: 'error'
    });

    app.directive('cvNewsletter', function () {
            return {
                restrict: 'E',
                templateUrl: '/templates/cv-newsletter.html',
                controller: function ($http, $location, status, env) {

                    this.email = '';
                    this.token = '';
                    this.captchaResponse = '';
                    this.status = status.UNSUBSCRIBED;
                    this.STATUSES = status;

                    this.isFormValid = function (form) {
                        return form.$valid && this.isCaptchaDone();
                    };

                    this.isCaptchaDone = function () {
                        return this.captchaResponse != '';
                    };

                    this.isSuccess = function (form) {
                        return form.email.$dirty && form.email.$valid;
                    };

                    this.hasErrors = function (form) {
                        return this.email != '' && !form.email.$valid;
                    };

                    this.isStatus = function (status) {
                        return this.status == status;
                    };

                    this.setStatus = function (status) {
                        this.status = status;
                        return true;
                    };

                    this.setStatusByQueryString = function () {
                        var searchVars = $location.search();
                        if ('user' in searchVars && 'token' in searchVars) {
                            this.email = searchVars['user'];
                            this.token = searchVars['token'];
                            if ('unsubscribe' in searchVars) {
                                this.setStatus(status.UNSUBSCRIBING);
                            } else {
                                this.setStatus(status.CONFIRMING);
                            }
                            return true;
                        }
                        return false;
                    };

                    this.changeSubscription = function () {
                        var successStatus, isUnsubscribing;
                        if (this.status == status.CONFIRMING) {
                            successStatus = status.TO_CONFIRM_BY_OWNER;
                        } else if (this.status == status.UNSUBSCRIBING) {
                            successStatus = status.UNSUBSCRIBED;
                        }
                        if (successStatus) {
                            var _this = this;
                            $http.put(env.apiUrl + '/api/v1/changesubscription', {
                                'username': _this.email,
                                'token': _this.token
                            }).then(function successCallback(response) {
                                    _this.setStatus(successStatus);
                                }, function errorCallback(response) {
                                    _this.setStatus(status.ERROR);
                                }
                            );
                        }
                    };

                    this.subscribe = function () {
                        var _this = this;
                        $http.post(env.apiUrl + '/api/v1/signup', {
                            'username': _this.email,
                            'g-recaptcha-response': _this.captchaResponse,
                            'remote-ip': '127.0.0.1'
                        }).then(function successCallback(response) {
                                _this.setStatus(status.TO_CONFIRM_BY_USER);
                            }, function errorCallback(response) {
                                _this.setStatus(status.ERROR);
                            }
                        );
                    };
                },
                controllerAs: 'cvn'
            };
        }
    );

})();

// Google ReCaptcha callback needs global scope
function setCaptchaResponse(response) {
    var scope = angular.element($('#cvnForm')).scope();
    scope.cvn.captchaResponse = response;
    scope.$digest();
    $('#email').focus();
}
