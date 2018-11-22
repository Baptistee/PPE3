<ul>
<?php
	  $nom =  $_SESSION['nom'];
          $prenom = $_SESSION['prenom'];
      echo "Au revoir $nom  $prenom";
      try{
      session_destroy();
      } catch (Exception $e) {
            throw new Exception("Erreur Ã  la déconnexion \n" . $e->getMessage());
      }

?>
</ul>
