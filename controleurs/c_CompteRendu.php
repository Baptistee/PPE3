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
            $max = $pdo->getNewId();
            $max++;
          $rempl = 0;
          if (isset($_POST['rempl'])) {
            $rempl = 1;
          }
            $pdo->ajouterCR($_SESSION['vis_matricule'], $max, $_POST["pra"], $_POST["bilan"], $_POST["motif"], $_POST["date"], $rempl);
        }

        case 'consulterCR':{
            $lesCompteRendu = $pdo->getCR();
            include('vues/CR/v_consulterCompte.php');
            break;
        }
        case 'details':{
            try{
            $id =  $_REQUEST['id'];
            var_dump($id);
            $lesEchantillons = $pdo->getDetailsEchantillons($id);
            var_dump($lesEchantillons);
            include('vues/CR/v_consulterCompteDetails.php');
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
            break;
        }

}
?>
