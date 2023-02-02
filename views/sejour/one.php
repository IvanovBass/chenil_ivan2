<div class="one-view">
<h2>Séjour n°<?= $sejour->id ?></h2>
<h4>Animal en pension: <?= Animal::find($sejour->id_animal) ?></h4>
<h4>Propriétaire : <?= (Proprietaire::find((Animal::find($sejour->id_animal))->id_proprietaire))->prenom ?></h4>
<h4>Email  : <?= (Proprietaire::find((Animal::find($sejour->id_animal))->id_proprietaire))->email ?></h4>
<h4>Téléphone : <?= (Proprietaire::find((Animal::find($sejour->id_animal))->id_proprietaire))->telephone ?></h4>
</div>
