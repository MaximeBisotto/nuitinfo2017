<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Signaler</title>
</head>
<body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'nuitinfo');
//$message = '<p><h1>Accident</h1><p>Un accident a eu lieu à ' . htmlspecialchars($_POST['lieu']) . ' à ' . date("H:i"). '</p></p>';
$reponse = $bdd->query('SELECT * FROM ALERTE');
while ($donnees = $reponse->fetch()) {
    echo $donnees['MESSAGE_ALERT']. PHP_EOL;
}
//$resultat->closeCursor();
?>
    <form action="signaler.php" method="post">
        Signaler le lieu du problème: <input type="text" name="lieu">
        <input type="submit">
    </form>
</body>
</html>