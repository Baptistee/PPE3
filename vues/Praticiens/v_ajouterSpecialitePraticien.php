<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="././css/button-slide.css" />


  <div class="card mx-auto w-50" style="max-width: 500px;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Ajouter des spécialité</h4></div>
    <div class="card-body">
      <article class="card-body mx-auto" style="max-width: 400px;">


  <form method="POST" action="index.php?uc=praticien&action=posseder">
  <div id="specialite">
    <div class="specialite" id="specialite0">
      <label>Num</label>
      <div class="form-group input-group">
         <div class="input-group-prepend">
             <span class="input-group-text"> <i class="fas fa-user"></i> </span>
         </div>
         <select class="form-control" name="numPraticien" required>
           <?php foreach ($lesPraticiens as $key => $unPraticien):?>
             <option value="<?=$unPraticien["PRA_NUM"]?>"><?=$unPraticien["PRA_NUM"]?> - <?=$unPraticien["PRA_NOM"]?> <?=$unPraticien["PRA_PRENOM"]?></option>
       <?php endforeach; ?>
         </select>

      </div>


          <label>Spécialité</label>
          <div class="form-group input-group">
               <div class="input-group-prepend">
                   <span class="input-group-text">   <i class="fas fa-briefcase"></i>  </span>
               </div>

                <select class="form-control" name="specialitePraticien" required>
                  <?php foreach ($lesSpecialitePraticien as $key => $specialite):?>
                    <option value="<?=$specialite["SPE_CODE"]?>"><?=$specialite["SPE_LIBELLE"]?></option>
              <?php endforeach; ?>
                </select>

        </div>
        <label>Diplôme</label>
        <div class="form-group input-group">
           <div class="input-group-prepend">
               <span class="input-group-text">  <i class="fas fa-book"></i> </span>
           </div>

            <input class="form-control" type="text" name="diplomePraticien" required>
        </div>
        <div class="addmoreadd">
            <button type="button" class="addmore btn btn-outline-success">+</button>
        </div>
    </div>

  </div>
  <br>
  <div class="form-group mx-auto">
      <button class="btn-slide btn-5 btn-5a icon-arrow-right btn-block"><span> Valider </span></button>
  </div>

</form>

</div>
</div>
</div>






<script>
var rowNum = 0;

$("body").on("click", ".addmore", function() {
    rowNum++;
    var $echantillon = $(this).parents('.specialite');
    var nextHtml = $echantillon.clone();
    nextHtml.attr('id', 'specialite' + rowNum);
    var hasRmBtn = $('.rmbtn', nextHtml).length > 0;
    if (!hasRmBtn) {
        var rm = "<button type='button' class='rmbtn btn btn-outline-danger'>-</button><br/><br/>"
        $('.addmoreadd', nextHtml).append(rm);
    }
    $echantillon.after(nextHtml);
});

$("body").on("click", ".rmbtn", function() {
    $(this).parents('.specialite').remove();
});
</script>
