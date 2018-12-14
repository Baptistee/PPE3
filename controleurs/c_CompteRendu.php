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
        //création et instanciations à 0 de la variable remplaçant
        $rempl = 0;
        if (isset($_POST['rempl'])) { //si checkbox est coché
            $rempl = 1; //alors variable remplacant devient 1 -> le booléen est donc true
        }

        if ($_REQUEST['medic'] == "") {
            //Alerte
            ?>
            <div class="container">
                <div class="contenu">
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h6>Le rapport numéro <?= $max; ?> a bien été crée, sans échantillon.</h6>
                    </div>
                </div>
            </div>
            <?php
            //insertion dans la bdd
            $pdo->ajouterCR($_SESSION['vis_matricule'], $max, $_POST["pra"], $_POST["bilan"], $_POST["motif"], $_POST["date"], $rempl);
            $lesCompteRendu = $pdo->getCR($_SESSION['vis_matricule']); //appel la requete pour consulter tout compte rendu
            include('vues/CR/v_consulterCompte.php'); //nous affiche tout les comtpes rendus, et le récemment crée !
        }
        elseif ($_REQUEST['medic'] == $_POST['medic']) { //Sinon, si un médicament est sélectionner
            if (!isset($_POST['quantite']) || $_POST['quantite']==0 ) { //mais qu'il n'y a pas de quantité
                //Alerte
                ?>
                <div class="container">
                    <div class="contenu">
                        <div class="alert alert-warning alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <h6>Erreur ! Le rapport numéro <?= $max; ?> a bien été crée, mais sans échantillon. Le champs 'quantité' est manquant.</h6>
                        </div>
                    </div>
                </div>
                <?php
                //insertion dans la bdd
                $pdo->ajouterCR($_SESSION['vis_matricule'], $max, $_POST["pra"], $_POST["bilan"], $_POST["motif"], $_POST["date"], $rempl);
                $lesCompteRendu = $pdo->getCR($_SESSION['vis_matricule']); //appel la requete pour consulter tout compte rendu
                include('vues/CR/v_consulterCompte.php'); //nous affiche tout les comtpes rendus, et le récemment crée !
            }

            //Alerte
            ?>
            <div class="container">
                <div class="contenu">
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h6>Le rapport numéro <?= $max; ?> a bien été crée, avec échantillon.</h6>
                    </div>
                </div>
            </div>
            <?php
            //insertion dans la bdd
            $pdo->ajouterCR($_SESSION['vis_matricule'], $max, $_POST["pra"], $_POST["bilan"], $_POST["motif"], $_POST["date"], $rempl);
            $lesCompteRendu = $pdo->getCR($_SESSION['vis_matricule']); //appel la requete pour consulter tout compte rendu
            $pdo->ajouterEchantillon($_SESSION['vis_matricule'], $max, $_POST['medic'], $_POST['quantite']);
            include('vues/CR/v_consulterCompte.php'); //nous affiche tout les comtpes rendus, et le récemment crée !
        }
        break;
    }


    case 'consulterCR':{
        $lesCompteRendu = $pdo->getCR($_SESSION['vis_matricule']);
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
        $lesCompteRendu = $pdo->getCR($_SESSION['vis_matricule']);
        //liste des médicaments
        $LesMedicaments = $pdo->GetListeMedicament();
        include('vues/CR/v_insererEchantillon.php');
        break;
    }

    case 'insereEch':{
        try{
            $pdo->ajouterEchantillon($_SESSION['vis_matricule'], $_POST['rapport'], $_POST['medic'], $_POST['quantite']);
            ?>
            <div class="container">
                <div class="contenu">
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h6>L'échantillon pour le rapport numéro <?= $_POST['rapport'] ?> a bien été crée</h6>
                    </div>
                </div>
            </div>
            <?php
                $lesEchantillons = $pdo->getEchantillons($_SESSION['vis_matricule']);
                include('vues/CR/v_consulterEchantillons.php');
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
        break;
    }

    case 'consulterEch':{
        $lesEchantillons = $pdo->getEchantillons($_SESSION['vis_matricule']);
        include('vues/CR/v_consulterEchantillons.php');
        break;
    }

    case 'detailsRapport':{
        try{
            $lesCompteRendu = $pdo->getRapport($_REQUEST['id']);
            include('vues/CR/v_consulterRapDetails.php');
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
        break;
    }
}


?>
