<?php
/**
 * Created by PhpStorm.
 * User: jyroda
 * Date: 08/12/2017
 * Time: 04:47
 */
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    //TODO faire requetes
} else {
    //TODO Erreur login :( 
}