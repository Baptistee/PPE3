<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="./images/logo-gsb.png" width="94" height="59" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">

                <?php
                    if(isset($_SESSION['login'])) {
                        include("MenuVisiteur.php");
                    }
                    else {
                        include("MenuConnection.php");
                    }
                ?>

        </div>

    </div>
</nav>
