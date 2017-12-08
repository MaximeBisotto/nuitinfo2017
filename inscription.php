<?php
/**
 * Created by PhpStorm.
 * User: jyroda
 * Date: 07/12/2017
 * Time: 22:09
 */
session_start();
if ($_POST['password'] == $_POST['confirmPassword']) {
    $link = mysqli_connect('localhost', 'phpmyadmin', 'nuitinfo')
    or die('Problème de connection serveur : ' . mysqli_connect_error());
    mysqli_select_db($link, 'phpmyadmin')
    or die('Problème de sélection BD : ' . mysqli_error($link));
    $message = '<p><h1>Accident</h1><p>Un accident a eu lieu à ' . htmlspecialchars($_POST['lieu']) . ' à ' . date("H:i") . '</p></p>';
    $query = 'INSERT INTO ORGANISATEUR(\'NOM\', \'PRENOM\', \'PASSWD\', \'EMAIL\', \'TEL\') VALUES 
  (\'' . htmlspecialchars($_POST['nom']) . '\', \'' . htmlspecialchars($_POST['prenom']) . '\',
  SHA2(debut' . htmlspecialchars($_POST['password']) . 'fin),'
        . htmlspecialchars($_POST['email']) . '\', \'' . htmlspecialchars($_POST['tel']) . '\')';
    $resultat = mysqli_query($link, $query);
    if (!$resultat) {
        echo 'Impossible d\'executer la requete ', $query, ' : ', mysqli_error($link);
    }
    $_SESSION['logged'] = true;
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['tel'] = $_POST['tel'];
    header("Location: /success.php",TRUE,303);
}
else {
    echo 'mots de passe non identiques';
}
header("index.html")
?>


