<br>
<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Échantillons du rapport numéro <?=$_REQUEST['id']?></h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">
        <table id="tableEchantillons" class="table table-hover table-bordered" style="">
          <thead>
              <th scope="col">Numéro Rapport</th>
              <th scope="col">Dépot légal</th>
              <!--<th scope="col">Nom</th>
              <th scope="col">Famille Code</th>
              <th scope="col">Famille</th>
              <th scope="col">Prix</th>-->
              <th scope="col">Quantité</th>
          </thead>
          <tbody>
              <?php foreach ($lesEchantillons as $key => $value):?>
                <tr>
                    <td scope="row"><?=$value["RAP_NUM"]?></td>
                    <td><?=$value["MED_DEPOTLEGAL"]?></td>
                    <!--<td><?=$value["MED_NOMCOMMERCIAL"]?></td>
                    <td><?=$value["Fam_code"]?></td>
                    <td><?=$value["FAM_LIBELLE"]?></td>
                    <td><?=$value["MED_PRIXECHANTILLON"]?> €</td>-->
                    <td><?=$value["OFF_QTE"]?></td>
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
