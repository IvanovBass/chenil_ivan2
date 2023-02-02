<h2>Les propriétaires du chenil</h2>
<div class="table-view">
<TABLE>

<TR>
  <TD>Nom</TD>
  <TD>Prenom</TD>
  <TD>Date de naissance</TD>
  <TD>Email</TD>
  <TD>Telephone</TD>
  <TD></TD>
  <TD></TD>
  <TD></TD>
</TR>
<?php include('list_xhr.php') ?>
<a  href="//chenilivan.local/proprietaire/create"><button  class="to-proprietaire-creation">
  Créer un propriétaire</button></a>

  <?php if (!empty($erreurs)) {
    var_dump($erreurs);
    unset($erreurs);
  }?>
</div>
