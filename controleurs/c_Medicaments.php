<?php
include("vues/v_sommaire.php");

if(!isset($_REQUEST['action'])){
    $_REQUEST['action']='liste';
}
$action = $_REQUEST['action'];
switch($action){
    case 'liste':{
        $LesMedicaments = $pdo->ObtenirListeMedicament();
        
        include("vues/v_MedicamentListe.php");
        break;
    }
    case 'detail':{
        $id =  $_REQUEST['id'];
        settype($id, "string");
        $unMedicament = $pdo->ObtenirDetailMedicament($id);
        include("vues/v_MedicamentDetail.php");
        break;
    }
}
 
?>