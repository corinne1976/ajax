<!DOCTYPE html>
<html>
<head>
  <script src='ajax.js'></script>

</head>
<body>
  <form method="post" action="#">
    <div id="resultat">
    <?php require_once('init.inc.php');
    $result = $pdo->query('SELECT *FROM employes');
    echo'<select name="personne" id="personne">';
    while ($employes = $result->fetch(PDO::FETCH_ASSOC)) {
      echo"<option value='$employe[id_employes]'>$employes[prenom]</option>";
    }
    echo '</select>';
    ?>
    </div>
    <input type="submit" value="supprimer" id="submit">
  </form>

</select>
</form>
</body>
</html>

