<?php
include("vues/NavBar/v_NavBar.php");
//$action = $_REQUEST['action'];
switch($_GET['action']){
        case 'saisirCR':{
            $lesPraticiens = $pdo->getLesPraticiens();

            include('vues/CR/v_insererCompte.php');
            break;
        }

        case 'saisir':{
          $rempl = 0;
          if (isset($_POST['rempl'])) {
            $rempl = 1;
          }
            $pdo->ajouterCR($_SESSION['vis_matricule'], $_POST["numR"], $_POST["pra"], $_POST["bilan"], $_POST["motif"], $_POST["date"], $rempl);
        }

        case 'consulterCR':{
            $lesCompteRendu = $pdo->getCR();
            include('vues/CR/v_consulterCompte.php');
            break;
        }
        case 'details':{
            $id =  $_REQUEST['id'];
            settype($id, "string");
            $lesEchantillons = $pdo->getDetailsEchantillons($id);
            include('vues/CR/v_consulterCompteDetails.php');
            break;
        }

}
?>
