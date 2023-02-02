<div class="one-view">
  <h2>Nom : <?= $animal->nom ?></h2>
  <h4>Sexe: <?= $animal->sexe ?></h4>
  <h4>Type: <?= $animal->type ?></h4>
  <h4>Sterilisé ?  <?= ($animal->sterilise)==1?" Oui" : " Non" ?></h4>
  <h4>Date de naissance: <?= $animal->date_naissance ?></h4>
  <h4>Propriétaire : <?= (Proprietaire::find($animal->id_proprietaire))->prenom ?> </h4>
</div>
