<?php
    require_once("../models/connection.php");
    $con = new ConnectionClass();
    if(isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])){
        $result = $con->SelectWhereFromTable($_POST['username'],$_POST['password']);
        if(!empty($result)){
                require_once('../Views/homeView.php');
        }
        else{
            Header('Location:index.php?msg=erreur');
        }
    }
?>