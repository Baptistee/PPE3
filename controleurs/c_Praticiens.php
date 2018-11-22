<?php
include("vues/NavBar/v_NavBar.php");
switch ($_GET["action"]) {
    case "saisir":
       
        if(isset($_POST["notePraticien"])){
             var_dump($_POST["codePraticien"]);
         $pdo->insertPraticien($_POST["nomPraticien"],$_POST["prenomPraticien"],$_POST["adressePraticien"],$_POST["cpPraticien"],$_POST["villePraticien"],$_POST["notePraticien"],$_POST["codePraticien"]);
           
         }
      
        $lesTypesPraticiens = $pdo->getTypePraticiens();
        
        include 'vues/praticiens/v_saisirPraticiens.php';
    break;
    
    case 'consulter' :

        
        $lesPraticiens = $pdo->getLesPraticiens();
    

        include 'vues/praticiens/v_consulterPraticien.php';
    break;
}
?>
