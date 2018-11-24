<br>

<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center"><?= $unMedicament['MED_NOMCOMMERCIAL'];?></h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">

        <div>
                <label  for="Depot_legal"> DEPOT LEGAL : </label>
                <?= $unMedicament['MED_DEPOTLEGAL'];?><hr>
                <label  for="Nom_commercial"> NOM COMMERCIAL : </label>
                <?= $unMedicament['MED_NOMCOMMERCIAL'];?><hr>
                <label  for="Famille"> FAMILLE : </label>
                <?= $unMedicament['FAM_CODE'];?><hr>
                <label  for="Composition"> COMPOSITION : </label>
                <?= $unMedicament['MED_COMPOSITION'];?><hr>
                <label  for="EFFECT"> EFFECT : </label>
                <?= $unMedicament['MED_EFFETS'];?><hr>
                <label  for="Contre_Indc"> CONTRE INDC : </label>
                <?= $unMedicament['MED_CONTREINDIC'];?><hr>
                <label  for="Contre_Indc"> PRIX ECHANTILLON : </label>
                <?= $unMedicament['MED_PRIXECHANTILLON'];?> €<hr>
                <a href="index.php?uc=medicament&action=liste" title="Les médicaments">Retour à la liste</a>
        </div>

        </article>
    </div>
</div>
