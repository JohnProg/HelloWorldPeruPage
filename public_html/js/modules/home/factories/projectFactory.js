angular.module('homeApp').factory("projectFactory",['$http','$rootScope', function($http, $rootScope) {
    var factory = {};

    factory.getData = function(urlJson) {
        var data =  $http.get(urlJson, { cache: true })
            .then(function(response) {
                if(response.status == 200) {
                    return response.data;
                } else {
                    return [];
                }
            });
        return data;
    };

    return factory;
}]);