<table id="tableaumedicament" class="table text-center table-striped table-bordered" style="width: 100%">
    <thead>
        <tr>
            <th scope="col">Numéro Rapport</th>
            <th scope="col">Dépot légal</th>
            <th scope="col">Nom</th>
            <th scope="col">Famille Code</th>
            <th scope="col">Famille</th>
            <th scope="col">Prix</th>
            <th scope="col">OFF_QTE</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lesEchantillons as $key => $value):?>
            <tr>
                <td scope="row"><?=$value["RAP_NUM"]?></td>
                <td><?=$value["MED_DEPOTLEGAL"]?></td>
                <td><?=$value["MED_NOMCOMMERCIAL"]?></td>
                <td><?=$value["Fam_code"]?></td>
                <td><?=$value["FAM_LIBELLE"]?></td>
                <td><?=$value["MED_PRIXECHANTILLON"]?> €</td>
                <td><?=$value["OFF_QTE"]?></td>
            </tr>
        <?php endforeach;
        ?>
    </tbody>
</table>
<a href="index.php?uc=gererCR&action=consulterCR" title="Liste des Rapport de visite">Retour aux rapports de visites</a>
<script>
$(document).ready(function() {
    $('#tableaumedicament').DataTable();
} );
</script>
