<?php
    require_once 'db.php';
        
    function searchforid(){
        $con = getconnection();
        $sql = "SELECT max(id) FROM `branch`";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
        $user=$users['max(id)'];
        if($user != null){
            $lastint=(int)$user;
            $format=substr($user,0,(strlen($user)-1));
            $lastint=(int)substr($user,strrpos($user,'-')+1,(strlen($user)));
            $newid=$format.($lastint+1);
            return $newid;
        }
        else{
            return "Branch-1";
        }
    }

    function addbranch($branch){
        $con = getconnection();
        $sql2 = "INSERT INTO `branch`(`id`, `branchname`, `address`, `type`) VALUES ('{$branch['id']}','{$branch['name']}','{$branch['address']}','{$branch['type']}')";
        $result2 = mysqli_query($con, $sql2);
        
        if($result2){
            return $_SESSION['insertbranch']="Branch Added Successfully";
        }
    }
    function editbranch($user){
        $con = getconnection();
        $sql = "UPDATE `branch` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`phonenumber`='[value-4]',`username`='[value-5]',`password`='[value-6]',`role`='[value-7]' WHERE username='{$user['username']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function deletebranch($user){
        $con = getconnection();
        $sql = "DELETE FROM `branch` WHERE  `id`={$user['id']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function showallbranch(){
        $con = getconnection();
        $sql = "select * from branch";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function showallbranchbyname($name){
        $con = getconnection();
        $sql = "SELECT * FROM branch WHERE `branchname` LIKE '".$name."' ORDER BY id ASC;";
        $result = mysqli_query($con, $sql);
        return $result;
    }
?>