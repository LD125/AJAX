$(document).ready(function(){
    $('#submit').click(function(event){

        event.preventDefault();
        ajax();
    });

    function ajax()
    {

        var personne = $('#personne').find(":selected").val();
 
        $.post("ajax.php","personne="+personne,function(donnees){

        if ( donnees.validation == 'ok')
        {
            $('#resultat').html(donnees.resultat);
        }
        else{
            alert("pb affichage");  
        }
        },"json");

    }

}); 