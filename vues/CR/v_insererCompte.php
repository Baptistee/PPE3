<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="card mx-auto w-50" style="max-width: 500px;">
  <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Rapport de visite</h4></div>
  <div class="card-body">
    <article class="card-body mx-auto" style="max-width: 400px;">
      <form method="post" action="index.php?uc=gererCR&action=saisir">

        <!-- Numéro de Rapport -->
        <!--Numéro de Rapport
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-briefcase"></i> </span>
          </div>
          <input class="form-control" type="text" name="numR">
        </div>
        <br/>-->


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

      <!-- PETITE NOTE -> AU LIEU D'AFFICHER LE COEFFCIENT
      DANS UN AUTRE TEXT BOX, JE PEUX L'AFFICHER DIRECTEMENT
      DANS LA SELECTION DU PRATICIEN EXEMPLE: JEAN NOYER (233)
      A VOIR AVEC LE CLIENT #TATAPOUPOU
      -->

      <!-- Coefficient
      Coefficient
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fas fa-user"></i> </span>
        </div>
        <input class="form-control" type="text" name="coef">
      </div>
      <br/>-->

      <!-- Ramplacant -->
      <!--Un remplaçant a t-il réalisé la visite à la place du praticien (ou du visiteur) ?
      <div class="form-group input-group" style="">
        <input type="checkbox" class="form-check-input" name="rempl" style="margin-left:1em; margin-top:1em;">
      </div>
      <br/>-->

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
      <label for="bilan">Bilan</label>
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
      <select class="form-control" name="medic" value="<?=$med['MED_DEPOTLEGAL']?>" required>
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
        <input class="form-control" type="number" name="quantite" required min="0">
      </div>
      <br/>

    </br></br>
    <button class="btn btn-primary btn-block">Valider</button>
  </form>
  <p class="note">Note: Le rapport sera crée par <?= $_SESSION['nom'].' '.$_SESSION['prenom'];?> le <?=date('d-m-y');?></p>
</article>
</div>
</div>
