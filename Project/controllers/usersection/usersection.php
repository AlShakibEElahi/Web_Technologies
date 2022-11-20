<?php
    $opt=$_POST['usrOpt'];
    $chc=$_POST[$opt];

    echo $opt.$chc;
    if($chc=="monthlybill"){
         header('location:monthlybill.php');
    }elseif($chc=="updateProf"){
        header('location:uploadprofilepicture.php');
    }elseif($chc=="update"){
        header('location:update.php');
    }elseif($chc=="addnewfacility"){
        header('location:addnewfacility.php');
    }elseif($chc=="cancelfacility"){
        header('location:cancelfacility.php');
    }elseif($chc=="termsandconditions"){
        header('location:termsandconditions.php');
    }elseif($chc=="leaveapplication"){
        header('location:leaveapplication.php');
    }
?>