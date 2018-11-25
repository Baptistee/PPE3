<br>

<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Consulter les rapports de visite</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">
        <table id="tableCR" class="table table-hover table-bordered" style="">
          <thead>
            <tr>
                <th scope="col">Numéro du rapport</th>
              <!--<th scope="col">Matricule visiteur</th>-->
              <th scope="col">Nom du visiteur</th>
              <!--<th scope="col">Numéro du praticien</th>-->
              <th scope="col">Nom du praticien</th>
              <th scope="col">Date du rapport</th>
              <th scope="col">Motif du rapport</th>
              <th scope="col">Bilan du rapport</th>
              <th scope="col">Remplaçant</th>
              <th scope="col">Échantillons</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($lesCompteRendu as $key => $value):?>
                <tr>
                  <th scope="row"><?=$value["RAP_NUM"]?></th>
                  <!--<td><?=$value["VIS_MATRICULE"]?></td>-->
                  <td><?=$value["VIS_NOM"].' '.$value["VIS_PRENOM"]?></td>
                  <!--<td><?=$value["PRA_NUM"]?></td>-->
                  <td><?=$value["PRA_NOM"].' '.$value["PRA_PRENOM"]?></td>
                  <td><?=$value["RAP_DATE"]?></td>
                  <td><?=$value["RAP_MOTIF"]?></td>
                  <td><?=$value["RAP_BILAN"]?></td>
                  <td><?php
                  if ($value['REMPL'] == 0) {
                    echo 'Aucun remplacement';
                  }
                  else {
                    echo 'Remplacé';
                  }
                  ?></td>
                  <td><a href="index.php?uc=gererCR&action=details&id=<?= $value["RAP_NUM"]?>">Détail</a></td>
                </tr>
               <?php endforeach; ?>
          </tbody>
        </table>

    </div>
</div>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#tableCR').DataTable();
} );
</script>
