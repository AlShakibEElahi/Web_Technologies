<?php
    require_once 'db.php';
        
    function searchforid(){
        $con = getconnection();
        $sql = "SELECT max(id) FROM user";
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
            return "R-2022-1";
        }
    }
    function adduser($user){
        $con = getconnection();
        $sql = "INSERT INTO `user`(`id`, `name`, `fathername`, `mothername`, `phone`, `email`, `username`, `password`, `dob`, `gender`) VALUES ('{$user['id']}','{$user['name']}','{$user['fname']}','{$user['mname']}','{$user['phone']}','{$user['email']}','{$user['username']}','{$user['password']}','{$user['dob']}','{$user['gender']}')";
        $result = mysqli_query($con, $sql);
        print_r($result);
        print_r($user);
        if($result){
            return $_SESSION['user']=$user;
        }
    }
?>