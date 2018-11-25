<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="card mx-auto w-50" style="max-width: 500px;">
  <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Échantillon</h4></div>
  <div class="card-body">
    <article class="card-body mx-auto" style="max-width: 400px;">
      <form method="post" action="index.php?uc=gererCR&action=insereEch">
      <br/>

      <!-- Rapport Visite -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fas fa-file-alt"></i> </span>
        </div>
      <select class="form-control" name="rapport" value="<?=$value['RAP_NUM']?>" required>
      <?php foreach ($lesCompteRendu as $key => $value):?>
          <option value="<?=$value['RAP_NUM']?>"?><?=$value['RAP_NUM'].' '.$value['RAP_MOTIF']?></option>
       <?php endforeach; ?>
      </select>
    </div>
    <br/>

    <!-- Médicaments -->
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
  <p class="note">Note: L'échantillon sera ajouté par <?= $_SESSION['nom'].' '.$_SESSION['prenom'];?></p>
</article>
</div>
</div>
