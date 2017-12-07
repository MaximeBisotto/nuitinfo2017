<?php
/**
 * Created by PhpStorm.
 * User: jyroda
 * Date: 07/12/2017
 * Time: 19:59
 */

include_once('simple_html_dom.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$html = null;

/* BOUCHONS */

if ($_GET['info'] == "bouchons") {
    $html = file_get_html("http://tipi.bison-fute.gouv.fr/publication/cnir/RecapBouchonsFranceEntiere.html");
}

/* ALERTES */

if ($_GET['info'] == "alertes") {
    $html = file_get_html("http://tipi.bison-fute.gouv.fr/publication/cnir/RecapTraficFranceEntiere.html");
}

/* CHANTIERS */

if ($_GET['info'] == "chantiers") {
    $html = file_get_html("http://tipi.bison-fute.gouv.fr/publication/cnir/RecapChantiersEnCours.html");
}



$tableau = array();
$body = $html->find('body')[0];
$departement = 0;
foreach ($body->children() as $element) {
    if (isset($element->class) && $element->class == 'rupture') {
        $departement = filter_var($element->first_child()->plaintext, FILTER_SANITIZE_NUMBER_INT);
    }
    if (isset($element->class) && $element->class == 'interligne') {
        $tableau[$departement][] = $element->plaintext;
    }
}

if (isset($_GET['departement'])) {
    if (array_key_exists($_GET['departement'], $tableau)) {
        print_r(json_encode($tableau[$_GET['departement']]));
    } else {
        $temp = array();
        print_r(json_encode($temp));
    }
} else {
    print_r(json_encode($tableau));
}