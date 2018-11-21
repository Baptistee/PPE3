<?php

include("vues/NavBar/v_NavBar.php");

switch ($_GET["action"]) {

    case "saisir":

        include("vues/AC/v_saisirNouvelleActivite.php");break;


    case "saisirBDD":

        $pdo->InsererActivite($_POST["AC_JOUR"], $_POST["AC_MOIS"], $_POST["AC_ANNEE"], $_POST["lieu"], $_POST["theme"], $_POST["motif"], $_SESSION['vis_matricule']);

        include("vues/AC/v_saisirNouvelleActivite.php");break;


    case "ajouterPraticienDansAC":

        $lesAC = $pdo->getLesAC();
        $lesPraticiens = $pdo->getLesPraticiens();

        include("vues/AC/v_ajouterPraticienDansAC.php");break;


    case "ajouterPraticienDansACBDD":

        $pdo->AjouterPraticienDansAC($_POST["numAC"], $_POST["numPraticien"], $_POST["spe"]);
        $lesAC = $pdo->getLesACDuVisiteur($_SESSION['vis_matricule']);
        $lesPraticiens = $pdo->getLesPraticiens();

        include("vues/AC/v_ajouterPraticienDansAC.php");break;


    case "consulter":

        $lesActivites = $pdo->getLesACDuVisiteur($_SESSION['vis_matricule']);

        include("vues/AC/v_consulterActiviteComplementaire.php");break;
}
