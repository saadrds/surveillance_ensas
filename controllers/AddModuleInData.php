<?php
require_once('../models/connection.php');

$message = "salam saad";

if(isset($_POST['nomModule']) && isset($_POST['respoModule']) && isset($_POST['descreption']) && isset($_POST['Filiere']) && isset($_POST['niveau'])){
    echo "<p>dkhl</p>";
    $nomModule = htmlspecialchars($_POST['nomModule']);
    $respoModule = htmlspecialchars($_POST['respoModule']);
    $descreption = htmlspecialchars($_POST['descreption']);
    $Fili = $_POST['Filiere'];
    $niveau = $_POST['niveau'];

    $con = new ConnectionClass();
    $filiere = $con->SelectfiliereWhereFromTable($Fili,$niveau);

    $dic = ["NOM_MODULE	" => $nomModule,
            "RESPO_MODULE" => $respoModule,
            "DESCRIPTION" => $descreption,
            "ID_FILIERE" => $filiere['ID_FILIERE'] ];

    if($con->InsertRowIntoTable("module", $dic)){
        $message = "Le Module $nomModule est bien ajoute ";
        require_once('AjouterModuleController.php');
    }else{
        $message = "Le Module $nomModule n'est bien ajoute !!!!!!! ";
    }
} 
?>