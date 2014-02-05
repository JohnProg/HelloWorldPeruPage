angular.module('listApp').factory("listFactory",['$http','$rootScope', function($http, $rootScope) {
    var factory = {};

    factory.getData = function(urlJson) {
        var aaa =  $http.get(urlJson, { cache: true })
            .then(function(response) {
                if(response.status == 200) {
                    return response.data;
                } else {
                    return [];
                }
            });
        return aaa;
    };


    factory.broadcastItem = function(msg) {
        this.message = msg;
        $rootScope.$broadcast('handleBroadcast');
    };

    return factory;
}]);