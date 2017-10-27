
document.addEventListener("DOMContentLoaded", function(event){
  document.getElementById("submit").addEventListener('click',function(event){
    event.preventDefault();// anule le comportement par défaut du submit qui est censé recharger la page
    ajax();
  });
  function ajax(){
    r = new XMLHttpRequest();
    var p = document.getElementById("personne");
    var personne = p.options[p.selectedIndex].value;
    //console.info(id);

    var parameters = "personne="+personne;
    console.info(parameters);
    r.open("POST", "ajax9.php", true);
    r.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    r.send(parameters);
    r.onreadystatechange = function(){
      if (r.readyState == 4 && r.status == 200) {
        var obj = JSON.parse(r.responseText);
        console.info(obj);
        document.getElementById("resultat").innerHTML = obj.resultat;
      }
    }


  }
});
