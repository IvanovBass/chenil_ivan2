<?php

class ProprietaireController extends Controller {

    public function index () {
        $proprietaires = Proprietaire::all();
        include('../views/proprietaire/list.php');
    }

    public function store ($data) {

       $erreurs = [];

       if (!(ctype_alpha($data['nom']) && strlen($data['nom']) <= 40 && !empty($data['nom']))) {
         $erreurs['nom'] = "Indiquer un nom de 40 caractères alphabétiques max. sans accents, non nul";
       }
       if (!(ctype_alpha($data['prenom']) && strlen($data['prenom']) <= 40 && !empty($data['prenom']))) {
         $erreurs['prenom'] = "Indiquez un prénom de 40 caractères alphabétiques max. sans accents, non nul";
       }
       if (!(strpos($data['email'], '@') && strlen($data['email']) <= 60 && !empty($data['email']))) {
         $erreurs['email'] = "l'adresse mail doit faire 60 caract. max et contenir @ ";
       }
       if (!(is_numeric($data['telephone']) && strlen($data['telephone']) <= 10 && !empty($data['telephone']))) {
         $erreurs['telephone'] = "Le num de téléphone doit être en chiffres, longueur 10 maximum, non nul";
       }

       if (!empty($erreurs)) {
         include('../views/proprietaire/create.php');
         var_dump($erreurs);
         unset($erreurs);
       } else {
         $proprietaire = new Proprietaire(0, $data['nom'], $data['prenom'], $data['date_naissance'],
         $data['email'], $data['telephone']);
         $proprietaire->save();
         $proprietaires = Proprietaire::all();
         include('../views/proprietaire/list.php');
       }

    }

    public function create () {
        include('../views/proprietaire/create.php');
    }

    public function update ($id) {
        $proprietaire = Proprietaire::find($_POST['id']);
        if (!$proprietaire) {
          return false;
        }

        $erreurs = [];

        if (!(ctype_alpha($_POST['nom']) && strlen($_POST['nom']) <= 40 && !empty($_POST['nom']))) {
          $erreurs['nom'] = "Indiquer un nom de 40 caractères alphabétiques max. sans accents, non nul";
        }
        if (!(ctype_alpha($_POST['prenom']) && strlen($_POST['prenom']) <= 40 && !empty($_POST['prenom']))) {
          $erreurs['prenom'] = "Indiquez un prénom de 40 caractères alphabétiques max. sans accents, non nul";
        }
        if (!(strpos($_POST['email'], '@') && strlen($_POST['email']) <= 60 && !empty($_POST['email']))) {
          $erreurs['email'] = "l'adresse mail doit faire 60 caract. max et contenir @ ";
        }
        if (!(is_numeric($_POST['telephone']) && strlen($_POST['telephone']) <= 10 && !empty($_POST['telephone']))) {
          $erreurs['telephone'] = "Le num de téléphone doit être en chiffres, longueur 10 maximum, non nul";
        }

        if (!empty($erreurs)) {
          include('../views/proprietaire/form.php');
          var_dump($erreurs);
          unset($erreurs);
        } else {
          $proprietaire->nom = $_POST['nom'];
          $proprietaire->prenom = $_POST['prenom'];
          $proprietaire->date_naissance = $_POST['date_naissance'];
          $proprietaire->email = $_POST['email'];
          $proprietaire->telephone = $_POST['telephone'];
          unset($_POST);
          $proprietaire->save();
          include('../views/proprietaire/list.php');
          return $this->list_xhr();
        }
    }

    public function destroy ($id) {
        $proprietaire = Proprietaire::find($id);
        if (!$proprietaire) {
            return false;
        }
        $proprietaire->delete();
        return $this->list_xhr();
    }

    public function edit ($id)  {
       $proprietaire = Proprietaire::find($id);
       if (!$proprietaire) {
         return false;
       }
       include('../views/proprietaire/form.php');
    }

    public function show ($id)  {
      $proprietaire = Proprietaire::find($id);
      if (!$proprietaire) {
        return false;
      }
      include('../views/proprietaire/one.php');
    }

    public function list_xhr() {
        $proprietaires = Proprietaire::all();
        include('../views/proprietaire/list_xhr.php');
    }
}
