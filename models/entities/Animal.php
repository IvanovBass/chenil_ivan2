<?php

class Animal extends Entity {

    protected $id;
    protected $nom;
    protected $sexe;
    protected $type;
    protected $sterilise;
    protected $date_naissance;
    protected $id_proprietaire;
    protected static $dao_name = "AnimalDAO";

    public function __construct ($id, $nom, $sexe, $type, $sterilise, $date_naissance, $id_proprietaire) {
        $this->id = $id;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->type = $type;
        $this->sterilise = $sterilise;
        $this->date_naissance = $date_naissance;
        $this->id_proprietaire = $id_proprietaire;
        parent::__construct(self::$dao_name);
    }

    public function __toString () {
        return $this->nom." (". $this->type .")";
    }

    public function __get ($prop) {
        if (property_exists($this, $prop)) {
            return $this->$prop;
        }
    }
}
