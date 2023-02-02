<h2>Editer <?= $animal->nom ?> de type "<?= $animal->type ?>"<h2>
  <form action="/animal/update/<?= $animal->id ?>" method="post">
    <input type="hidden" name="id" value="<?= $animal->id ?>"/>
    <div>
      <label for="nom">Nom : </label>
      <input type="text" name="nom" id="nom" value="<?= $animal->nom ?>">
    </div>
    <div>
      <label for="sexe">Sexe : M/F ? </label>
      <input type=text maxlength="1" name="sexe" value="<?= $animal->sexe ?>">
    </div>
    <div>
      <label for="type">Type : </label>
      <input name="type" type="text" value="<?= $animal->type ?>">
    </div>
    <div>
      <label for="sterilise">Sterilisé ? 0 pour faux, 1 pour vrai : </label>
      <input name="sterilise" type="number" maxlenght="1" value="<?= $animal->sterilise ?>">
    </div>
    <div>
      <label for="date_naissance">Date de naissance : </label>
      <input name="date_naissance" type="date" value="<?= $animal->date_naissance ?>">
    </div>
    <div>
      <label for="id_proprietaire">Propriétaire : </label>
      <select name="id_proprietaire" id ="id_proprietaire">
        <?php foreach ($proprietaires=(Proprietaire::all()) as $proprietaire) { ?>
        <option value="<?= $proprietaire->id?>">
          <?=$proprietaire->prenom.' '.$proprietaire->nom?></option>
        <?php } ?>
      </select>
    </div>
    <div>
      <button class="edit-animal"  type="submit">Envoyer les modifications</button>
    </div>
</form>
