$(document).ready(function(){
    $('#submit').click(function(event){

        event.preventDefault();
        ajax();
    });

    function ajax(){

        personne = $('#personne').val(); // récuperation de la valeur du champ input dans lequel est saisi un prénom

        // $.post("fichier destination","parametres",function("reponse"){}, "format")
        /* $.post("fichier.txt",,function(data){
                    $('#demo').html(data);
                    }),"text");
        */
       $.post("ajax.php","personne="+personne,function(donnees){
           if ( donnees.validation == 'ok' )
           {
               $("#resultat").append('<div class="divresul">employé'+personne+'ajouté</div>');
               $("#personne").val("");
           }
           else
           {
                alert("Pb insertion");
           }
       },"json");
    }
});