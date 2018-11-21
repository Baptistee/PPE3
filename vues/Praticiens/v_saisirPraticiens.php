<div id="contenu">
      <h2>Saisir praticien</h2>


<form method="POST" action="index.php?uc=praticien&action=saisir">
     <div class="form-group">
        <label>Num</label>
        <input class="form-control" type="text" name="numPraticien">
    </div>  
    <div class="form-group">
        <label>Nom</label>
        <input class="form-control" type="text" name="nomPraticien">
    </div>    
    <div class="form-group">
        <label>Prenom</label>
        <input class="form-control" type="text" name="prenomPraticien">
    </div>
    <div class="form-group">
        <label>Adresse</label>
        <input class="form-control" type="text" name="adressePraticien">
    </div>
    <div class="form-group">
        <label>Code postale</label>
        <input class="form-control" type="text" name="cpPraticien">
    </div>
    <div class="form-group">
        <label>ville</label>
        <input class="form-control" type="text" name="villePraticien">
    </div>
    <div class="form-group">
        <label>Note notoriete</label>
        <input class="form-control" type="text" name="notePraticien">
    </div>
     <div class="form-group">
        <label>Type de Praticien</label>
   
            <select class="form-control" id="Praticien">
                <?php foreach ($lesTypesPraticiens as $key => $value):?>
                <option value="<?=$value["TYPE_CODE"]?>"><?=$value["TYP_LIBELLE"]?></option>
                <?php endforeach; ?>
            </select>
    </div>
      <div class="form-group">
    
          <input class="form-control btn btn-info" type="submit" value="Valider">
    </div>
  
  
  
</form>

</div>