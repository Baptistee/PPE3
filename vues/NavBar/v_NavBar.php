<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

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
