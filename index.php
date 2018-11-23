<?php
session_start();
require_once("include/fct.inc.php");
require_once("include/modele.inc.php");
include("vues/v_entete.php") ;

$pdo = PdoGsb::getPdoGsb();

if(!isset($_REQUEST['uc']) || (!isset($_SESSION['login']))) { $_REQUEST['uc'] = 'connexion'; }
$uc = $_REQUEST['uc'];


switch($uc) {

	case 'connexion': {
	       include("controleurs/c_connexion.php");break;
	}

    case 'praticien': {
        include("controleurs/c_Praticiens.php");break;
    }

    case 'gererCR': {
        include("controleurs/c_CompteRendu.php");break;
    }

    case 'medicament': {
        include("controleurs/c_Medicaments.php"); break;
    }

    case 'activiteComplementaire': {
        include("controleurs/c_activiteComplementaire.php");break;
    }

    case'accueil': {
        include("vues/v_accueil.php");break;
    }

    case'aurevoir': {
        include("vues/v_deconnexion");break;
    }

}

include("vues/v_pied.php");
?>
