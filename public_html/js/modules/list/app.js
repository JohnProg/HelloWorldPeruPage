var listApp = angular.module('listApp', []);

listApp.config(function ($interpolateProvider) {
    // So '{{ }}' not overlaps with django syntax template
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
});