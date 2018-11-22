<?php
include("vues/NavBar/v_NavBar.php");

if(!isset($_REQUEST['action'])){
    $_REQUEST['action']='liste';
}
$action = $_REQUEST['action'];
switch($action){
    case 'liste':{
        $LesMedicaments = $pdo->GetListeMedicament();

        include("vues/Medicaments/v_MedicamentListe.php");
        break;
    }
    case 'detail':{
        $id =  $_REQUEST['id'];
        settype($id, "string");
        $unMedicament = $pdo->ObtenirDetailMedicament($id);
        include("vues/Medicaments/v_MedicamentDetail.php");
        break;
    }
}

?>
