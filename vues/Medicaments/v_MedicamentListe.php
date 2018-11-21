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
<script> 
    $(document).ready(function() {
    $('#tableaumedicament').DataTable();
} );
</script>


