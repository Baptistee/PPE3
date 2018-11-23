<br>

<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Créer une nouvelle activité</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">

        <table id="tableaumedicament" class="table table-striped table-bordered" style="width: 100%">
          <thead>
            <tr>
                <th scope="col">Matricule visiteur</th>
              <th scope="col">Numéro du rapport</th>
              <th scope="col">Numéro du Praticien</th>
              <th scope="col">Date du rapport</th>
              <th scope="col">Bilan du rapport</th>
              <th scope="col">Motif du rapport</th>
              <th scope="col">Échantillons</th>
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
                  <td><a href="index.php?uc=gererCR&action=details&id=<?= $value["RAP_NUM"]?>">Détail </a></td>
                </tr>
               <?php endforeach; ?>
          </tbody>
        </table>
    </div>
</div>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#tableaumedicament').DataTable();
} );
</script>
