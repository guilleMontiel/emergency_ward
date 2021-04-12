app.service('AlertService', function($ngConfirm) {

    return{
        error: function(message){
            return $ngConfirm({
                title: 'ERROR',
                content: message,
                type: 'red',
                buttons: {
                        ok: {
                            action: function(){
                        }
                    }
                }
            });
        },
        success: function(message){
            return $ngConfirm({
                    title: 'SUCCESS',
                    content: message,
                    type: 'green',
                    buttons: {
                            ok: {
                                action: function(){
                            }
                        }
                    }
                });
        },       
    };

});