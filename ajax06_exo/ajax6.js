document.addEventListener("DOMContentLoaded", function(event){
  ajax();
  
  function ajax(){
    r = new XMLHttpRequest();// permet d'envoyer une requete ajax dans l'url


    // il faut affecte une valeur afin de l'inserer dans la bdd prepare les parametre  à envoyer à la requete sql
    r.open("POST", "ajax6.php", true);// je prepare le fichier php
    r.setRequestHeader("content-type", "application/x-www-form-urlencoded");//  envant d'envoyer la requete on va la definir un titre à la requete
    r.send();// on donne le feu vert la requete peut etre envoye et executer
    
    r.onreadystatechange = function(){// permet de faire le traitement pour l'executer
    
    if (r.readyState == 4 && r.status == 200) {// si tout est ok on cree une condition
      
      var obj = JSON.parse(r.responseText);// permet de la convertir au bon format en l'occurence json
      console.info(obj);
      document.getElementById("resultat").innerHTML = obj.monresultat;// je vais allez pointer sur ma div avec l'id resultat innerhtml convertir en html et une div avec du texte resultat qui permettra d'indiquer que le prenom a bien ete inserer
    }
  }
  
  
}
});

