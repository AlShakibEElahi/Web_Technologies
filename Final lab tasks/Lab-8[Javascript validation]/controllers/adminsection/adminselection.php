<?php
session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    $opt=$_POST['admOpt'];
    $chc=$_POST[$opt];

    echo $opt.$chc;
    if($chc=="addemployee"){
        header('location:../../views/admindashboards/addemployee.php');
    }elseif($chc=="updateinformation"){
        header('location:../../views/admindashboards/updateinformation.php');
    }elseif($chc=="employeedetails"){
        header('location:../../views/admindashboards/employeedetails.php');
    }
?>