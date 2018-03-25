<?php

namespace Blog\Models;

use Blog\Framework\Modele;

class Billet extends Modele
{
    private $_id;
    private $_date;
    private $_titre;
    private $_contenu;
    private $_visible;
    private $_photo;

    public function hydrate(array $billet)
    {
        foreach($billet as $key => $value)
        {
            $methode = 'set' . ucfirst($key);
            if (method_exists($this, $methode))
                $this->$methode($value);
        }
    }
    // Liste des getters

    public function id() { return $this->_id; }
    public function date() { return $this->_date; }
    public function titre() { return $this->_titre; }
    public function contenu() { return $this->_contenu; }
    public function _visible() { return $this->_visible; }
    public function photo() { return $this->_photo; }

    // Liste des Setters

    public function setId($id)
    {
        $this->_id = (int) $id;
    }
    public function settitre($titre)
    {
        if (is_string($titre))
        {
            $this->_titre = $titre;
        }
    }
    public function setdate($date)
    {
        $this->_date = $date;
    }
    public function setcontenu($contenu)
    {
        if (is_string($contenu))
        {
            $this->_contenu = $contenu;
        }
    }
    public function setcontenu($visible)
    {
        $this->_visible = $visible;
    }
    public function setcontenu($photo)
    {
        $this->_photo = $photo;
    }
}