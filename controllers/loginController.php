<?php
    require_once("../models/connection.php");
    $con = new ConnectionClass();
    if(isset($_POST['username']) && isset($_POST['password'])){
        $result = $con->SelectWhereFromTable("admin","username",$_POST['username']);
        if(empty($result)){
            Header('Location:index.php');
        }
        else{
            Header('Location:../Views/homeViews.php');

        }
    }

    
?>