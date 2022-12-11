<?php
    require_once '../models/loginmodel.php';
    $uid = $_POST["id"];
    $password = $_POST["password"];
    
    if(empty($uid) || empty($password)){
        if(empty($uid)){
            $_SESSION["emtuid"] ="*Must fill up user id";
        }
        if(empty($password)){
            $_SESSION["emtpass"] ="*Must fill up password";
        }
        header("location: ../views/login.php");
    }
    else{
        $user=['id'=>$uid, 'password'=>$password];
        $status=login($user);
        if(isset($_SESSION['user'])){
            $role=$_SESSION['user']['usertype'];
            setcookie('logstatus', 'true', time()+3600, '/');
            if($role=="Admin"){
                header('location: ../views/admindashboard.php');
            }
            if($role=="User"){
                header('location: ../views/userdashboard.php');
            }
        }
        else{
            $_SESSION['logerr']="Invalid User or Password";
            header('location: ../views/login.php');
        }
    }
?>