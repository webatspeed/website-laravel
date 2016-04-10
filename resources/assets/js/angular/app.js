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

                    this.isFormValid = function (form) {
                        return form.$valid;
                    };

                    this.isSuccess = function (form) {
                        return form.$dirty && this.isFormValid(form);
                    };

                    this.hasErrors = function (form) {
                        return this.email != '' && !this.isFormValid(form);
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
