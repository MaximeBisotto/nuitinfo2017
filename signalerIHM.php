<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Signaler</title>
</head>
<body>
<?php
echo 'a';
$link = mysqli_connect('localhost', 'phpmyadmin', 'nuitinfo')
    or die('Problème de connection serveur : ' . mysqli_connect_error());
mysqli_select_db($link, 'phpmyadmin')
    or die('Problème de sélection BD : ' . mysqli_error($link));
$message = '<p><h1>Accident</h1><p>Un accident a eu lieu à ' . htmlspecialchars($_POST['lieu']) . ' à ' . date("H:i"). '</p></p>';
echo 'b';
$query = 'SELECT * FROM ALERTE';
$resultat = mysqli_query($link, $query);
if (!$resultat) {
    echo 'Impossible d\'executer la requete ', $query, ' : ', mysqli_error($link);
}
echo 'c';
while($a=$resultat->fetch())
{
    echo $a['MESSAGE_ALERT'];
}
$resultat->closeCursor();
echo 'd';
?>
    <form action="signaler.php" method="post">
        Signaler le lieu du problème: <input type="text" name="lieu">
        <input type="submit">
    </form>
</body>
</html>