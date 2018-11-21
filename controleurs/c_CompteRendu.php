<?php
include("vues/v_sommaire.php");
//$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['vis_matricule'];
switch($_GET['action']){
        case 'saisirCR':{
            include('vues/CR/v_insererCompte.php');
            break;
        }

        case 'consulterCR':{
        include('vues/CR/v_insererCompte.php');
        break;
        }

}
?>
