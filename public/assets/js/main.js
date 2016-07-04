$('body').on('click', '#btn-enviar-mensaje', function(event) {
            event.preventDefault();
                $.ajaxSetup({
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                })                              
                var formId = '#form_enviar_mensaje';
                $.ajax({
                    url: $(formId).attr('action'),
                    type: $(formId).attr('method'),
                    data: $(formId).serialize(),
                    dataType: 'html',
                    success: function(result){
                        if ($(formId).find("input:first-child").attr('value') == 'PUT') {
                            var $jsonObject = jQuery.parseJSON(result);
                            $(location).attr('href',$jsonObject.url);
                        }
                        else{
                            $(formId)[0].reset();
                            console.log(result); 
                            resultado=jQuery.parseJSON(result);
                            swal(resultado.mensaje);              
                        }
                    },
                    error: function(){
                        swal(resultado.mensaje); 
                        console.log('Error');
                    }
                });                    
        });
//      END SAVE AJAX    <---