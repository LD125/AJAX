$(document).ready(function(){
    ajax();
    setInterval("ajax()",5000);
    ajax();
});

function ajax(){

        $.post("ajax.php","",function(donnees){
            if ( donnees.validation == 'ok' )
            {
                $('#resultat').html(donnees.resultat);
            }
            else
            {
                alert ('Pb affichage employes');
            }
            },'json');

            }

