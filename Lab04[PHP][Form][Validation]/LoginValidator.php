<?php
    session_start();
    $name = $_POST["username"];
    $password = $_POST["password"];
    $val1=0;
    for($i=0;$i<strlen($name);$i++){
        if(($name[$i]>='a' && $name[$i]<='z')||($name[$i]>='A' && $name[$i]<='Z')|| ($name[$i]<='.' ||$name[$i]<='-'||$name[$i]<='_')){
            continue;
        }
        else{
            $val1=1;
            break;
        }
    }
    $it1=substr_count($password,'.');
    $it2=substr_count($password,'_');
    $it3=substr_count($password,'-');
    $it5=substr_count($password,'@');
    $it6=substr_count($password,'#');
    $it7=substr_count($password,'$');
    $it8=substr_count($password,'%');

    if((strlen($name)>2 && $val1==0 && ($it1>=1 || $it2>=1 || $it3>=1)) && (strlen($password)>8 && ($it5>=1 || $it6>=1 || $it7>=1 || $it8>=1))){
        echo "<h1>Login Successfull</h1>";
    }
    else{
        echo"<h3>Invalid Name or Email</h3>";
    }
?>