<?php
/**
 * Created by PhpStorm.
 * User: jyroda
 * Date: 07/12/2017
 * Time: 22:09
 */

if ($_POST['password'] == $_POST['confirmPassword']) {
    $link = mysqli_connect('localhost', 'phpmyadmin', 'nuitinfo')
    or die('Problème de connection serveur : ' . mysqli_connect_error());
    mysqli_select_db($link, 'phpmyadmin')
    or die('Problème de sélection BD : ' . mysqli_error($link));
    $message = '<p><h1>Accident</h1><p>Un accident a eu lieu à ' . htmlspecialchars($_POST['lieu']) . ' à ' . date("H:i") . '</p></p>';
    $query = 'INSERT INTO \`ORGANISATEUR\`(\'NOM\', \'PRENOM\', \'PASSWD\', \'EMAIL\', \'TEL\') VALUES 
  (\'' . htmlspecialchars($_POST['nom']) . ', ' . htmlspecialchars($_POST['prenom']) . ', ' . sha1(htmlspecialchars($_POST['password'])) . ', '
        . htmlspecialchars($_POST['email']) . ', ' . htmlspecialchars($_POST['tel']) . '\')';
    $resultat = mysqli_query($link, $query);
    if (!$resultat) {
        echo 'Impossible d\'executer la requete ', $query, ' : ', mysqli_error($link);
    }
}
else {
    echo 'mot de passe non identiques';
}
header("index.html")
?>


