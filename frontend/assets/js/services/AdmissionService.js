app.service('AdmissionServices', function($http,$window) {
//    var config = {
//         headers: {
//            'Authorization': 'Bearer '+TOKEN,
//         }
//       };
    return{
        list: function(){
            return $http.get(APIURL+'/patient/list').then(function(resp){
                return resp.data;
            });
        },
        find: function(patient){
            return $http.get($window.APIURL+'/patient/find/'+patient).then(function(resp){
                return resp.data;
            });
        },
        new: function(patient){
            return $http.post($window.APIURL+'/patient/new',{patient:patient}).then(function(resp){
                return resp.data;
            });
        },
    };

});