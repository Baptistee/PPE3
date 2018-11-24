<br>

<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Créer une nouvelle activité</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">

        <table id="tablePraticiens" class="table text-center table table-hover table-bordered">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">Adresse</th>
              <th scope="col">Code postal</th>
              <th scope="col">Ville</th>
              <th scope="col">Coef notoriete</th>
              <th scope="col">Type de praticien</th>
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
                  <td><?=$value["TYP_CODE"]?></td>

                </tr>
               <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
 <script>
    $(document).ready(function() {
    $('#tablePraticiens').DataTable();
} );
</script>
