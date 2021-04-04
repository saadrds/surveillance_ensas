<?php
    require_once("../models/connection.php");
    $con = new ConnectionClass();
    if(isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])){
        $result = $con->SelectWhereFromTable("admin","username",$_POST['username']);
        if(!empty($result)){
            if($result['password'] == $_POST['password']){
                require_once('../Views/homeView.php');
            }
        }
        else{
            Header('Location:index.php?msg=erreur');
        }
    }

    
?>