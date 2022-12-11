<?php
    require_once '../models/loginmodel.php';
    require_once 'validators.php';
    $id = $_POST["id"];
    $password = $_POST["password"];
    $conpass = $_POST["conpass"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $usertype = $_POST["usertype"];
    if(empty($name) || empty($id) || empty($password) || empty($conpass)|| empty($email) || empty($usertype)){
        $_SESSION['regerr']="All field must fill";
        header('location:../views/registration.php');
    }
    else if(!namecheck($name) && !emailcheck($email) && !passwardcheck($password) && $password!=$conpass && (strlen($id)>4)){
        $_SESSION['regerr']="Requirements must fill";
        header('location:../views/registration.php');
    }
    else{
        $user=['id'=>$id,'name'=>$name,'password'=>$password,'usertype'=>$usertype ,'email'=>$email];
        $status=adduser($user);
        if(isset($_SESSION['registration'])){
            header('location:../views/login.php');
        }
        else{
            $_SESSION['regierr']="Registration cannot done";
        }
    }
?>