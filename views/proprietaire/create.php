<h2>Créer un nouveau propriétaire : <h2>
  <form action="/proprietaire/store/"  method="post">
    <div>
      <label for="nom">Nom : </label>
      <input type="text" name="nom" class="nom" placeholder="Nom...">
    </div>
    <div>
      <label for="prenom">Prénom : </label>
      <input type=text name="prenom" class="prenom" placeholder="Prénom...">
    </div>
    <div>
      <label for="date_naissance">Date de naissance : </label>
      <input name="date_naissance" type="date" class="date_naissance">
    </div>
    <div>
      <label for="email">Email : </label>
      <input name="email" type="email" class="email" placeholder="jean-francois@hotmail.com">
    </div>
    <div>
      <label for="telephone">Téléphone : </label>
      <input name="telephone" type="number" maxlenght="10" class="telephone" placeholder="0478552800">
    </div>
    <div>
      <button class="create-proprietaire" type="submit">Sauvegarder en DB</button>
      <p class="message-erreur"></p>
    </div>
  </form>
