<?php

class PdoGsb {

    // Attributs
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=gsb_visiteurs_g3';
    private static $user='root' ;
    private static $mdp='' ;
    private static $monPdo;
	private static $monPdoGsb=null;


    /* BDD EN LIGNE
    private static $serveur='mysql:host=www.db4free.net';
    private static $bdd='dbname=gsb_visiteurs';
    private static $user='sql7266501' ;
    private static $mdp='w4dn1WGxkf' ;
    private static $monPdo;
	private static $monPdoGsb=null;
    */


    // Methodes
	private function __construct() {
        try {
            PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp);
		    PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
            PdoGsb::$monPdo->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        }
        catch (Exception $e) {
            throw new Exception("Erreur ?  la connexion \n" . $e->getMessage());
        }
    }


	public function _destruct() {
        PdoGsb::$monPdo = null;
	}


    public static function getPdoGsb() {
	    if (PdoGsb::$monPdoGsb==null) {
		    PdoGsb::$monPdoGsb= new PdoGsb();
		}
		return PdoGsb::$monPdoGsb;
	}


    public function getInfosVisiteur($login,$mdp) {
        $req="select VIS_MATRICULE, VIS_NOM ,VIS_PRENOM from visiteur where LOGIN = '$login' and MDP = '$mdp'";
        //$req="select VIS_MATRICULE, VIS_NOM ,VIS_PRENOM from visiteur where LOGIN = 'test' and MDP = 'test'";
        $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch(PDO::FETCH_ASSOC);
		return $ligne;
    }


    public function getLesVisiteurs() {
        $req="select * from visiteur";
        $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
    }


    public function getLesPraticiens() {
        $req = "select * from praticien";
        $rs = PdoGsb::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }


    public function getTypePraticiens() {
        $req ="select * from type_praticien  ";
        $rs = PdoGsb::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }


    public function getLesAC() {
        $req = "select * from activite_compl";
        $rs = PdoGsb::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }


    public function insertPraticien($num,$nom,$prenom,$adresse,$cp,$ville,$note,$code) {
        try {
            $req="INSERT INTO praticien ( PRA_NUM,PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, PRA_VILLE, PRA_COEFNOTORIETE,TYP_CODE) "
                . "VALUES ( :num,:nom, :prenom, :adresse, :cp, :ville, :note,:code)";
            $res=PdoGsb::$monPdo->prepare($req);

            $res->bindValue(':num', $num, PDO::PARAM_INT);
            $res->bindValue(':nom', $nom, PDO::PARAM_STR);
            $res->bindValue(':prenom', $prenom, PDO::PARAM_STR);
            $res->bindValue(':adresse', $adresse, PDO::PARAM_STR);
            $res->bindValue(':cp', $cp, PDO::PARAM_INT);
            $res->bindValue(':ville', $ville, PDO::PARAM_STR);
            $res->bindValue(':note', $note, PDO::PARAM_STR);
            $res->bindValue(':code', $note, PDO::PARAM_STR);

            $res->execute();
        }
        catch (PDOException $e) {
            ?>
            <div class="contenu">
                <div class="alert alert-danger">
                    <h6>Erreur insertion des praticiens</h6>
                    <h6><?=$e->getMessage();?></h6>
                </div>
            </div>
            <?php
        }
    }







