$(document).ready(function(){
    ajax();
    $('#submit').click(function(event){
        
        event.preventDefault();
        ajaxEnvoiForm();
    });

    function ajax(){

        
       $.post("ajax.php","",function(donnees){
           if ( donnees.validation == 'ok' )
           {
               $("#resultat").html(donnees.resultat);
               $("#personne").val("");
           }
           else
           {
                alert("Pb insertion");
           }
       },"json");
    }

function ajaxEnvoiForm(){
    var personne = $('#personne').val();
    $.post("ajax.php","personne="+personne+"&mode=envoi",function(donnees){
        if ( donnees.validation == 'ok')
        {
        ajax();
        $('#personne').val('');
        }
    },'json');

}
});