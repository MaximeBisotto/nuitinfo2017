<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 08/12/17
 * Time: 00:27
 */

$link = mysqli_connect('localhost', 'phpmyadmin', 'nuitinfo')
    or die('Problème de connection serveur : ' . mysqli_connect_error());
mysqli_select_db($link, 'phpmyadmin')
    or die('Problème de sélection BD : ' . mysqli_error($link));
$message = '<p><h1>Accident</h1><p>Un accident a eu lieu à ' . htmlspecialchars($_POST['lieu']) . ' à ' . date("H:i"). '</p></p>';
$query = 'INSERT INTO `ALERTE`(`MESSAGE_ALERT`) VALUES (\'' . $message . '\')';
$resultat = mysqli_query($link, $query);
if (!$resultat) {
    echo 'Impossible d\'executer la requete ', $query, ' : ', mysqli_error($link);
}
    header("index.html")
?>