'use strict';

(function () {

    var env = {};
    if (window) {
        Object.assign(env, window.env);
    }

    var app = angular.module('app', []);

    app.constant('env', env);
    app.constant('status', {
        UNSUBSCRIBED: 'unsubscribed',
        PROCESSING: 'processing',
        TO_CONFIRM_BY_USER: 'to-confirm-by-user',
        TO_CONFIRM_BY_OWNER: 'to-confirm-by-owner',
        SUBSCRIBED: 'subscribed',
        ERROR: 'error'
    });

    app.directive('cvNewsletter', function () {
            return {
                restrict: 'E',
                templateUrl: '/templates/cv-newsletter.html',
                controller: function ($http, status, env) {

                    this.email = '';
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

                    this.subscribe = function () {
                        var _this = this;
                        var data = $.param({
                            json: JSON.stringify({
                                'username': _this.email,
                                'g-recaptcha-response': _this.captchaResponse,
                                'remote-ip': '127.0.0.1'
                            })
                        });
                        $http.post(env.apiUrl + '/user/subscribe', data.json)
                            .then(function successCallback(response) {
                                _this.setStatus(status.TO_CONFIRM_BY_USER);
                            }, function errorCallback(response) {
                                _this.setStatus(status.ERROR);
                            });
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
