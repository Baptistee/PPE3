
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="././css/button-slide.css" />

<br>

<div class="card mx-auto w-50" style="max-width: 500px;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Créer une nouvelle activité</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <form method="POST" action="index.php?uc=activiteComplementaire&action=saisirBDD">

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i> </span>
                     </div>
                    <input name="lieu" class="form-control" placeholder="Ville" type="text">
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-calendar-alt"></i> </span>
                    </div>
                    <input name="AC_JOUR" class="form-control" placeholder="Jour" type="text">
                    <select name="AC_MOIS" class="custom-select" style="max-width: 120px;">
                        <option selected value="01">Janvier</option>
                        <option value="02">Février</option>
                        <option value="03">Mars</option>
                        <option value="04">Avril</option>
                        <option value="05">Mai</option>
                        <option value="06">Juin</option>
                        <option value="07">Juillet</option>
                        <option value="08">Aout</option>
                        <option value="09">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                    </select>
                    <select name="AC_ANNEE" class="custom-select" style="max-width: 120px;">
                        <option selected="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-book"></i> </span>
                     </div>
                    <input name="theme" class="form-control" placeholder="Thème" type="text">
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-comment"></i> </span>
                    </div>
                    <textarea name="motif" class="form-control" placeholder="Motif" type="text"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn-slide btn-5 btn-5a icon-arrow-right btn-block"><span> Valider </span></button>
                </div>

                <p class="text-center">Vous serrez automatiquement enregistré comme créateur de la nouvelle activité. <a href=""><?=$_SESSION['nom']?> <?=$_SESSION['prenom']?></a> </p>
        </form>
        </article>
    </div>
</div>
