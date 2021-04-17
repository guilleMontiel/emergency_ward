 var APIURL = 'http://localhost:8089/v1';

app = angular.module('emergency',['ngRoute','cp.ngConfirm']);

angular.module('emergency').config(function ($routeProvider) {
    $routeProvider
        .when('/patient/list', {
            templateUrl:'/views/patient/list.html',
            controller:'patientListController'
        }).when('/patient/detail', {
        templateUrl:'/views/patient/detail.html',
        controller:'patientDetailController'
    }).when('/patient/new', {
        templateUrl:'/views/patient/new.html',
        controller:'patientNewController'
    }).when('/admission/new', {
        templateUrl:'/views/admission/new.html',
        controller:'newAdmissionController'
    }).otherwise({
        redirectTo: '/patient/list'
    });
});