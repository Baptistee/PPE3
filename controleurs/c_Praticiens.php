<?php
include("vues/v_sommaire.php");
switch ($_GET["action"]) {
    case "saisir":
        if(isset($_POST["notePraticien"])){
         $pdo->insertPraticien($_POST["numPraticien"],$_POST["nomPraticien"],$_POST["prenomPraticien"],$_POST["adressePraticien"],$_POST["cpPraticien"],$_POST["villePraticien"],$_POST["notePraticien"]);
        }
        include 'vues/v_saisirPraticiens.php';
    break;
    
    case 'consulter' :
        $page = (!empty($_GET['page']) ? $_GET['page'] : 2);
    
        $lesPraticiens = $pdo->consulterPraticien($page);
    
        

        include 'vues/v_consulterPraticien.php';
    break;
}
?>
