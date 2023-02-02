<?php

class Proprietaire extends Entity {

    protected $id;
    protected $nom;
    protected $prenom;
    protected $date_naissance;
    protected $email;
    protected $telephone;
    protected static $dao_name = "ProprietaireDAO";

    public function __construct ($id, $nom, $prenom, $date_naissance, $email, $telephone) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->email = $email;
        $this->telephone = $telephone;
        parent::__construct(self::$dao_name);
    }

    public function __toString () {
        return $this->prenom." (". $this->nom .")";
    }

    public function __get ($prop) {
        if (property_exists($this, $prop)) {
            return $this->$prop;
        }
    }
}
