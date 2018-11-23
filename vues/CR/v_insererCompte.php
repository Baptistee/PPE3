<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="card mx-auto w-50" style="max-width: 500px;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Rapport de visite:</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 400px;">
<form method="post" action="http://172.20.201.201/slamg3/GSB_Visites/index.php?uc=gererCR&action=saisir">

    <!-- Date Visite-->
    Date de la visite
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-calendar-alt"></i> </span>
                </div>
            <input class="form-control" type="date" id="date">
        </div>
    <br/>

    <!-- Praticien -->
    Praticien
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                </div>
    <select class="form-control" id="Praticien">
    <?php foreach ($lesPraticiens as $key => $value):?>
        <option><?=$value["PRA_NOM"].' '.$value["PRA_PRENOM"]?></option>
    <?php endforeach; ?>
    </select>
</div>
<br/>
        </tr>
        <!-- Coefficient -->
    Coefficient
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                </div>
    <input class="form-control" type="text" id="Coefficient">
</div>
<br/>

    <!-- Ramplacant -->
    Remplacant
    <div class="form-group input-group">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    </div>
    <br/>


    <!-- Motif -->
    Motif
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-edit"></i> </span>
                </div>
    <input class="form-control" type="text" id="motif">
    </div>
    <br/>

        <!-- Bilan -->
    <label for="bilan">Bilan</label>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-edit"></i> </span>
                </div>
    <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
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
    </br></br>
    <button class="btn btn-primary btn-block" >Valider</button>
</form>
        </article>
    </div>
</div>
