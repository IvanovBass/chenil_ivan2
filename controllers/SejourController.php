<?php

class SejourController extends Controller {
    public function index () {
        $sejours = Sejour::all();
        include('../views/sejour/list.php');
    }

    public function store ($data) {
      $sejour = new Sejour(0, $data['id_animal'], $data['date_sejour']);
      $sejour->save();
      $sejours = Sejour::all();
      include('../views/sejour/list.php');
    }

    public function create () {
        $sejours = Sejour::all();
        $animals = Animal::all();
        include('../views/sejour/create.php');
    }

    public function destroy ($id) {
        $sejour = Sejour::find($id);
        if (!$sejour) {
            return false;
        }
        $sejour->delete();
        return $this->list_xhr();
    }

    public function show ($id)  {
      $sejour = Sejour::find($id);
      if (!$sejour) {
        return false;
      }
      include('../views/sejour/one.php');
    }

    public function list_xhr() {
        $sejours = Sejour::all();
        include('../views/sejour/list_xhr.php');
    }

    public function where ($attr, $value)  {
      $sejours = Sejour::where($attr, $value);
      if (empty($sejours)) {
        echo 'Pas de séjour sur le critère choisi';
      } else {
        include('../views/sejour/list.php');
      }
    }
}
