<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="././css/button-slide.css" />
<div class="card mx-auto w-50" style="max-width: 500px;">
  <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Saisir un Praticiens</h4></div>
  <div class="card-body">
    <article class="card-body mx-auto" style="max-width: 400px;">


<form method="POST" action="index.php?uc=praticien&action=saisir">
 

    <label>Nom</label>
    <div class="form-group input-group">
       <div class="input-group-prepend">
           <span class="input-group-text"> <i class="fas fa-user"></i> </span>
       </div>
        <input class="form-control" type="text" name="nomPraticien" required>
    </div>


    <label>Prenom</label>
    <div class="form-group input-group">
       <div class="input-group-prepend">
           <span class="input-group-text"> <i class="fas fa-user"></i> </span>
       </div>

        <input class="form-control" type="text" name="prenomPraticien" required>
    </div>

  <label>Adresse</label>
    <div class="form-group input-group">
       <div class="input-group-prepend">
           <span class="input-group-text">   <i class="fas fa-address-card"></i> </span>
       </div>
        <input class="form-control" type="text" name="adressePraticien" required>
    </div>


    <label>Code postale</label>
      <div class="form-group input-group">
         <div class="input-group-prepend">
             <span class="input-group-text">   <i class="fas fa-map-marker-alt"></i> </span>
         </div>

        <input class="form-control" type="text" name="cpPraticien" required>
    </div>


      <label>ville</label>
      <div class="form-group input-group">
         <div class="input-group-prepend">
             <span class="input-group-text">   <i class="fas fa-map-pin"></i> </span>
         </div>

        <input class="form-control" type="text" name="villePraticien" required>
    </div>


    <label>Note notoriete</label>
    <div class="form-group input-group">
       <div class="input-group-prepend">
           <span class="input-group-text">   <i class="fas fa-star"></i> </span>
       </div>

        <input class="form-control" type="text" name="notePraticien" required>
    </div>


      <label>Type de Praticien</label>
      <div class="form-group input-group">
           <div class="input-group-prepend">
               <span class="input-group-text">   <i class="fas fa-briefcase"></i>  </span>
           </div>

            <select class="form-control" name="typePraticiens" required>
              <?php foreach ($lesTypesPraticiens as $key => $typePraticien):?>
                <option value="<?=$typePraticien["TYP_CODE"]?>"><?=$typePraticien["TYP_LIBELLE"]?></option>
          <?php endforeach; ?>
            </select>

    </div>

    <div class="form-group mx-auto">
        <button class="btn-slide btn-5 btn-5a icon-arrow-right btn-block"><span> Valider </span></button>
    </div>




</form>

</div>
</div>
</div>
