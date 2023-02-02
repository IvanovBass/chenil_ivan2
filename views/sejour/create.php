<h2>Créer un nouveau contrat de séjour<h2>
  <form action="/sejour/store/"  method="post" class="booking-form">
    <div>
      <label for="id_animal">Animal : </label>
      <select name="id_animal" class="id_animal">
        <?php foreach ($animals as $animal) { ?>
        <option value="<?=$animal->id ?>"><?=$animal->nom ?></option>
        <?php } ?>
      </select>
    </div>
    <div>
      <label for="date_sejour">Date de séjour : </label>
      <input name="date_sejour" type="date" class="date_sejour">
    </div>
    <div>
      <button class="create-sejour" type="submit">Sauvegarder en DB</button>
      <p class="message-erreur"></p>
    </div>
  </form>
