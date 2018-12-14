<?php
include("vues/NavBar/v_NavBar.php");
switch ($_GET["action"]) {
    case "saisir":

        if(isset($_POST["notePraticien"])){
             var_dump($_POST["codePraticien"]);
         $pdo->insertPraticien($_POST["numPraticien"],$_POST["nomPraticien"],$_POST["prenomPraticien"],$_POST["adressePraticien"],$_POST["cpPraticien"],$_POST["villePraticien"],$_POST["notePraticien"],$_POST["codePraticien"]);
         $pdo->InsererPossederPraticien($_POST["numPraticien"],$_POST["codePraticien"],$_POST["diplomePraticien"]);
         }

        $lesTypesPraticiens = $pdo->getTypePraticiens();
        $lesSpecialitePraticien =$pdo->getSpecialitePraticien();

        include 'vues/praticiens/v_saisirPraticiens.php';
    break;

    case 'consulter' :


        $lesPraticiens = $pdo->getLesPraticiens();


        include 'vues/praticiens/v_consulterPraticien.php';
    break;
}
?>
