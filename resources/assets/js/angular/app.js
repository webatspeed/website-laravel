(function () {

    var app = angular.module('app', []);

    app.directive('cvNewsletter', function () {
            return {
                restrict: 'E',
                templateUrl: '/templates/cv-newsletter.html',
                controller: function ($http) {

                    this.email = '';
                    this.format = 'pdf';
                    this.status = 'unsubscribed';

                    this.isEmailValid = function () {
                        return this.email != null && this.email != '' && elem.$valid;
                    };

                    this.isFormToDisable = function () {
                        return !this.isEmailValid();
                    };

                    this.subscribe = function () {
                        var _this = this;
                        var data = $.param({
                            json: JSON.stringify({
                                name: _this.email,
                                format: _this.format
                            })
                        });
                        $http.post('/user/subscribe', data).success(function (data, status) {
                            _this.status = 'unconfirmed';
                        });
                    };
                },
                controllerAs: 'cvn'
            };
        }
    );
    
})();
