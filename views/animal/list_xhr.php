<?php
//Pour ne pas avoir a renvoyer une page entiere (avec les balises intuiles + le formulaire)
//mais uniquement le bout de page qui a changé
?>
<?php if (isset($animals) && !empty($animals)): ?>
    <?php foreach($animals as $animal): ?>
        <TR>
            <TD><?= $animal->nom; ?></TD>
            <TD><?= $animal->sexe; ?></TD>
            <TD><?= $animal->type; ?></TD>
            <TD><?= ($animal->sterilise) == 1?"Oui":"Non"; ?></TD>
            <TD><?= $animal->date_naissance; ?></TD>
            <TD><?= (Proprietaire::find($animal->id_proprietaire))->prenom ?></TD>
            <TD><button id="<?= $animal->id ?>" class="delete" action="destroy">Supprimer</button></TD> <!-- celui-ci
              possède son propre événement javascript, voir fonction correspondante -->
            <TD><a href="/animal/edit/<?=$animal->id ?>"><button>Modifier</button></a></TD>
            <TD><a href="/animal/show/<?=$animal->id ?>"><button>Voir</button></a></TD>
        </TR>
        <input hidden  class='category' value='animal'/>
    <?php endforeach; ?>
<?php endif; ?>
