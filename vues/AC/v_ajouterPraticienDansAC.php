<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<br>

<div class="card mx-auto w-50" style="max-width: 500px;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Saisir activites complementaires</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <form method="POST" action="index.php?uc=activiteComplementaire&action=ajouterPraticienDansACBDD">

                <div class="form-group">
                    <label for="Activités Complémentaires">Activités Complémentaires</label>
                    <select type="select" name="numAC" class="form-control" id="numAC">
                        <?php
                            foreach($lesAC as $uneAC)
                            {
                                echo "<option value='" . $uneAC['AC_NUM'] . "'>" . $uneAC['AC_THEME'] . " / " . $uneAC['AC_LIEU'] . " / " . $uneAC['AC_DATE'] . "</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Praticiens">Praticiens</label>
                    <select type="select" name="numPraticien" class="form-control" id="numPraticien">
                        <?php
                            foreach($lesPraticiens as $unPraticien)
                            {
                                echo "<option value='" . $unPraticien['PRA_NUM'] . "'>" . $unPraticien['PRA_NOM'] . " " . $unPraticien['PRA_PRENOM'] . "</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Spécialiste</label><br>
                    <input type="radio" name="spe" value="0" checked> Non<br>
                    <input type="radio" name="spe" value="1"> Oui<br>
                </div>

                <div class="form-group mx-auto">
                    <button type="submit" class="btn btn-primary btn-block">Valider</button>
                </div>

            </form>
        </article>
    </div>
</div>
