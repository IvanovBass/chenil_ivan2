<?php

class ProprietaireDAO extends DAO {

    public function __construct () {
        parent::__construct("proprietaire");
    }

    public function create ($data) {
        if ($data instanceof Proprietaire) {
            return $data;
        }

        if (!is_object($data)) {
            return new Proprietaire(
                isset($data['id']) ? $data['id'] : 0,
                $data['nom'],
                $data['prenom'],
                $data['date_naissance'],
                $data['email'],
                $data['telephone']
            );
        }
        return false;
    }

    public function store ($data , $statement = false) {
        $proprietaire = $this->create($data);

        if (!$proprietaire) {
            return false;
        }
        try {
           $statement = $this->db->prepare(
                "INSERT INTO {$this->table} (nom, prenom, date_naissance, email, telephone)
                  VALUES (?, ?, ?, ?, ?)");
             $statement->execute([
             htmlspecialchars($proprietaire->__get('nom')),
             htmlspecialchars($proprietaire->__get('prenom')),
             htmlspecialchars($proprietaire->__get('date_naissance')),
             htmlspecialchars($proprietaire->__get('email')),
             htmlspecialchars($proprietaire->__get('telephone'))
             ]);
        return true;
         } catch(PDOException $e) {
             print $e -> getMessage();
               return false;
        }
     }

     public function update ($data, $statement = false) {
         $proprietaire = $this->create($data);
         if (!$proprietaire) {
             return false;
         }
         $statement = $this->db->prepare("UPDATE {$this->table} SET nom=?,prenom=?,date_naissance=?,
           email=?,telephone=? WHERE id = ?");
           $statement->execute([
           htmlspecialchars($proprietaire->__get('nom')),
           htmlspecialchars($proprietaire->__get('prenom')),
           htmlspecialchars($proprietaire->__get('date_naissance')),
           htmlspecialchars($proprietaire->__get('email')),
           htmlspecialchars($proprietaire->__get('telephone')),
           htmlspecialchars($proprietaire->__get('id'))
           ]);
         parent::store([$proprietaire->nom,$proprietaire->prenom,$proprietaire->date_naissance,
         $proprietaire->email, $proprietaire->telephone, $proprietaire->id], $statement);
     }
}
