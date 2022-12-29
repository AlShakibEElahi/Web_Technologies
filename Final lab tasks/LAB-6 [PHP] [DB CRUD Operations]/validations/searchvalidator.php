<?php
    session_start();
    $name=$_POST['name'];
    if(!empty($name)){
        $_SESSION['name']=$name;
    }
    header('location: ../E-Search.php');
?>