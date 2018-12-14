<?php

class PdoGsb {

    // Attributs
    private static $serveur='mysql:host=mysql-ppe3.alwaysdata.net';
    private static $bdd='dbname=ppe3_visiteurs';
    private static $user='ppe3_admin' ;
    private static $mdp='root' ;
    private static $monPdo;
    private static $monPdoGsb=null;

    /* phpMyAdmin
    Lien: https://phpmyadmin.alwaysdata.com/
    Des fois ils demandent le serveur: mysql-ppe3.alwaysdata.net
    Identifiant: ppe3_admin
    Mdp: root
    */

    /* Site en ligne
    Lien: http://ppe3.alwaysdata.net
    */

    /* FTP
    Hote: ppe3.alwaysdata.net
    Id: ppe3_admin
    Mdp: root
    Port: 21
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
        $req="select visiteur.VIS_MATRICULE, VIS_NOM, VIS_PRENOM, travailler.TRA_ROLE FROM visiteur INNER JOIN travailler ON visiteur.VIS_MATRICULE = travailler.VIS_MATRICULE WHERE LOGIN = '$login' and MDP = '$mdp' and `DATEFIN` IS NULL";

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


###############################################################################
/*
██████   █████  ██████  ████████ ██ ███████ ████████ ███████
██   ██ ██   ██ ██   ██    ██    ██ ██         ██    ██
██████  ███████ ██████     ██    ██ ███████    ██    █████
██   ██ ██   ██ ██         ██    ██      ██    ██    ██
██████  ██   ██ ██         ██    ██ ███████    ██    ███████
*/
###############################################################################


