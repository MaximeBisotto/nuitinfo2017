<?php
/**
 * Created by PhpStorm.
 * User: jyroda
 * Date: 08/12/2017
 * Time: 05:07
 */
session_start();

if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    header("index.html");
}

$bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'nuitinfo');

if (isset($_POST['login']) && isset($_POST['password'])) {
    $result = $bdd->query("SELECT * FROM ORGANISATEUR WHERE EMAIL=". $_POST['login']);
    if (mysqli_num_rows($result)==0) {
        //TODO No user
    } else {
        if ($result['PASSWD'] != md5($_POST['password'])) {
            //TODO Invalid pass
        } else {
            $_SESSION['logged'] = true;
            $_SESSION['nom'] = $result['NOM'];
            $_SESSION['prenom'] = $result['PRENOM'];
            $_SESSION['email'] = $result['EMAIL'];
            $_SESSION['tel'] = $result['TEL'];
            //TODO redirect ? login successful anyway
        }
    }
}