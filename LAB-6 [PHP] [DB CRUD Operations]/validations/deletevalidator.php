<?php
    session_start();
    $id=$_SESSION['id'];
    unset($_SESSION['id']);
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql1 ="DELETE FROM `products` WHERE `id`='{$id}'";
    $result1 = mysqli_query($con, $sql1);
    if($result1>0){
        echo "successful<br>";
    }
    else{
        echo "Unsuccessful<br>";
    }
?>