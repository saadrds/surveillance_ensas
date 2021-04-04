<?php
    require_once("../models/connection.php");
    $con = new ConnectionClass();
    if(isset($_POST['username']) && isset($_POST['password'])){
        $result = $con->SelectWhereFromTable("admin","username",$_POST['username']);
        if(!empty($result)){
            if($result['PASSWORD'] == $_POST['password']){
                require_once('../Views/homeView.php');
            }
        }
        else{
            Header('Location:index.php?msg=erreur');
        }
    }

    
?>