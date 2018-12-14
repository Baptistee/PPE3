<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="././css/button-slide.css" />
<div class="card mx-auto w-50" style="max-width: 500px;">
  <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Saisir un Praticien</h4></div>
  <div class="card-body">
    <article class="card-body mx-auto" style="max-width: 400px;">


<form method="POST" action="index.php?uc=praticien&action=saisir">

    <label>Nom</label>
    <div class="form-group input-group">
       <div class="input-group-prepend">
           <span class="input-group-text"> <i class="fas fa-user"></i> </span>
       </div>
        <input class="form-control" type="text" name="nomPraticien">
    </div>


    <label>Prenom</label>
    <div class="form-group input-group">
       <div class="input-group-prepend">
           <span class="input-group-text"> <i class="fas fa-user"></i> </span>
       </div>

        <input class="form-control" type="text" name="prenomPraticien">
    </div>

  <label>Adresse</label>
    <div class="form-group input-group">
       <div class="input-group-prepend">
           <span class="input-group-text">   <i class="fas fa-address-card"></i> </span>
       </div>
        <input class="form-control" type="text" name="adressePraticien">
    </div>


    <label>Code postale</label>
      <div class="form-group input-group">
         <div class="input-group-prepend">
             <span class="input-group-text">   <i class="fas fa-map-marker-alt"></i> </span>
         </div>

        <input class="form-control" type="text" name="cpPraticien">
    </div>


      <label>ville</label>
      <div class="form-group input-group">
         <div class="input-group-prepend">
             <span class="input-group-text">   <i class="fas fa-map-pin"></i> </span>
         </div>

        <input class="form-control" type="text" name="villePraticien">
    </div>


    <label>Note notoriete</label>
    <div class="form-group input-group">
       <div class="input-group-prepend">
           <span class="input-group-text">   <i class="fas fa-star"></i> </span>
       </div>

        <input class="form-control" type="text" name="notePraticien">
    </div>


      <label>Type de Praticien</label>
      <div class="form-group input-group">
           <div class="input-group-prepend">
               <span class="input-group-text">   <i class="fas fa-briefcase"></i>  </span>
           </div>

            <select class="form-control" name="typePraticiens">
              <?php foreach ($lesTypesPraticiens as $key => $typePraticien):?>
                <option value="<?=$typePraticien["TYP_CODE"]?>"><?=$typePraticien["TYP_LIBELLE"]?></option>
          <?php endforeach; ?>
            </select>

    </div>



      <div class="form-group">
          <input class="form-control btn btn-info" type="submit" value="Valider">
      </div>



</form>

</div>
</div>
</div>
