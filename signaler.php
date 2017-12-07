<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 08/12/17
 * Time: 00:27
 */


function addAlerte($lieu) {
    ajoutBD('<p><h1>Accident</h1><p>Un accident a eu lieu à ' . htmlspecialchars($lieu) . ' à ' . date("H:i"). '</p></p>');
}