<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="card mx-auto w-50" style="max-width: 500px;">
  <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Rapport de visite</h4></div>
  <div class="card-body">
    <article class="card-body mx-auto page-section" style="max-width: 400px;">
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
            <span class="input-group-text" style="width=52%;"><input type="checkbox" class="form-check-input" name="rempl" style="margin-left:0.2%;margin-top:0.3%;"><i class="far fa-square" style="opacity:50%;"></i></span>
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

      <h3>Échantillons</h3>
      <br/>
      <div class="form-group input-group">
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

    </br></br>
    <button class="btn btn-primary btn-block">Valider</button>
  </form>
  <p class="note">Note: Le rapport sera crée par <?= $_SESSION['nom'].' '.$_SESSION['prenom'];?> le <?=date('d-m-y');?></p>
</article>
</div>
</div>

<div id="particles-js"></div>
<link rel="stylesheet" media="screen" href="css/particle.css">
<script src="js/particle.js"></script>
<script src="js/particle-config.js"></script>
