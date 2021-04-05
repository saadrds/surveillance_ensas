<?php
    require_once('../models/connection.php');
    $message = "";
    if(isset($_POST['submit']) && isset($_POST['nomProf']) && isset($_POST['prenomProf']) && isset($_POST['email']) && isset($_POST['telephone'])){
        if(!empty($_POST['submit']) && !empty($_POST['nomProf']) && !empty($_POST['prenomProf']) && !empty($_POST['email']) && !empty($_POST['telephone'])){
        $nomProf = htmlspecialchars($_POST['nomProf']);
        $prenomProf = htmlspecialchars($_POST['prenomProf']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);

        $con = new ConnectionClass();
        $dic = ["NOM" => $nomProf,
                "PRENOM" => $prenomProf,
                "EMAIL" => $email,
                "TEL" => $telephone];
        if($con->InsertRowIntoTable("prof", $dic)){
            $messagegreen = "Prof $nomProf $prenomProf est bien ajoute ";
            require_once('ajoutProfController.php');
        }else{
            $messagered = "Prof $nomProf $prenomProf n'est bien ajoute !!!!!!! ";

        }
    }else{$messagered = "If faut remplaire tous les champs !!!!!!! ";
        require_once('ajoutProfController.php');}

}
    
?>