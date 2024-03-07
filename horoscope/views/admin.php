<!DOCTYPE html>
<html lang="en">
<head lang="fr">
    <meta charset="utf-8"/>
    <title>Titre au hasard</title>
  </head>
  <body>
    <form method="POST" action="index.php?action=connexion">
        <?php foreach($signe as $k=>$v):?>
        <label for="signe"><?=$k?></label>
        <input type="texte" name="signe"  id="signe" value="<?=$v?>"/><br>
        <?php endforeach?>
    </form>
  </body>
</html>