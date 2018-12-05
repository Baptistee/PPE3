<br>

<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Consulter le rapport numéro <?=$_REQUEST["id"]?></h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">
              <?php foreach ($lesCompteRendu as $key => $value):?>

                  <strong><label  for="VIS_NOM"> Nom du visiteur: </label></strong>
                  <br/>
                  <?=$value["VIS_NOM"].' '.$value["VIS_PRENOM"]?>
                  <br/>
                  <br/>
                  <strong><label  for="PRA_NOM"> Nom du praticien: </label></strong>
                  <br/>
                  <?=$value["PRA_NOM"].' '.$value["PRA_PRENOM"]?>
                  <br/>
                  <br/>
                  <strong><label  for="RAP_DATE"> Date du rapport: </label></strong>
                  <br/>
                  <?=$value["RAP_DATE"]?>
                  <br/>
                  <br/>
                  <strong><label  for="RAP_MOTIF"> Motif du rapport:</label></strong>
                  <br/>
                  <?=$value["RAP_MOTIF"]?>
                  <br/>
                  <br/>
                  <strong><label  for="RAP_BILAN"> Bilan du rapport: </label></strong>
                  <br/>
                  <?=$value["RAP_BILAN"]?>
                  <br/>
                  <br/>
                  <strong><label  for="REMPL">Remplaçant: </label></strong>
                  <br/>
                  <?php
                  if ($value['REMPL'] == 0) {
                    echo 'Aucun remplacement';
                  }
                  else {
                    echo 'Remplacé';
                  }
                  ?>
               <?php endforeach; ?>
               <br/>
               <br/>
        <a href="index.php?uc=gererCR&action=consulterEch" title="Les médicaments">Retour à la liste</a>
    </div>
</div>
