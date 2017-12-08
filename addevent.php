<?php
/**
 * Created by PhpStorm.
 * User: jyroda
 * Date: 08/12/2017
 * Time: 04:47
 */
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    $bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'nuitinfo');
    $bdd->query("INSERT INTO EVENTS('nom','debut','fin','site') VALUES ('" . $_POST['nom'] ."', '".
        date ("Y-m-d H:i:s", date_create_from_format("j F, YGi", $_POST['debut'] . $_POST['hdebut'])) .
        "', '" . date ("Y-m-d H:i:s", date_create_from_format("j F, YGi", $_POST['fin'] . $_POST['hfin'])) . "', '')");
    header("Location: /success.php",TRUE,303);
} else {
    //TODO Erreur login :(
}