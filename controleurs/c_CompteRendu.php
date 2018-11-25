<?php
include("vues/NavBar/v_NavBar.php");
//$action = $_REQUEST['action'];
switch($_GET['action']){

    case 'saisirCR':{

        //liste des médicaments
        $LesMedicaments = $pdo->GetListeMedicament();
        //liste des praticiens
        $lesPraticiens = $pdo->getLesPraticiens();
        include('vues/CR/v_insererCompte.php');
        break;
    }

    case 'saisir':{
        //Auto incrémentation
        $max = $pdo->getNewId(); //récupère le plus grand ID
        $max++;                 //et lui ajoute 1
        //création et instanciations à 0 de  la variable remplaçant
        $rempl = 0;
        if (isset($_POST['rempl'])) { //si checkbox est coché
            $rempl = 1; //alors variable rempalcant devient 1 -> le booléen est donc true
        }
        //insertion dans la bdd
        $pdo->ajouterCR($_SESSION['vis_matricule'], $max, $_POST["pra"], $_POST["bilan"], $_POST["motif"], $_POST["date"], $rempl);
        $lesCompteRendu = $pdo->getCR(); //appel la requete pour consulter tout compte rendu
            $pdo->ajouterEchantillon($_SESSION['vis_matricule'], $max, $_POST['medic'], $_POST['quantite']);
            echo 'oups on peux pas faire le échantillon !!!';

        include('vues/CR/v_consulterCompte.php'); //nous affiche tout les comtpes rendus, et le récemment crée !
        break;
    }

    case 'consulterCR':{
        $lesCompteRendu = $pdo->getCR();
        include('vues/CR/v_consulterCompte.php');
        break;
    }
    case 'details':{
        try{
            $lesEchantillons = $pdo->getDetailsEchantillons($_REQUEST['id']);
            include('vues/CR/v_consulterCompteDetails.php');
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
        break;
    }

    case 'insererEchantillon':{
        //liste des CR
        $lesCompteRendu = $pdo->getCR();
        //liste des médicaments
        $LesMedicaments = $pdo->GetListeMedicament();
        include('vues/CR/v_insererEchantillon.php');
        break;
    }

    case 'insereEch':{
        try{
            $pdo->ajouterEchantillon($_SESSION['vis_matricule'], $_POST['rapport'], $_POST['medic'], $_POST['quantite']);
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
        break;
    }
}


?>
