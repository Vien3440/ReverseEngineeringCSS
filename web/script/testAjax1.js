$("#test1").click(function(){
     
    $.ajax({
       url : 'DefaultController.php', // La ressource ciblée
       type : 'GET', // Le type de la requête HTTP
       data : 'num1=' + num1,
       /**
        * Le paramètre data n'est plus renseigné, nous ne faisons plus passer de variable
        */
       dataType : 'html', // Le type de données à recevoir, ici, du HTML.
       success : function(code_html, statut){
           
       },

       error : function(resultat, statut, erreur){

       },

       complete : function(resultat, statut){
            alert(resultat);
       }

    });
   
});
