document.addEventListener('DOMContentLoaded', function(event){

    document.getElementById('submit').addEventListener('click',function(event){
        event.preventDefault();
        ajax();
    })
    function ajax(){

    if ( window.XMLHttpRequest ) r = new XMLHttpRequest(); // pour la plupart des navigateurs
    else r = new ActiveXObject("Microsoft.XMLHTTP"); // pour IE
    
    var personne = document.getElementById('personne');
    personne = personne.options[personne.selectedIndex].value;

    var parameters="personne="+personne; 
    r.open('POST','ajax.php',true);
        r.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        r.onreadystatechange = function(){

            if ( r.readyState == 4 && r.status == 200 )
            {
                var obj = JSON.parse(r.responseText); // parse -> parcourir un fichier et le remettre aux bons indexes
                document.getElementById('resultat').innerHTML = obj.resultat;
            }

            
        }
        r.send(parameters);
    }
});
