<table id="tableaumedicament" class="table table-striped table-bordered" style="width: 100%">
  <thead>
    <tr>
        <th scope="col">Matricule visiteur</th>
      <th scope="col">Numéro du rapport</th>
      <th scope="col">Numéro du Praticien</th>
      <th scope="col">Date du rapport</th>
      <th scope="col">Bilan du rapport</th>
      <th scope="col">Motif du rapport</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($lesCompteRendu as $key => $value):?>
        <tr>
          <th scope="row"><?=$value["VIS_MATRICULE"]?></th>
          <td><?=$value["RAP_NUM"]?></td>
          <td><?=$value["PRA_NUM"]?></td>
          <td><?=$value["RAP_DATE"]?></td>
          <td><?=$value["RAP_BILAN"]?></td>
          <td><?=$value["RAP_MOTIF"]?></td>
         
        </tr>
       <?php endforeach; ?>    
  </tbody>
</table>
<script> 
    $(document).ready(function() {
    $('#tableaumedicament').DataTable();
} );
</script>

