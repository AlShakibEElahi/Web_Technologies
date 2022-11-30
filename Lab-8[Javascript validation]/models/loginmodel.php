<?php
    session_start();
    require_once 'db.php';
        
    function login($user){
        $con = getconnection();
        $sql = "select * from login where id='{$user['uid']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function forgetpassword($user){
        $con = getconnection();
        $sql = "select * from login where username='{$user['username']}' and phonenumber='{$user['phone']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
?>