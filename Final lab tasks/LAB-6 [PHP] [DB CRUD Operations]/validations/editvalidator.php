<?php
    session_start();
    $name=$_POST['name'];
    $buyingp=$_POST['buyingp'];
    $sellingp=$_POST['sellingp'];
    $id=$_SESSION['id'];
    unset($_SESSION['id']);

    if(empty($_POST['display'])){
        $display="No";
    }
    else{
        $display="Yes";
    }
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql1 ="UPDATE `products` SET `name`='{$name}',`buyingprice`='{$buyingp}',`sellingprice`='{$sellingp}',`display`='{$display}' WHERE `id`='{$id}'";
    $result1 = mysqli_query($con, $sql1);
    if($result1>0){
        $_SESSION['msg']="Edit successful<br>";
        header('location:../products.php');
    }
    else{
        $_SESSION['msg']="Edit is not successful<br>";
        header('location:../B-Display.php');
    }
?>