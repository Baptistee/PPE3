<?php
if (empty($lesEchantillons)) {
    ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="././css/button-slide.css" />

    <br>

    <div class="card mx-auto w-50" style="max-width: 500px;">
        <div class="card-body">
            <article class="card-body mx-auto" style="max-width: 400px;">
                Aucun échantillon pour le rapport numéro <?=$_REQUEST['id']?>
            </article>
        </div>
    </div>

    <?php
}
else{
 ?>
<br>
<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Échantillons du rapport numéro <?=$_REQUEST['id']?></h4></div>
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
?<?php } ?>
