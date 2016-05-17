(function () {

    var app = angular.module('app', []);

    app.directive('cvNewsletter', function () {
            return {
                restrict: 'E',
                templateUrl: '/templates/cv-newsletter.html',
                controller: function ($http) {

                    this.email = '';
                    this.status = 'unsubscribed';
                    this.captchaResponse = '';

                    this.isFormValid = function (form) {
                        return form.$valid && this.captchaResponse != '';
                    };

                    this.isSuccess = function (form) {
                        return form.email.$dirty && form.email.$valid;
                    };

                    this.hasErrors = function (form) {
                        return this.email != '' && !form.email.$valid;
                    };

                    this.subscribe = function () {
                        var _this = this;
                        var data = $.param({
                            json: JSON.stringify({
                                'name': _this.email,
                                'captcha-response': _this.captchaResponse
                            })
                        });
                        $http.post('https://www.webatspeed.eu/user/subscribe', data).success(function (data, status) {
                            _this.status = 'unconfirmed';
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
}
