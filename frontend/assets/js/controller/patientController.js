app.controller('patientListController',['$scope','PatientService','$ngConfirm',function($scope,PatientService,$ngConfirm) {
  
    $scope.patiens = [];
    $scope.search = { name:''};
    
    $scope.loadPatients = function(){
       PatientService.list().then(function(patients){
           $scope.patiens = patients;
       },function(error){
           $scope.errorMessage(error.data.message);
       }); 
    }
    
    $scope.errorMessage = function(error){
        $ngConfirm({
            title: 'ERROR',
            content: error,
            type: 'red',
            buttons: {
                    ok: {
                        action: function(){
                    }
                }
            }
        });
    }
    
    $scope.loadPatients();
    
}]);

app.controller('patientNewController',['$scope','PatientService','AlertService',function($scope,PatientService,AlertService) {
  
    $scope.patient = {name:null,last_name:null,id_number:null,gender:null,phone:null,address:null,state:null,age:null};
    
    $scope.save = function(){
      PatientService.new($scope.patient).then(function(successMessage){
          AlertService.success(successMessage);
          window.location.href = '#!/list';
      },function(error){
          AlertService.error(error.data.message);
      });
    }
}]);