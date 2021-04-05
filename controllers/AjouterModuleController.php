<?php

    require_once('../models/connection.php');
    $con = new ConnectionClass();
    $filieres = $con->SelectAllFromTable("filiere");
    $fil = $con->SelectAllFromTableGroupeBy("filiere");

    require_once('templates/header.php');
    require_once('../views/AjouterModule.php');
    require_once('templates/footer.php');
?>