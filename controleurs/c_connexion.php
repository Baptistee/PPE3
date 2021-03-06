<?php

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$id = $visiteur['VIS_MATRICULE'];
			$nom =  $visiteur['VIS_NOM'];
			$prenom = $visiteur['VIS_PRENOM'];
			$type = $visiteur['TRA_ROLE'];

			 // mémorise les variables de session
			$_SESSION['vis_matricule']= $id;
			$_SESSION['login']= $login;
		    $_SESSION['nom']= $nom;
		    $_SESSION['prenom']= $prenom;
			$_SESSION['TRA_ROLE'] = $type;
      include("vues/NavBar/v_NavBar.php");

    	include('vues/v_accueil.php');
			}
		break;
	}
        case 'deconnexion':{
			if (isset($_SESSION['nom'])) {
				include('vues/v_auRevoir.php');
			}

            session_unset();
            session_destroy();

        }
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>
