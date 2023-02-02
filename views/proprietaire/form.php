<h2>Modifier <?= $proprietaire->prenom.' '.$proprietaire->nom ?>  <h2>
  <form action="/proprietaire/update/<?php $proprietaire->id ?>"  method="post">
    <input type="hidden" name="id" value="<?= $proprietaire->id ?>"/>
    <div>
      <label for="nom">Nom : </label>
      <input type="text" name="nom" class="nom" placeholder="<?= $proprietaire->nom ?>">
    </div>
    <div>
      <label for="prenom">Prénom : </label>
      <input type=text name="prenom" class="prenom" placeholder="<?= $proprietaire->prenom ?>">
    </div>
    <div>
      <label for="date_naissance">Date de naissance : </label>
      <input name="date_naissance" type="date" class="date_naissance">
    </div>
    <div>
      <label for="email">Email : </label>
      <input name="email" type="email" class="email" placeholder="<?= $proprietaire->email ?>">
    </div>
    <div>
      <label for="telephone">Téléphone : </label>
      <input name="telephone" type="number" maxlenght="10" class="telephone" placeholder="<?= $proprietaire->telephone ?>">
    </div>
    <div>
      <button class="edit-proprietaire" type="submit">Envoyer les modifications</button>
    </div>
  </form>
