<?php
echo "Hello";
    session_start();
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

    // if(empty($name) || empty($email) || empty($phone) || empty($salary) || !preg_match("/^[a-zA-Z ]{2,}$/",$name) || !preg_match("/^[a-z_0-9]{2,}@[a-z]{2,}\.[a-z]{2,}(.?[a-z]{2,})?$/",$email) || !preg_match("/^(01)[346789][0-9]{8}$/",$phone)){
    //     if(empty($name)){
    //         $_SESSION["emtname"] ="*Must fill up name";
    //     }
    //     if(empty($email)){
    //         $_SESSION["emtemail"] ="*Must fill up email";
    //     }
    //     if(empty($phone)){
    //         $_SESSION["emtphone"] ="*Must fill up Phone number";
    //     }
    //     if(!empty($name) && !preg_match("/^[a-zA-Z ]{2,}$/",$name)){
    //         $_SESSION["nameerr"] ="Invalid name format";
    //     }
    //     if(!empty($email) && !preg_match("/^[a-z_0-9]{2,}@[a-z]{2,}\.[a-z]{2,}(.?[a-z]{2,})?$/",$email)){
    //         $_SESSION["emailerr"] ="Invalid email format";
    //     }
    //     if(!empty($phone) && !preg_match("/^(01)[346789][0-9]{8}$/",$phone)){
    //         $_SESSION["phoneerr"] ="Invalid phone format";
    //     }
    //     header("location: addemployee.php");
    // }
    // else{
        
        // $id="E-".date("Y")."-".$ndata;
        // $file1 = fopen('../upload/employee.txt', 'a');
        // $file2 = fopen('../upload/login.txt', 'a');
        $username=$name."_".date("m");
        $password=$phone."@";
        // $data2 = "#id:".$id."#name:".$name."#email:".$email."#phone:".$phone."#username:".$username."#password:".$password."#end"."\r";
        // $data1 = "#id:".$id."#branch".$branch."#designation".$designation."#salary:".$salary."\r";
        
        $user=['name'=>$name,'fname'=>$fname,'mname'=>$mname ,'dob'=>$dob,'designation'=>$designation,'salary'=>$salary,'branch'=>$branch,'email'=>$email,'phone'=>$phone,'username'=>$username,'password'=>$password];
        $status=addemployeeinemp($user);
        $status=addemployeeinlogin($user);

        if(isset($_SESSION['insertemployee']) && isset($_SESSION['insertemployeelogin'])){
            header('location: ../../views/admindashboards/addemployee.php');
        }
    //}
?>