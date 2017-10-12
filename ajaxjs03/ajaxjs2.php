<!DOCTYPE html>
<html>
<head>
  <script src='ajaxjs2.js'></script>

</head>
<body>
  <form method="post" action="#">
    <?php require_once('init.inc.php');
    $result = $pdo->query('SELECT *FROM employes');
    echo'<select name="personne" id="personne">';
    while ($employes = $result->fetch(PDO::FETCH_ASSOC)) {
      echo"<option>$employes[prenom]</option>";
    }
    echo '</select>';
    ?>
    <input type="submit" value="ok" id="submit">
  </form>
  <div id="resultat"></div>
</select>
</form>
</body>
</html>
