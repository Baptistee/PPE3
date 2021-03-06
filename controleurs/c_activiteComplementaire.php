<?php

include("vues/NavBar/v_NavBar.php");

switch ($_GET["action"]) {

    case "saisir":

        include("vues/AC/v_saisirNouvelleActivite.php");break;


    case "saisirBDD":

        $AC = $pdo->InsererActivite($_POST["AC_JOUR"], $_POST["AC_MOIS"], $_POST["AC_ANNEE"], $_POST["lieu"], $_POST["theme"], $_POST["motif"], $_SESSION['vis_matricule']);

        $pdo->insertVisiteurDansAC($AC, $_SESSION['vis_matricule'], $_POST["frais"]);

        include("vues/AC/v_saisirNouvelleActivite.php");break;


    case "ajouterPraticienDansAC":

        $lesAC = $pdo->getLesACDuVisiteur($_SESSION['vis_matricule']);

        if(isset($_POST['activite'])) { // si j'ai choisi
            $_SESSION['cac_AC_NUM'] = $_POST["activite"];
            $lesPraticiens = $pdo->getLesPraticiensPasInvite($_POST["activite"]);
        }

        include("vues/AC/v_ajouterPraticienDansAC.php");break;


    case "ajouterPraticienDansACBDD":

        $pdo->AjouterPraticienDansAC($_SESSION['cac_AC_NUM'], $_POST["numPraticien"], $_POST["spe"]);

        $lesAC = $pdo->getLesACDuVisiteur($_SESSION['vis_matricule']);
        $lesPraticiens = $pdo->getLesPraticiensPasInvite($_SESSION['cac_AC_NUM']);
        $_POST["activite"] = $_SESSION['cac_AC_NUM'];

        include("vues/AC/v_ajouterPraticienDansAC.php");break;


    case "consulter":

        $lesActivites = $pdo->getLesACDuVisiteur($_SESSION['vis_matricule']);

        include("vues/AC/v_consulterActiviteComplementaire.php");break;


    case "particperAC":

        if(isset($_POST['activite'])) { // si j'ai choisi
            $_SESSION['cac_AC_NUM'] = $_POST["activite"];
        }

        $lesAC = $pdo->getLesACLibre($_SESSION['vis_matricule']);

        if(isset($_POST['frais'])) { // si j'ai choisi

        }

        include("vues/AC/v_participerAC.php");break;


    case "particperACBDD":

        $pdo->insertVisiteurDansAC($_POST['AC'], $_SESSION['vis_matricule'], $_POST['frais']);

        $lesAC = $pdo->getLesACLibre($_SESSION['vis_matricule']);

        include("vues/AC/v_participerAC.php");break;
}
