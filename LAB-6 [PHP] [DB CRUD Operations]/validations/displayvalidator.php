<?php
    session_start();
    $val=$_POST['submit'];
    $len=strlen($val);
    $nrange=strpos($val,'-');
    $path=substr($val,0,$nrange);
    $id=substr($val,$nrange+1,$len);
    $_SESSION['id']=$id;
    if($path=='edit'){
        header('location:../C-Edit.php');
    }
    else{
        header('location:../D-Delete.php');

    }
?>