<?php
//petite partie de vue qui s'occupe d'afficher la liste des animaux
//on va l'utiliser aussi pour nos requetes AJAX histoire de ne pas avoir a renvoyer une page entiere
//(avec les balises intuiles + le formulaire) mais uniquement le bout de page qui a changé
?>
<?php if (isset($sejours) && !empty($sejours)): ?>
    <?php foreach($sejours as $sejour): ?>
        <TR>
            <TD><?= (Animal::find($sejour->id_animal))->nom; ?></TD>
            <TD><?= $sejour->date_sejour; ?></TD>
            <TD><a href="/sejour/destroy/<?= $sejour->id ?>"><button id="<?= $sejour->id ?>"
              class="delete" action="destroy">Supprimer</button></a></TD>
            <TD><a href="/sejour/show/<?=$sejour->id ?>"><button id="<?= $sejour->id ?>"
              class="one"  action="show">Voir</button></a></TD>
        </TR>
        <input hidden  class='category' value='sejour'/>
    <?php endforeach; ?>
<?php endif; ?>
