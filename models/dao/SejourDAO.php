<?php

class SejourDAO extends DAO {

    public function __construct () {
        parent::__construct("sejour");
    }

    public function create ($data) {
        if ($data instanceof Sejour) {
            return $data;
        }

        if (!is_object($data)) {
            return new Sejour(
                isset($data['id']) ? $data['id'] : 0,
                $data['id_animal'],
                $data['date_sejour']
            );
        }
        return false;
    }

    public function store ($data , $statement = false) {
        $sejour = $this->create($data);

        if (!$sejour) {
            return false;
        }

        $statement = $this->db->prepare("INSERT INTO {$this->table} (id_animal, date_sejour) VALUES (?, ?)");
        parent::store([$sejour->id_animal, $sejour->date_sejour], $statement);
    }


}
