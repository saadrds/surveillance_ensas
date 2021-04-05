<?php

    $survList = $_POST["survList"];
    $local = $_POST["local"];
    $heure = $_POST["heure"];
    $typeDS = $_POST["typeDs"];
    $date = $_POST["date"];
    $idModule = $_POST["idModule"];
    require_once("../models/connection.php");
    $con = new ConnectionClass();
    $dic = ["TYPE"=>$typeDS, "DATE_EXAMEN" => $date,"LOCAL"=>$local,"ID_MODULE"=>$idModule,"heure"=>$heure];
    $data = $con->InsertRowIntoTable("examen", $dic);
    if($data){
        echo "exam added successefully";
    }
    else{
        echo "error adding exam";
    }
 ?>