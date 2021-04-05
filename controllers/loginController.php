<?php
    require_once("../models/connection.php");
    $con = new ConnectionClass();
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    if(isset($_POST['username']) && isset($_POST['password'])){
        $result = $con->SelectWhereFromTable("admin",$username,$password);
        if(!empty($result)){

                require_once('../views/homeView.php');
        }
        else{
            Header('Location:index.php?msg=erreur');
        }
    }
    else{
        Header('Location:index.php?msg=erreur');
    }
?>