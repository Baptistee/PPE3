<br>

<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center"><strong><?= $unMedicament['MED_NOMCOMMERCIAL'];?></strong></h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">

        <div>
                <label  for="Depot_legal"> <strong>DEPOT LEGAL :</strong>
                <?= $unMedicament['MED_DEPOTLEGAL'];?></label><hr>
                <label  for="Nom_commercial"> <strong>NOM COMMERCIAL :</strong>
                <?= $unMedicament['MED_NOMCOMMERCIAL'];?></label><hr>
                <label  for="Famille"> <strong>FAMILLE :</strong>
                <?= $unMedicament['FAM_CODE'];?></label><hr>
                <label  for="Composition"><strong> COMPOSITION :</strong>
                <?= $unMedicament['MED_COMPOSITION'];?></label><hr>
                <label  for="EFFET"> <strong>EFFET : </strong>
                <?= $unMedicament['MED_EFFETS'];?></label><hr>
                <label  for="Contre_Indc"> <strong>CONTRE INDIC :</strong>
                <?= $unMedicament['MED_CONTREINDIC'];?></label><hr>
                <label  for="Contre_Indc"> <strong>PRIX ECHANTILLON : </strong>
                <?= $unMedicament['MED_PRIXECHANTILLON'];?> €</label><hr>
                <a href="index.php?uc=medicament&action=liste" title="Les médicaments"><strong>Retour à la liste</strong></a>
        </div>

        </article>
    </div>
</div>
