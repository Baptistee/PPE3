
    
    <table id="tablePraticiens" class="table text-center table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Code postal</th>
      <th scope="col">Ville</th>
      <th scope="col">Coef notoriete</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($lesPraticiens as $key => $value):?>
        <tr>
          <th scope="row"><?=$value["PRA_NUM"]?></th>
          <td><?=$value["PRA_NOM"]?></td>
          <td><?=$value["PRA_PRENOM"]?></td>
          <td><?=$value["PRA_ADRESSE"]?></td>
          <td><?=$value["PRA_CP"]?></td>
          <td><?=$value["PRA_VILLE"]?></td>
          <td><?=$value["PRA_COEFNOTORIETE"]?></td>
          
        </tr>
       <?php endforeach; ?>
     
  </tbody>
</table>
 <script> 
    $(document).ready(function() {
    $('#tablePraticiens').DataTable();
} );
</script>



