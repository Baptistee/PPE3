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
            $pdo->InsererActivite($_SESSION['vis_matricule'], $_POST["numR"], $_POST["numP"], $_POST["bilan"], $_POST["motif"], $_POST["dateV"], $_POST["rempl"]);
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
