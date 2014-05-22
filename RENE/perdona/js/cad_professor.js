$(function(){
    $('#frm_professor').submit(function(event){
        event.preventDefault();

        var erro = false;

        $(this).find('input[type="text"]').each(function(){
            if ( !$(this).val() ) {
                erro = true
            }
        });

        if ( erro ) {
            alert( 'Preencha os campos corretamente' );
            return false;
        }

        document.frm_professor.submit();

    });
});