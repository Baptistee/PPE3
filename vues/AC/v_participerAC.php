
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<br>
<div class="card mx-auto w-50" style="max-width: 500px;">

    <div class="card-header text-center">
        <h4 class="card-title mt-3 text-center">Participer à une activité complémentaire</h4>
    </div>
    
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
                    <button type="submit" class="btn btn-primary btn-block"> Ajouter </button>
                </div>

            </form>

        </article>
    </div>
</div>
