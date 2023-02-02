<?php

class AnimalDAO extends DAO {

    public function __construct () {
        parent::__construct("animal");
    }

    public function create ($data) {
        if ($data instanceof Animal) {
            return $data;
        }

        if (!is_object($data)) {
            return new Animal(
                isset($data['id']) ? $data['id'] : 0,
                $data['nom'],
                $data['sexe'],
                $data['type'],
                $data['sterilise'],
                $data['date_naissance'],
                $data['id_proprietaire']
            );
        }
        return false;
    }

    public function store ($data , $statement = false) {
        $animal = $this->create($data);

        if (!$animal) {
            return false;
        }
        try {
    		   $statement = $this->db->prepare(
    			      "INSERT INTO {$this->table} (nom, sexe, type, sterilise, date_naissance, id_proprietaire)
            		  VALUES (?, ?, ?, ?, ?, ?)");
    		     $statement->execute([
    			   htmlspecialchars($animal->__get('nom')),
             htmlspecialchars($animal->__get('sexe')),
             htmlspecialchars($animal->__get('type')),
             htmlspecialchars($animal->__get('sterilise')),
             htmlspecialchars($animal->__get('date_naissance')),
             htmlspecialchars($animal->__get('id_proprietaire'))
    		     ]);
    		return true;
    	   } catch(PDOException $e) {
    		     print $e -> getMessage();
    		       return false;
    	  }
     }

    public function update ($data, $statement = false) {
        $animal = $this->create($data);
        if (!$animal) {
            return false;
        }
        $statement = $this->db->prepare("UPDATE {$this->table} SET nom=?,sexe=?,type=?,
          sterilise=?,date_naissance=?,id_proprietaire=? WHERE id = ?");
          $statement->execute([
          htmlspecialchars($animal->__get('nom')),
          htmlspecialchars($animal->__get('sexe')),
          htmlspecialchars($animal->__get('type')),
          htmlspecialchars($animal->__get('sterilise')),
          htmlspecialchars($animal->__get('date_naissance')),
          htmlspecialchars($animal->__get('id_proprietaire')),
          htmlspecialchars($animal->__get('id'))
          ]);
        parent::store([$animal->nom,$animal->sexe,$animal->type,$animal->sterilise,
        $animal->date_naissance,$animal->id_proprietaire, $animal->id], $statement);
    }
}
