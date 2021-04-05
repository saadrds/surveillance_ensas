<?php
require_once('../models/connection.php');

$message = "salam saad";

if(isset($_POST['nomModule']) && isset($_POST['respoModule']) && isset($_POST['descreption']) && isset($_POST['Filiere']) && isset($_POST['niveau'])){
    if(!empty($_POST['nomModule']) && !empty($_POST['respoModule']) && !empty($_POST['descreption']) && !empty($_POST['Filiere']) && !empty($_POST['niveau'])){
    $nomModule = htmlspecialchars($_POST['nomModule']);
    $respoModule = htmlspecialchars($_POST['respoModule']);
    $descreption = htmlspecialchars($_POST['descreption']);
    $Fili = $_POST['Filiere'];
    $niveau = $_POST['niveau'];
    echo $Fili;
    echo $niveau;

    $con = new ConnectionClass();
    $filiere = $con->SelectfiliereWhereFromTable($Fili,$niveau);
    foreach($filiere as $f){
        $if_f = $f['ID_FILIERE'];
    }
    
    $dic = ["NOM_MODULE	" => $nomModule,
            "RESPO_MODULE" => $respoModule,
            "DESCRIPTION" => $descreption ,
            "ID_FILIERE" => $if_f ];

    if($con->InsertRowIntoTable("module", $dic)){
        $messagegreen = "Le Module $nomModule est bien ajoute ";
        require_once('AjouterModuleController.php');
    }else{
        $messagered = "Le Module $nomModule n'est bien ajoute !!!!!!! ";
    }
}else{$messagered = "If faut remplaire tous les champs !!!!!!! ";
    require_once('AjouterModuleController.php');}
}
?>