/*
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - BAPTISTE  - - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*/



    // Recup les praticiens pas deja invites.
    public function getLesPraticiensPasInvite() {
        try {
            $req="SELECT praticien.PRA_NUM, PRA_NOM, PRA_PRENOM FROM praticien WHERE praticien.PRA_NUM NOT IN (SELECT inviter.PRA_NUM FROM inviter)";
            $rs = PdoGsb::$monPdo->query($req);
    		$ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
    		return $ligne;
        }

        catch (Exception $ex) {
            ?>
                <div class="contenu">
                    <div class="alert alert-danger">
                        <h6>Erreur requete de fonction "getLesPraticiensPasInvite"!</h6>
                        <h6><?=$ex->getMessage();?></h6>
                    </div>
                </div>
            <?php
        }
    }


    // Permet d'ajouter une activite complementaire.
    public function InsererActivite($jour, $mois, $annee, $lieu, $theme, $motif, $resp) {
        try {
            $date=$annee.'-'.$mois.'-'.$jour;
            $req="INSERT INTO activite_compl (AC_DATE, AC_LIEU, AC_THEME, AC_MOTIF, AC_RESPONSABLE) VALUES (:date, :lieu, :theme, :motif, :resp)";
            $res=PdoGsb::$monPdo->prepare($req);

            $res->bindValue(':date', $date, PDO::PARAM_STR);
            $res->bindValue(':lieu', $lieu, PDO::PARAM_STR);
            $res->bindValue(':theme', $theme, PDO::PARAM_STR);
            $res->bindValue(':motif', $motif, PDO::PARAM_STR);
            $res->bindValue(':resp', $resp, PDO::PARAM_STR);
            $res->execute();
        }

        catch (Exception $ex) {
            ?>
                <div class="contenu">
                    <div class="alert alert-danger">
                        <h6>Erreur insertion des activites</h6>
                        <h6><?=$ex->getMessage();?></h6>
                    </div>
                </div>
            <?php
        }
    }


    // Permet d'ajouter un praticien dans une activite complementaire.
    public function AjouterPraticienDansAC($numAC, $numPraticien, $spe) {
        $spe = (int)$spe;

        try {
            $req="INSERT INTO inviter (AC_NUM, PRA_NUM, SPECIALISTEON) VALUES (:numAC, :numPraticien, :spe)";
            $res=PdoGsb::$monPdo->prepare($req);
            $res->bindValue(':numAC', $numAC, PDO::PARAM_INT);
            $res->bindValue(':numPraticien', $numPraticien, PDO::PARAM_INT);
            $res->bindValue(':spe', $spe, PDO::PARAM_INT);
            $res->execute();
        }

        catch (Exception $ex) {
            ?>
            <div class="contenu">
                <div class="alert alert-danger">
                    <h6>Erreur insertion des praticiens</h6>
                    <h6><?=$ex->getMessage();?></h6>
                </div>
            </div>
            <?php
        }
    }


    // Permet de recuperer les AC crees par le visiteur
    public function getLesACDuVisiteur($mat) {
        $req = "SELECT AC_NUM, AC_DATE, AC_LIEU, AC_THEME, AC_MOTIF FROM activite_compl, visiteur WHERE AC_RESPONSABLE = :mat GROUP BY AC_DATE, AC_LIEU, AC_THEME, AC_MOTIF"; // probleme enlever group by corriger plusieurs retour.
        $rs = PdoGsb::$monPdo->prepare($req);
        $rs->bindValue(':mat', $mat, PDO::PARAM_STR);
        $rs->execute();
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }


/*
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - BAPTISTE - - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*/


/*
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - COP1 le bg  - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*/

    public function GetListeMedicament() {
        $req="select MED_DEPOTLEGAL, MED_NOMCOMMERCIAL, medicament.FAM_CODE as Fam_code , FAM_LIBELLE, MED_PRIXECHANTILLON from medicament, famille where medicament.FAM_CODE = famille.FAM_CODE";
        $rs = PdoGsb::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }


    public function GetDetailMedicament($id) {
        $req="select * from medicament where MED_DEPOTLEGAL = :pid ";
        $prep= PdoGsb::$monPdo->prepare($req);
        $prep->execute(array('pid' => $id));
        return $prep->fetch(PDO::FETCH_ASSOC);
    }


/*
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - COP1 le bg  - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*/


/*
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - LOLO LE COCO  - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*/

public function getCR(){
    $req="select * from rapport_visite";
    $res = PdoGsb::$monPdo->query($req);

    $ligne = $res->fetchAll(PDO::FETCH_ASSOC);
    return $ligne;
}


public function ajouterCR($numV, $numR, $numP, $bilan, $motif, $dateV, $rempl){
    try {
        $req="INSERT INTO rapport_visite (VIS_MATRICULE, RAP_NUM, PRA_NUM, RAP_BILAN, RAP_MOTIF, VIS_DATE, REMPL) VALUES (:numV, :numR, :numP, :bilan, :motif, :dateV, :rempl)";
        $res=PdoGsb::$monPdo->prepare($req);

        $res->bindValue(':numV', $numV, PDO::PARAM_STR);
        $res->bindValue(':numR', $numR, PDO::PARAM_INT);
        $res->bindValue(':numP', $numP, PDO::PARAM_INT);
        $res->bindValue(':bilan', $bilan, PDO::PARAM_STR);
        $res->bindValue(':motif', $motif, PDO::PARAM_STR);
        $res->bindValue(':dateV', $dateV, PDO::PARAM_STR);
        $res->bindValue(':rempl', $rempl, PDO::PARAM_INT);
        $res->execute();
    }
    catch (Exception $ex) {
            $ex->getMessage();
  }
}

/*
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - LOLO L'OPOSSUM  - - - - - - - - - - - - - - - -
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*/
}

?>
