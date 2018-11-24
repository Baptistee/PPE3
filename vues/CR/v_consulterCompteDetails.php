<table id="tableaumedicament" class="table text-center table-striped table-bordered" style="width: 100%">
  <thead>
    <tr>
      <th scope="col">Numéro Rapport</th>
      <!--<th scope="col">Dépot légal</th>
      <th scope="col">MED_COMPOSITION</th>
      <th scope="col">MED_EFFETS</th>
      <th scope="col">MED_CONTREINDIC</th>
      <th scope="col">OFF_QTE</th>-->



    </tr>
  </thead>
  <tbody>
      <?php foreach ($lesEchantillons as $key => $value):?>
        <tr>
          <td scope="row"><?=$value["RAP_NUM"]?></td>
          <!--<td><?=$value["MED_DEPOTLEGAL"]?></td>
          <td><?=$value["MED_EFFETS"]?></td>
          <td><?=$value["MED_CONTREINDIC"]?></td>
          <td><?=$value["OFF_QTE"]?></td>-->

        </tr>
       <?php endforeach; ?>
  </tbody>
</table>
<script>
    $(document).ready(function() {
    $('#tableaumedicament').DataTable();
} );
</script>
