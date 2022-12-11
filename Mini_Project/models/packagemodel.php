<?php
    require_once 'db.php';
    function addpackage($branch){
        $con = getconnection();
        $sql2 = "INSERT INTO `package`(`id`, `economy`, `businessclass`, `firstclass`) VALUES ('{$branch['id']}','{$branch['economy']}','{$branch['businessclass']}','{$branch['firstclass']}')";
        $result2 = mysqli_query($con, $sql2);
        
        if($result2){
            return $_SESSION['insertpackage']="Package Added Successfully";
        }
    }
    function showpackages($id){
        $con = getconnection();
        $sql2 = "select economy,businessclass,firstclass from package where `id`='$id'";
        $result2 = mysqli_query($con, $sql2);
        
        if($result2){
            return $result2;
        }
    }
?>
