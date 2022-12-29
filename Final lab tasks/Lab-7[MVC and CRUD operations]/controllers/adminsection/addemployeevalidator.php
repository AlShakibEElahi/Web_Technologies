<?php
    require_once '../../models/employeeModel.php';
    $name = $_POST["name"];
    $fname= $_POST["fathername"];
    $mname= $_POST["mothername"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dob=$_POST["dob"];
    $designation = $_POST["designation"];
    $branch = $_POST["branch"];
    $salary = $_POST["salary"];
    
    if(empty($name) || empty($email) || empty($phone) || empty($salary) || empty($branch)|| empty($fname)|| empty($mname|| empty($designation)|| empty($dob))){
        if(empty($name)){
            $_SESSION["emtname"] ="*Must fill up name";
        }
        if(empty($email)){
            $_SESSION["emtemail"] ="*Must fill up email";
        }
        if(empty($phone)){
            $_SESSION["emtphone"] ="*Must fill up Phone number";
        }
        header("location: ../../views/admindashbords/addemployee.php");
    }

    else if(empty($name) || empty($email) || empty($phone) || empty($salary) || empty($branch)|| empty($fname)|| empty($mname|| empty($designation)|| empty($dob))){
        if(empty($name)){
            $_SESSION["emtname"] ="*Must fill up name";
        }
        if(empty($email)){
            $_SESSION["emtemail"] ="*Must fill up email";
        }
        if(empty($phone)){
            $_SESSION["emtphone"] ="*Must fill up Phone number";
        }
        header("location: ../../views/admindashbords/addemployee.php");
    }
    else{
        $username=strtolower(str_replace(" ",'',$name))."_".date("m");
        $password=$phone."@";
        $id=searchforID();
        echo $id;
        $user=['id'=>$id,'name'=>$name,'fname'=>$fname,'mname'=>$mname ,'dob'=>$dob,'designation'=>$designation,'salary'=>$salary,'branch'=>$branch,'email'=>$email,'phone'=>$phone,'username'=>$username,'password'=>$password];
        $status=addemployeeinemp($user);
        $status=addemployeeinlogin($user);

        if(isset($_SESSION['insertemployee']) && isset($_SESSION['insertemployeelogin'])){
            header('location: ../../views/admindashboards/addemployee.php');
        }
    }
?>