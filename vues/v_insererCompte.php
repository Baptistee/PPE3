<form method="post">
  <div class="form-group row">
  <div class="col-10">
      
      <h3>Rapport de visite:</h3>
      <!-- Numéro -->
  <label for="num" class="col-2 col-form-label">Numéro:</label>
    <input class="form-control" type="text" id="num">
    
    <!-- Date Visite-->
    <label for="date" class="col-2 col-form-label">Date Visite:</label>
    <input class="form-control" type="date" id="date">
    <br/>
    
    <!-- Praticien -->
    <label for="Praticien">Praticien:</label>
    <select class="form-control" id="Praticien">
    <?php foreach ($lesPraticiens as $key => $value):?>
        <option><?=$value["PRA_NOM"].' '.$value["PRA_PRENOM"]?></option>
    <?php endforeach; ?>
    </select>
    <br/>
    
    
     
        </tr>
       
    
    
        <!-- Coefficient -->
    <label for="Coefficient">Coefficient:</label>
    <input class="form-control" type="text" id="Coefficient">
    <br/>
    
    <!-- Ramplacant -->
    <label for="Remplacant">Remplacant:</label>
    <!--<select class="form-control" id="Remplacant">
        <option>cc</option>
    </select>-->
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <br/>
    
    
    <!-- Motif -->
    <label for="motif">Motif:</label>
    <input class="form-control" type="text" id="motif">
    <br/>
    
        <!-- Bilan -->
    <label for="bilan">Bilan:</label>
    <textarea class="form-control" rows="5" id="comment"></textarea>
    <br/>
    
    <!--<h3>Eléments présentés</h3>
    <!-- Praticien -->
    <!--<label for="prod1">Produit 1:</label>
    <select class="form-control" id="prod1">
        <option>cc</option>
    </select>
    <br/>
    
    <!-- Praticien -->
    <!--<label for="prod2">Produit 2:</label>
    <select class="form-control" id="prod2">
        <option>cc</option>
    </select>
    <br/>
    <label id="exampleCheck2">Documentation Offerte:</label><br/>
    <input type="checkbox" class="form-check-input" id="exampleCheck2">
    -->
    <h3>Échantillons</h3>
    <br/>
    <select class="form-control" id="prod">
        <option>cc</option>
    </select>
  </div>
  </div>
</form>