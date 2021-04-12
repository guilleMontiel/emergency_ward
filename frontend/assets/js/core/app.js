 var APIURL = 'http://localhost:8089/v1';

app = angular.module('emergency',['ngRoute','cp.ngConfirm']);

angular.module('emergency').config(function ($routeProvider) {
    $routeProvider
        .when('/list', {
            templateUrl:'/views/patient/list.html',
            controller:'patientListController'
        }).when('/patient/detail', {
        templateUrl:'/views/patient/detail.html',
        controller:'patientDetailController'
    }).when('/new', {
        templateUrl:'/views/patient/new.html',
        controller:'patientNewController'
    }).otherwise({
        redirectTo: '/list'
    });
});