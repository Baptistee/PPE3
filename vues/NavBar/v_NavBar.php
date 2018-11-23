<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="./vues/v_accueil.php">
                <img src="./images/logo-gsb.png" width="94" height="59" class="d-inline-block align-top" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#visiteurs-menu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <?php

            if(isset($_SESSION['login'])) {
                include("MenuVisiteur.php");
            }

            else {
                include("MenuConnection.php");
            }

        ?>

    </div>
</nav>
