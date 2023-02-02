<h2 class="booking-form">Créer un nouvel animal<h2>
  <form action="/animal/store/"  method="post">
    <div class="booking-form">
      <label for="nom">Nom : </label>
      <input type="text" name="nom" class="nom" placeholder="Donne-lui un petit nom">
    </div>
    <div class="booking-form">
      <label for="sexe">Sexe : </label>
      <input type=text name="sexe" maxlength="1" class="sexe" placeholder="M ou F">
    </div>
    <div class="booking-form">
      <label for="type">Type : </label>
      <input name="type" type="text" class="type" placeholder="Chien, chat, ours...">
    </div>
    <div class="booking-form">
      <label for="sterilise">Sterilisé (0 pour faux / 1 pour vrai) : </label>
      <input name="sterilise" type="number" class="sterilise" maxlenght="1">
    </div>
    <div class="booking-form">
      <label for="date_naissance">Date de naissance : </label>
      <input name="date_naissance" type="date" class="date_naissance">
    </div>
    <div class="booking-form">
      <label for="id_proprietaire">Propriétaire : </label>
      <select name="id_proprietaire" class="id_proprietaire">
        <?php foreach ($proprietaires as $proprietaire) { ?>
        <option value="<?=$proprietaire->id ?>"><?=$proprietaire->prenom.' '.$proprietaire->nom?></option>
        <?php } ?>
      </select>
    </div>
    <div class="booking-form">
      <button class="create-animal" type="submit">Sauvegarder</button>
      <p class="message-erreur"></p>
    </div>
  </form>
