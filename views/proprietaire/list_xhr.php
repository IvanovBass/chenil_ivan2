<?php
//Pour ne pas avoir a renvoyer une page entiere (avec les balises intuiles + le formulaire)
//mais uniquement le bout de page qui a changé
?>
<?php if (isset($proprietaires) && !empty($proprietaires)): ?>
    <?php foreach($proprietaires as $proprietaire): ?>
        <TR>
            <TD><?= $proprietaire->nom; ?></TD>
            <TD><?= $proprietaire->prenom; ?></TD>
            <TD><?= $proprietaire->date_naissance; ?></TD>
            <TD><?= $proprietaire->email; ?></TD>
            <TD><?= $proprietaire->telephone; ?></TD>
            <TD><a href="//chenilivan.local/proprietaire/destroy/<?=$proprietaire->id ?>">
            <button id="<?= $proprietaire->id ?>" class="delete" action="destroy">Supprimer</button></a></TD> <!-- celui-ci
            possède son propre événement javascript, voir fonction correspondante -->
            <TD><a href="//chenilivan.local/proprietaire/edit/<?=$proprietaire->id ?>"><button>Modifier</button></a></TD>
            <TD><a href="//chenilivan.local/proprietaire/show/<?=$proprietaire->id ?>"><button>Voir</button></a></TD>
        </TR>
        <input hidden  class='category' value='proprietaire'/>
    <?php endforeach; ?>
<?php endif; ?>
