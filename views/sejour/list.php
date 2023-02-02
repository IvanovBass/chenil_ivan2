<h2>Les séjours du chenil</h2>
<div class="table-view">
<TABLE>

<TR>
  <TD>Animal</TD>
  <TD>Date de séjour</TD>
  <TD></TD>
  <TD></TD>
</TR>
<?php include('list_xhr.php') ?>
<div  style="display: inline-block;">
  <a  href="/sejour/create"><button  class="to-sejour-creation">Créer un séjour</button></a>
  <select name="date_sejour" class="date_sejour"  onchange="location = this.value;">
    <?php foreach ($sejours as $sejour) { ?>
    <option value="/sejour/where/date_sejour/<?=$sejour->date_sejour?>">
      <?=$sejour->date_sejour?></option>
    <?php } ?>
  </select>
    <label>Choisissez une date pour y voir les séjours déjà réservés</label>
</div>

  <?php if (!empty($erreurs)) {
    var_dump($erreurs);
    unset($erreurs);
  }?>

</div>
