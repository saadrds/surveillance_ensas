<?php
require_once('../models/connection.php');

$message = "salam saad";

if(isset($_POST['nomModule']) && isset($_POST['respoModule']) && isset($_POST['descreption'])){
    echo "<p>dkhl</p>";
    $nomModule = htmlspecialchars($_POST['nomModule']);
    $respoModule = htmlspecialchars($_POST['respoModule']);
    $descreption = htmlspecialchars($_POST['descreption']);

    $con = new ConnectionClass();
    
    $dic = ["NOM_MODULE	" => $nomModule,
            "RESPO_MODULE" => $respoModule,
            "DESCRIPTION" => $descreption];
    if($con->InsertRowIntoTable("module", $dic)){
        $message = "Le Module $nomModule est bien ajoute ";
        require_once('AjouterModuleController.php');
    }else{
        $message = "Le Module $nomModule n'est bien ajoute !!!!!!! ";
    }
} 
?>