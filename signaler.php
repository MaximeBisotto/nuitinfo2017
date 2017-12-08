<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 08/12/17
 * Time: 00:27
 */

    ajoutBD('<p><h1>Accident</h1><p>Un accident a eu lieu à ' . htmlspecialchars($_POST['lieu']) . ' à ' . date("H:i"). '</p></p>');
    header("index.html")
?>