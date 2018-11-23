<br>

<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Créer une nouvelle activité</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">

            <table id="tableaumedicament" class="table text-center table-striped table-bordered" style="width: 100%">
  <thead>
    <tr>
      <th scope="col">Dépot légal</th>
      <th scope="col">Nom</th>
      <th scope="col">Famille Code</th>
      <th scope="col">Famille</th>
      <th scope="col">Prix</th>
      <th scope="col"></th>



    </tr>
  </thead>
  <tbody>
      <?php foreach ($LesMedicaments as $key => $value):?>
        <tr>
          <td scope="row"><?=$value["MED_DEPOTLEGAL"]?></td>
          <td><?=$value["MED_NOMCOMMERCIAL"]?></td>
          <td><?=$value["Fam_code"]?></td>
          <td><?=$value["FAM_LIBELLE"]?></td>
          <td><?=$value["MED_PRIXECHANTILLON"]?> €</td>
          <td><a href="index.php?uc=medicament&action=detail&id=<?= $value["MED_DEPOTLEGAL"]?>">Détail </a></td>

        </tr>
       <?php endforeach; ?>
  </tbody>
</table>

</article>
</div>
</div>

<script>
    $(document).ready(function() {
    $('#tableaumedicament').DataTable();
} );
</script>
