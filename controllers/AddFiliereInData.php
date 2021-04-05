<?php
require_once('../models/connection.php');

$message = "";
if(isset($_POST['nomFiliere']) && isset($_POST['chef']) && isset($_POST['niveau'])){
    if(!empty($_POST['nomFiliere']) && !empty($_POST['chef']) && :empty($_POST['niveau'])){
    $nomFiliere = htmlspecialchars($_POST['nomFiliere']);
    $chef = htmlspecialchars($_POST['chef']);
    $niveau = htmlspecialchars($_POST['niveau']);
    $con = new ConnectionClass();
    $dic = ["NOM_FILIERE" => $nomFiliere,
            "CHEF" => $chef,
            "NIVEAU" => $niveau];
    if($con->InsertRowIntoTable("filiere", $dic)){
        $messagegreen = "Le Module $nomFiliere est bien ajoute ";
        require_once('AjouterFiliereController.php');
    }else{
        $messagered = "Le Module $nomFiliere n'est bien ajoute !!!!!!! ";
    }else{$messagered = "If faut remplaire tous les champs !!!!!!! ";
        require_once('AjouterFiliereController.php');}
}
} 
?>