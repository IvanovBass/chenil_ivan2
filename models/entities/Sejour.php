<?php

class Sejour extends Entity {

    protected $id;
    protected $id_animal;
    protected $date_sejour;
    protected static $dao_name = "SejourDAO";

    public function __construct ($id, $id_animal, $date_sejour) {
        $this->id = $id;
        $this->id_animal = $id_animal;
        $this->date_sejour = $date_sejour;
        parent::__construct(self::$dao_name);
    }

    public function __toString () {
        return $this->id." (". $this->date_sejour .")";
    }

    public function __get ($prop) {
        if (property_exists($this, $prop)) {
            return $this->$prop;
        }
    }

    // public function sort_date ($date) {
    //     return $this->SejourDAO->where('date_sejour', $date);
    // }

}
