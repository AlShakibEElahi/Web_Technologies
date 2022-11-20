<?php
    session_start();
    $name=$_SESSION['name'].".png";
    $src= $_FILES['image']['tmp_name'];
    $dst = "../profilepics/".$_SESSION['name'].($name);

    if(move_uploaded_file($src, $dst)){
        echo "Success";
    }else{
        echo "Error";
    }
?>