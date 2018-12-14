<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="././css/button-slide.css" />
<div class="card mx-auto w-50" style="max-width: 500px;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Rapport de visite</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <form method="post" action="index.php?uc=gererCR&action=saisir">


                <!-- Date Visite-->
                Date de la visite
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-calendar-alt"></i> </span>
                    </div>
                    <input class="form-control" type="date" name="date" id="date" required>
                </div>
                <br/>

                <!-- Praticien -->
                Praticien
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                    </div>
                    <select class="form-control" name="pra" value="<?=$value["PRA_NUM"]?>" required>
                        <?php foreach ($lesPraticiens as $key => $value):?>
                            <option value="<?=$value["PRA_NUM"]?>"><?=$value["PRA_NOM"].' '.$value["PRA_PRENOM"].' ('.$value["PRA_COEFNOTORIETE"].')'?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="note">Le coefficient de notoriété est indiqué entre parenthèses</p>
                </div>
                <br/>
            </tr>

            <div class="form-group input-group">
                <input class="form-control " type="text" name="motif" readonly="readonly" value="Un remplaçant a t-il réalisé la visite ?">
                <div class="input-group-prepend">
                    <input type="checkbox" class="form-check-input" name="rempl" style=" margin-left:5%; margin-top:3%;width:15px;height:15px;">
                </div>
            </div>
            <br/>

            <!-- Motif -->
            Motif
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-edit"></i> </span>
                </div>
                <input class="form-control" type="text" name="motif" required>
            </div>
            <br/>

            <!-- Bilan -->
            Bilan
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-edit"></i> </span>
                </div>
                <textarea class="form-control" rows="5" name="bilan" required></textarea>
            </div>
            <br/>

            <!-- Échantillons -->

            <h3>Échantillons</h3>
            <!--
            <button class="btn btn-outline-success" type="button">+</button>
            <br/>
            <br/>
            <div id="echantillons">
            <div class="echantillon" id="ech0">
            <div class="echantil form-group input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-pills"></i> </span>
        </div>
        <select class="form-control" name="medic" value="<?=$med['MED_DEPOTLEGAL']?>">
        <option value="">Ne rien sélectionner</option>
        <?php foreach ($LesMedicaments as $key => $med):?>
        <option value="<?=$med["MED_DEPOTLEGAL"]?>"><?=$med["MED_DEPOTLEGAL"].' '.$med["MED_NOMCOMMERCIAL"].' '. $med["Fam_code"]/*.' '.$med["FAM_LIBELLE"].' '.$med["MED_PRIXECHANTILLON"]*/?></option>
    <?php endforeach; ?>
</select>
</div>
<br/>

Quantité
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"> <i class="fas fa-sort-numeric-up"></i> </span>
</div>
<input class="form-control" type="number" name="quantite" min="1">
</div>
<br/>
-->

<div id="echantillons">
    <div class="echantillon" id="echantillon0">
        <div class="echantil form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-pills"></i> </span>
            </div>
            <select class="form-control" name="medic" value="<?=$med['MED_DEPOTLEGAL']?>">
                <option value="">Ne rien sélectionner</option>
                <?php foreach ($LesMedicaments as $key => $med):?>
                    <option value="<?=$med["MED_DEPOTLEGAL"]?>"><?=$med["MED_DEPOTLEGAL"].' '.$med["MED_NOMCOMMERCIAL"].' '. $med["Fam_code"]/*.' '.$med["FAM_LIBELLE"].' '.$med["MED_PRIXECHANTILLON"]*/?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-sort-numeric-up"></i> </span>
            </div>
            <input class="form-control" type="number" name="quantite" min="1">
        </div>
        <br/>
        <!--<div class="addmoreadd">
            <button type="button" class="addmore btn btn-outline-success">+</button>
        </div>-->
        <br/>
    </div>
</div>


</br></br>
<button class="btn-slide btn-5 btn-5a icon-arrow-right btn-block" type="submit"><span>Valider</span></button>
</form>
<p class="note">Note: Le rapport sera crée par <?= $_SESSION['nom'].' '.$_SESSION['prenom'];?> le <?=date('d-m-y');?></p>
</article>
</div>
</div>






<script>
var rowNum = 0;

$("body").on("click", ".addmore", function() {
    rowNum++;
    var $echantillon = $(this).parents('.echantillon');
    var nextHtml = $echantillon.clone();
    nextHtml.attr('id', 'echantillon' + rowNum);
    var hasRmBtn = $('.rmbtn', nextHtml).length > 0;
    if (!hasRmBtn) {
        var rm = "<button type='button' class='rmbtn btn btn-outline-danger'>-</button><br/><br/>"
        $('.addmoreadd', nextHtml).append(rm);
    }
    $echantillon.after(nextHtml);
});

$("body").on("click", ".rmbtn", function() {
    $(this).parents('.echantillon').remove();
});
</script>
