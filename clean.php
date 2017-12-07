<?php
/**
 * Created by PhpStorm.
 * User: jyroda
 * Date: 07/12/2017
 * Time: 22:32
 */


if (isset($_POST[''])) {

    $json;
    if (!file_exists('events.json')) {
        $json = array();
    } else {
        $json = json_decode(file_get_contents('events.json'), true);
    }
    foreach ($json as $event) {
        $date = new DateTime($event['fin']);
        if (date_default_timezone_get() > $date) {
            unset($json[array_search($event, $json)]);
        }
    }
    file_put_contents('events.json', json_encode($json));
}