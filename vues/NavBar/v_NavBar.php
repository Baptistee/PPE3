<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <a class="navbar-brand" href="#">
    <img src="./images/logo-gsb.png" width="94" height="59" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <?php
        if(isset($_SESSION['login'])){
          include("MenuVisiteur.php");
        }
        else{
            include("MenuConnection.php");
        }
        ?>
    </ul>
  </div>
</nav>
