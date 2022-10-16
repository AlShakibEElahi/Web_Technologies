<?php
    $currpass = $_POST["currpass"];
    $newpass = $_POST["newpass"];
    $rewpass = $_POST["repass"];

    $it5=substr_count($newpass,'@');
    $it6=substr_count($newpass,'#');
    $it7=substr_count($newpass,'$');
    $it8=substr_count($newpass,'%');
    
    $val1=0;
    if($it5>='1' || $it6>='1' || $it7>='1' || $it8>='1'){
        $val1=1;
    }

    if($currpass!=$newpass && $newpass==$rewpass && strlen($newpass)>=8 && $val1=='1'){
        echo "<h1>Reset Password Successfull</h1>";
    }
    else{
        echo"<h3>Invalid password, Please Fillup Requirements</h3>";
    }
?>