<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="card mx-auto w-50" style="max-width: 500px;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Rapport de visite</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 400px;">
<form method="post" action="index.php?uc=gererCR&action=saisir">

  <!-- Numéro de Rapport -->
  Numéro de Rapport
  <div class="form-group input-group">
  <div class="input-group-prepend">
      <span class="input-group-text"> <i class="fas fa-briefcase"></i> </span>
          </div>
  <input class="form-control" type="text" name="numR">
  </div>
  <br/>


    <!-- Date Visite-->
    Date de la visite
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-calendar-alt"></i> </span>
                </div>
            <input class="form-control" type="date" name="date">
        </div>
    <br/>

    <!-- Praticien -->
    Praticien
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                </div>
    <select class="form-control" name="pra">
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
    <input class="form-control" type="text" name="coef">
</div>
<br/>

    <!-- Ramplacant -->
    Remplacant
    <div class="form-group input-group">
    <input type="checkbox" class="form-check-input" name="rempl">
    </div>
    <br/>


    <!-- Motif -->
    Motif
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-edit"></i> </span>
                </div>
    <input class="form-control" type="text" name="motif">
    </div>
    <br/>

        <!-- Bilan -->
    <label for="bilan">Bilan</label>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-edit"></i> </span>
                </div>
    <textarea class="form-control" rows="5" name="bilan"></textarea>
    </div>
    <br/>

    <h3>Échantillons</h3>
    <br/>
    <select class="form-control" name="prod">
        <option>cc</option>
    </select>
    </br></br>
    <button class="btn btn-primary btn-block" >Valider</button>
</form>
        </article>
    </div>
</div>
