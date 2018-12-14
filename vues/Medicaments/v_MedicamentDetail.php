<br>

<div class="card mx-auto w-80" style="max-width: 80%;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center"><?= $unMedicament['MED_NOMCOMMERCIAL'];?></h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 80%;">

        <div>
                <label  for="Depot_legal"> DEPOT LEGAL :
                <?= $unMedicament['MED_DEPOTLEGAL'];?></label><hr>
                <label  for="Nom_commercial"> NOM COMMERCIAL :
                <?= $unMedicament['MED_NOMCOMMERCIAL'];?></label><hr>
                <label  for="Famille"> FAMILLE :
                <?= $unMedicament['FAM_CODE'];?></label><hr>
                <label  for="Composition"> COMPOSITION :
                <?= $unMedicament['MED_COMPOSITION'];?></label><hr>
                <label  for="EFFECT"> EFFET :
                <?= $unMedicament['MED_EFFETS'];?></label><hr>
                <label  for="Contre_Indc"> CONTRE INDIC :
                <?= $unMedicament['MED_CONTREINDIC'];?></label><hr>
                <label  for="Contre_Indc"> PRIX ECHANTILLON :
                <?= $unMedicament['MED_PRIXECHANTILLON'];?> €</label><hr>
                <a href="index.php?uc=medicament&action=liste" title="Les médicaments">Retour à la liste</a>
        </div>

        </article>
    </div>
</div>
