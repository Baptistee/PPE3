<div id="contenu">
    <h2>Saisir activites complementaires</h2>

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
        <div class="form-group">
            <input class="form-control btn btn-info" type="submit" value="Valider">
        </div>
    </form>
</div>

