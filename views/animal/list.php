
<h2>Les animaux du chenil</h2>

<div class="table-view">
  <TABLE>

  <TR>
    <TD>Nom</TD>
    <TD>Sexe</TD>
    <TD>Type</TD>
    <TD>Sterilisé</TD>
    <TD>Date de naissance</TD>
    <TD>Propriétaire</TD>
    <TD></TD>
    <TD></TD>
    <TD></TD>
  </TR>
  <?php include('list_xhr.php') ?>
  <div>
  <a  href="/animal/create"><button  class="to-animal-creation">   Créer un animal   </button></a>
    <select onchange="location = this.value;"  style="text-align: right;">
      <?php foreach ($animals as $animal) { ?>
      <option value="/animal/where/id_proprietaire/<?=$animal->id_proprietaire?>">
        <?=(Proprietaire::find($animal->id_proprietaire))->prenom.' '.(Proprietaire::find($animal->id_proprietaire))->nom?></option>
      <?php } ?>
    </select>
      <label>Choisissez un proprio pour en afficher les animaux</label>
  </div>
  <?php if (!empty($erreurs)) {
    var_dump($erreurs);
    unset($erreurs);
  }?>
</div>
