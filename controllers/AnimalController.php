<?php

class AnimalController extends Controller {
    public function index () {
        $animals = Animal::all();
        include('../views/animal/list.php');
    }

    public function store ($data) {     //attention sans utf 8 des caractères avec accents prennent des valeurs énormes
      $erreurs = [];

       if (!(ctype_alpha($data['nom']) && strlen($data['nom']) <= 40 && !empty($data['nom']))) {
         $erreurs['nom'] = "Veuillez indiquer un nom de 40 caractères alphabétiques max. sans accents, non nul";
       }
       if (!(strtolower($data['sexe']) == 'm' || strtolower($data['sexe']) == 'f')) {
         $erreurs['sexe'] = "indiquez M ou F pour le sexe, pas autre chose";
       }
       if (!(ctype_alpha($data['type']) && strlen($data['type']) <= 40 && !empty($data['type']))) {
         $erreurs['type'] = "veuillez indiquer le type, en maximum 40 caractères alphabétiques uniquement sans accents, non nul";
       }
       if (!($data['sterilise'] == 0 || $data['sterilise'] == 1)) {
         $erreurs['sterilise'] = "veuillez indiquer 0 ou 1 pour la stérilisation";
       }

       if (!empty($erreurs)) {
         include('../views/animal/list.php');
       } else {
         $animal = new Animal(0, $data['nom'], $data['sexe'], $data['type'], $data['sterilise'],
         $data['date_naissance'], $data['id_proprietaire']);
         $animal->save();
         $animals = Animal::all();
         include('../views/animal/list.php');
       }
     }

    public function create () {
        $proprietaires = Proprietaire::All();
        include('../views/animal/create.php');
    }

    public function update ($id) {
        $animal = Animal::find($id);
        if (!$animal) {
          return false;
        }
        $erreurs = [];
         if (!(ctype_alpha($_POST['nom']) && strlen($_POST['nom']) <= 40 && !empty($_POST['nom']))) {
           $erreurs['nom'] = "Veuillez indiquer un nom de 40 caractères alphabétiques max. sans accents, non nul";
         }
         if (!(strtolower($_POST['sexe']) == 'm' || strtolower($_POST['sexe']) == 'f')) {
           $erreurs['sexe'] = "indiquez M ou F pour le sexe, pas autre chose";
         }
         if (!(ctype_alpha($_POST['type']) && strlen($_POST['type']) <= 40 && !empty($_POST['type']))) {
           $erreurs['type'] = "veuillez indiquer le type, en maximum 40 caractères alphabétiques uniquement sans accents, non nul";
         }
         if (!($_POST['sterilise'] == 0 || $_POST['sterilise'] == 1)) {
           $erreurs['sterilise'] = "veuillez indiquer 0 ou 1 pour la stérilisation";
         }

         if (empty($erreurs)) {
           $animal->nom = $_POST['nom'];
           $animal->sexe = $_POST['sexe'];
           $animal->type = $_POST['type'];
           $animal->sterilise = $_POST['sterilise'];
           $animal->date_naissance = $_POST['date_naissance'];
           $animal->id_proprietaire = $_POST['id_proprietaire'];
           unset($_POST);
           $animal->save();
           include('../views/animal/list.php');
           return $this->list_xhr();
         } else {
           include('../views/animal/form.php');
           var_dump($erreurs);
           unset($erreurs);
         }

    }

    public function destroy ($id) {
        $animal = Animal::find($id);
        if (!$animal) {
            return false;
        }
        $animal->delete();
        return $this->list_xhr();
    }

    public function edit ($id)  {
       $animal = Animal::find($id);
       if (!$animal) {
         return false;
       }
       include('../views/animal/form.php');
    }

    public function show ($id)  {
      $animal = Animal::find($id);
      if (!$animal) {
        return false;
      }
      include('../views/animal/one.php');
    }

    public function list_xhr() {
        $animals = Animal::all();
        include('../views/animal/list_xhr.php');
    }

    public function where ($attr, $value)  {
      $animals = Animal::where($attr, $value);
      if (empty($animals)) {
        echo "Pas d'animal sur le critère choisi";
      } else {
        include('../views/animal/list.php');
      }
    }
}