    // Recup les praticiens pas deja invites.
    public function getLesPraticiensPasInvite($activite) {
        try {
            $activite = (int)$activite;
            $req="SELECT praticien.PRA_NUM, PRA_NOM, PRA_PRENOM FROM praticien WHERE praticien.PRA_NUM NOT IN (SELECT inviter.PRA_NUM FROM inviter INNER JOIN activite_compl ON inviter.AC_NUM=activite_compl.AC_NUM WHERE activite_compl.AC_NUM=:activite) ORDER BY PRA_NOM";
            $res=PdoGsb::$monPdo->prepare($req);

            $res->bindValue(':activite', $activite, PDO::PARAM_INT);
            $res->execute();

            $ligne = $res->fetchAll(PDO::FETCH_ASSOC);
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


    // Permet de participer a une activite complementaire.
    public function insertVisiteurDansAC($AC, $visiteur, $frais) {
        try {
            $req = "INSERT INTO realiser VALUES (:AC, :visiteur, :frais)";
            $res=PdoGsb::$monPdo->prepare($req);
            $res->bindValue(':AC', $AC, PDO::PARAM_INT);
            $res->bindValue(':visiteur', $visiteur, PDO::PARAM_STR);
            $res->bindValue(':frais', $frais, PDO::PARAM_STR);
            $res->execute();
        }

        catch (Exception $ex) {
            ?>
            <div class="contenu">
                <div class="alert alert-danger">
                    <h6>Erreur</h6>
                    <h6><?=$ex->getMessage();?></h6>
                </div>
            </div>
            <?php
        }
    }


    // Permet de recuperer l'AC qui vient d'etre cree.
    public function getLAC($resp, $lieu, $theme) {
        try {
            $req="SELECT activite_compl.AC_NUM FROM visiteur INNER JOIN activite_compl ON visiteur.VIS_MATRICULE = activite_compl.AC_RESPONSABLE WHERE activite_compl.AC_RESPONSABLE = :resp AND activite_compl.AC_THEME = :theme AND activite_compl.AC_LIEU = :lieu";
            $res2=PdoGsb::$monPdo->prepare($req);

            $res2->bindValue(':lieu', $lieu, PDO::PARAM_STR);
            $res2->bindValue(':theme', $theme, PDO::PARAM_STR);
            $res2->bindValue(':resp', $resp, PDO::PARAM_STR);
            $res2->execute();
            $AC=$res2->fetchColumn();
            return $AC;
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

            $req="SELECT LAST_INSERT_ID()";
            $res=PdoGsb::$monPdo->query($req);
            $no=$res->fetchColumn();
            return $no;
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


    // Permet de recuperer les AC crees par le visiteur.
    public function getLesACDuVisiteur($mat) {
        try {
            $req = "SELECT AC_NUM, AC_DATE, AC_LIEU, AC_THEME, AC_MOTIF FROM activite_compl, visiteur WHERE AC_RESPONSABLE = :mat GROUP BY AC_DATE, AC_LIEU, AC_THEME, AC_MOTIF"; // probleme enlever group by corriger plusieurs retour.
            $rs = PdoGsb::$monPdo->prepare($req);
            $rs->bindValue(':mat', $mat, PDO::PARAM_STR);
            $rs->execute();
            $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
            return $ligne;
        }

        catch (Exception $ex) {
            ?>
            <div class="contenu">
                <div class="alert alert-danger">
                    <h6>Erreur</h6>
                    <h6><?=$ex->getMessage();?></h6>
                </div>
            </div>
            <?php
        }

    }


    // Permet de recuperer une activite complementaire qui n'est pas occupe par le visiteur.
    public function getLesACLibre($visiteur) {
        try {
            $req = "SELECT AC_NUM, AC_DATE, AC_LIEU, AC_THEME, AC_MOTIF FROM activite_compl INNER JOIN rea WHERE AC_RESPONSABLE = :mat GROUP BY AC_DATE, AC_LIEU, AC_THEME, AC_MOTIF";
            $res=PdoGsb::$monPdo->prepare($req);
            $res->bindValue(':AC', $AC, PDO::PARAM_INT);
            $res->bindValue(':visiteur', $visiteur, PDO::PARAM_STR);
            $res->bindValue(':frais', $frais, PDO::PARAM_INT);
            $res->execute();
        }

        catch (Exception $ex) {
            ?>
            <div class="contenu">
                <div class="alert alert-danger">
                    <h6>Erreur</h6>
                    <h6><?=$ex->getMessage();?></h6>
                </div>
            </div>
            <?php
        }
    }


###############################################################################
/*
 ██████ ██      ███████ ███    ███ ███████ ███    ██ ████████
██      ██      ██      ████  ████ ██      ████   ██    ██
██      ██      █████   ██ ████ ██ █████   ██ ██  ██    ██
██      ██      ██      ██  ██  ██ ██      ██  ██ ██    ██
 ██████ ███████ ███████ ██      ██ ███████ ██   ████    ██
*/
###############################################################################


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


###############################################################################
/*
██       ██████  ██       ██████
██      ██    ██ ██      ██    ██
██      ██    ██ ██      ██    ██
██      ██    ██ ██      ██    ██
███████  ██████  ███████  ██████
*/
###############################################################################

    //Récupère le plus grand ID des comptes rendus
    public function getNewId(){
        try {
            $req="SELECT MAX(RAP_NUM) AS max FROM rapport_visite";
            $prep= PdoGsb::$monPdo->query($req);
            $ligne = $prep->fetch(PDO::FETCH_ASSOC);
            return $ligne['max'];
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
    }


    //Récupère la totalité des comptes rendus avec
    public function getCR($id) {
        try {
            $req="SELECT VIS_NOM, VIS_PRENOM, PRA_NOM, PRA_PRENOM, RAP_NUM, RAP_DATE, RAP_BILAN, RAP_MOTIF, VIS_DATE, REMPL FROM rapport_visite  JOIN visiteur ON rapport_visite.VIS_MATRICULE = visiteur.VIS_MATRICULE JOIN praticien ON rapport_visite.PRA_NUM = praticien.PRA_NUM WHERE visiteur.VIS_MATRICULE = :id ORDER BY RAP_NUM";
            $prep= PdoGsb::$monPdo->prepare($req);
            $prep->bindValue('id', $id, PDO::PARAM_STR);
            $prep->execute();
            $ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
            return $ligne;
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
    }


    public function ajouterCR($numV, $numR, $numP, $bilan, $motif, $dateV, $rempl) {
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


    public function ajouterEchantillon($numV, $numR, $numM, $qt){
        try {
            $req="INSERT INTO offrir (VIS_MATRICULE, RAP_NUM, MED_DEPOTLEGAL, OFF_QTE) VALUES (:numV, :numR, :numM, :qt)";
            $res=PdoGsb::$monPdo->prepare($req);
            $res->bindValue(':numV', $numV, PDO::PARAM_STR);
            $res->bindValue(':numR', $numR, PDO::PARAM_INT);
            $res->bindValue(':numM', $numM, PDO::PARAM_STR);
            $res->bindValue(':qt', $qt, PDO::PARAM_INT);
            $res->execute();
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
    }


    public function getDetailsEchantillons($id) {
        try {
            $req="SELECT * FROM offrir INNER JOIN medicament ON offrir.MED_DEPOTLEGAL = medicament.MED_DEPOTLEGAL WHERE RAP_NUM = :pid";
            $prep= PdoGsb::$monPdo->prepare($req);
            $prep->bindValue('pid', $id, PDO::PARAM_INT);
            $prep->execute();
            $ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
            return $ligne;
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
    }


    public function getEchantillons($id) {
        try {
            $req="SELECT * FROM offrir INNER JOIN medicament ON offrir.MED_DEPOTLEGAL = medicament.MED_DEPOTLEGAL WHERE offrir.VIS_MATRICULE = :id";
            $prep= PdoGsb::$monPdo->prepare($req);
            $prep->bindValue('id', $id, PDO::PARAM_STR);
            $prep->execute();
            $ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
            return $ligne;
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
    }


    public function getRapport($id) {
        try {
            $req="SELECT VIS_NOM, VIS_PRENOM, PRA_NOM, PRA_PRENOM, RAP_NUM, RAP_DATE, RAP_BILAN, RAP_MOTIF, VIS_DATE, REMPL FROM rapport_visite  JOIN visiteur ON rapport_visite.VIS_MATRICULE = visiteur.VIS_MATRICULE JOIN praticien ON rapport_visite.PRA_NUM = praticien.PRA_NUM WHERE RAP_NUM = :pid ORDER BY RAP_NUM";
            $prep= PdoGsb::$monPdo->prepare($req);
            $prep->bindValue('pid', $id, PDO::PARAM_INT);
            $prep->execute();
            $ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
            return $ligne;
        }
        catch (Exception $ex) {
            $ex->getMessage();
        }
    }


###############################################################################
/*
███████  █████  ██ ██████
██      ██   ██ ██ ██   ██
███████ ███████ ██ ██   ██
     ██ ██   ██ ██ ██   ██
███████ ██   ██ ██ ██████ le musulmans hihi ^^
*/
###############################################################################

}

?>
