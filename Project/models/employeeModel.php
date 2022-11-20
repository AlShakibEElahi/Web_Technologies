<?php
    require_once 'db.php';
        
    function addemployeeinemp($user){
        $con = getconnection();
        $sql2 = "INSERT INTO `employee`(`id`, `fathername`, `mothername`, `dob`, `designation`, `salary`, `branch`) VALUES ('','{$user['fname']}','{$user['mname']}','{$user['dob']}','{$user['designation']}','{$user['salary']}','{$user['branch']}')";
        $result2 = mysqli_query($con, $sql2);
        $user2 = mysqli_num_rows($result2);
        
        if($user2 >0){
            return $_SESSION['insertemployee']="Insert Employee Successfull";
        }
    }
    function addemployeeinlogin($user){
        $con = getconnection();
        $sql1 = "INSERT INTO `login`(`id`, `name`, `email`, `phonenumber`, `username`, `password`, `role`) VALUES ('','{$user['name']}','{$user['email']}','{$user['phone']}','{$user['username']}','{$user['password']}','{$user['designation']}')";
        $result1 = mysqli_query($con, $sql1);
        $user1 = mysqli_num_rows($result1);
        
        if($user1>0){
            return $_SESSION['insertemployeelogin']="Login can be done";
        }
    }
    function editemployee($user){
        $con = getconnection();
        $sql = "UPDATE `login` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`phonenumber`='[value-4]',`username`='[value-5]',`password`='[value-6]',`role`='[value-7]' WHERE username='{$user['username']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function deleteemployee($user){
        $con = getconnection();
        $sql = "DELETE FROM `login` WHERE  `username`={$user['username']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function searchemployee($user){
        $con = getconnection();
        $sql = "select * from login where username='{$user['username']}' and phonenumber='{$user['phone']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
?>