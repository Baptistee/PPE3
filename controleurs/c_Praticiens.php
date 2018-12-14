<?php
include("vues/NavBar/v_NavBar.php");
switch ($_GET["action"]) {
    case "saisir":

        if(isset($_POST["notePraticien"])){
             var_dump($_POST["typePraticiens"]);
         $pdo->insertPraticien($_POST["nomPraticien"],$_POST["prenomPraticien"],$_POST["adressePraticien"],$_POST["cpPraticien"],$_POST["villePraticien"],$_POST["notePraticien"],$_POST["typePraticiens"]);

         }

        $lesTypesPraticiens = $pdo->getTypePraticiens();
        $lesSpecialitePraticien =$pdo->getSpecialitePraticien();

        include 'vues/praticiens/v_saisirPraticiens.php';
    break;

    case 'consulter' :


        $lesPraticiens = $pdo->getLesPraticiens();


        include 'vues/praticiens/v_consulterPraticien.php';
    break;

    case 'posseder' :
      if(isset($_POST["specialitePraticien"])){
        var_dump($_POST);
         $pdo->InsererPossederPraticien($_POST["numPraticien"],$_POST["specialitePraticien"],$_POST["diplomePraticien"]);
       }

          $lesPraticiens = $pdo->getLesPraticiens();
         $lesSpecialitePraticien =$pdo->getSpecialitePraticien();
            include 'vues/praticiens/v_ajouterSpecialitePraticien.php';
    break;
}
?>
