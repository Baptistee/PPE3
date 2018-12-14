<br>
<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Échantillons de <?=$_SESSION['nom'].' '.$_SESSION['prenom']?></h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">
        <table id="tableEchantillons" class="table table-hover table-bordered" style="">
          <thead>
              <th scope="col">Numéro Rapport</th>
              <th scope="col">Dépot légal</th>
              <th scope="col">Nom Médicament</th>
              <th scope="col">Code Famille</th>
              <th scope="col">Composition</th>
              <th scope="col">Quantité</th>
              <th>Rapport de visite</th>
          </thead>
          <tbody>
              <?php foreach ($lesEchantillons as $key => $value):?>
                <tr>
                    <td scope="row"><?=$value["RAP_NUM"]?></td>
                    <td><?=$value["MED_DEPOTLEGAL"]?></td>
                    <td><?=$value["MED_NOMCOMMERCIAL"]?></td>
                    <td><?=$value["FAM_CODE"]?></td>
                    <td><?=$value["MED_COMPOSITION"]?></td>
                    <td><?=$value["OFF_QTE"]?></td>
                    <td><a href="index.php?uc=gererCR&action=detailsRapport&id=<?= $value["RAP_NUM"]?>">Détail</a></td>
                </tr>
               <?php endforeach; ?>
          </tbody>
        </table>
        <a href="index.php?uc=gererCR&action=consulterCR" title="Les médicaments">Retour à la liste</a>
    </div>
</div>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#tableEchantillons').DataTable();
} );
</script>
