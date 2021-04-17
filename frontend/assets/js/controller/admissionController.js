app.controller('newAdmissionController',['$scope','Admission','AlertService',function($scope,Admission,AlertService) {
    $scope.admission = {admission_date:null,admission_hour:null,id_patient:null,anamnesis:null,diagnostic:null,reason_for_admission:null,internment:null,internment_unit:null};

    $scope.newAdmission = function(){
        Admission.new($scope.admission).then(function(success){
            AlertService.success(success);
        },function(error){
            AlertService.error(error.data.message);
        })
    }
}]);