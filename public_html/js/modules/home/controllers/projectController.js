function projectController($scope, projectFactory, homeUrls){

    /*Static*/
    $scope.projectUrl = homeUrls['projectUrl'];

    $scope.init = function () {
        projectFactory.getData($scope.projectUrl).then(function(response){
            $scope.projects = response;
        });
    };
    $scope.$watch('projects', function (newValue, oldValue) {
        if ( newValue !== oldValue) {
            setTimeout(function() {
                $('#gallery').mixitup();
            }, 1000);
        }
    }, true);

    $scope.options = [
        {
            'id': '0',
            'name': 'ALL'
        },
        {
            'id': '1',
            'name': 'WEB'
        },
        {
            'id': '2',
            'name': 'APP'
        },
        {
            'id': '3',
            'name': 'DESIGN'
        }
    ];

}