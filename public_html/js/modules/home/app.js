var homeApp = angular.module('homeApp', []);

homeApp.config(function ($interpolateProvider) {
    // So '{{ }}' not overlaps with django syntax template
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
});