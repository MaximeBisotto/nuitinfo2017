<?php
/**
 * Created by PhpStorm.
 * User: jyroda
 * Date: 07/12/2017
 * Time: 22:15
 */



class Event
{
    public $nom;
    public $date_debut;
    public $date_fin;
    public $site_organisateur;

    function __construct($nom, $date_debut, $date_fin)
    {
        date_default_timezone_set('France/Paris');
        if ($nom == null || $date_debut == null || $date_fin)
            return null;
        if ($date_debut > $date_fin)
            return null;
        if ($date_debut < date_default_timezone_get())
            return null;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->nom = $nom;
    }

    function toArray() {
        $array = array();
        $array['nom'] = $this->nom;
        $array['debut'] = $this->date_debut->format('Y-m-d H:i:s');
        $array['fin'] = $this->date_fin->format('Y-m-d H:i:s');
        if (isset($this->site_organisateur))
            $array['site'] = $this->site_organisateur;
        return $array;
    }
}