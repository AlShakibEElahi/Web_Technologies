<?php
    session_start();
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone=$_POST['phone'];
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $conpassword = $_POST["conpass"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];

    if(empty($name) || empty($email) || empty($phone) || empty($username)|| empty($password) || empty($conpassword) || empty($gender) || empty($dob) || !preg_match("/^[a-zA-Z ]{2,}$/",$name) || !preg_match("/^[a-z_0-9]{2,}@[a-z]{2,}\.[a-z]{2,}(.?[a-z]{2,})?$/",$email) || !preg_match("/^(01)[346789][0-9]{8}$/",$phone) || !preg_match("/^(?=.*[-_\.])[a-zA-Z0-9-_\.]{2,}$/",$username) || !preg_match("/^(?=.*[@#%\$])[a-zA-Z0-9@#%\$]{8,}$/",$password) || $password!=$conpassword){
        if(empty($name)){
            $_SESSION["emtname"] ="*Must fill up name";
        }
        if(empty($email)){
            $_SESSION["emtemail"] ="*Must fill up email";
        }
        if(empty($phone)){
            $_SESSION["emtphone"] ="*Must fill up Phone number";
        }
        if(empty($username)){
            $_SESSION["emtusername"] ="*Must fill up username";
        }
        if(empty($password)){
            $_SESSION["emtpass"] ="*Must provide a password";
        }
        if(empty($conpassword)){
            $_SESSION["emtconpass"] ="*Must provide password again";
        }
        if(empty($gender)){
            $_SESSION["emtgender"] ="*Must fill up gender";
        }
        if(empty($dob)){
            $_SESSION["emtdob"] ="*Must fill up Date of Birth";
        }
        if(!empty($name) && !preg_match("/^[a-zA-Z ]{2,}$/",$name)){
            $_SESSION["nameerr"] ="Invalid name format";
        }
        if(!empty($email) && !preg_match("/^[a-z_0-9]{2,}@[a-z]{2,}\.[a-z]{2,}(.?[a-z]{2,})?$/",$email)){
            $_SESSION["emailerr"] ="Invalid email format";
        }
        if(!empty($phone) && !preg_match("/^(01)[346789][0-9]{8}$/",$phone)){
            $_SESSION["phoneerr"] ="Invalid phone format";
        }
        if(!empty($username) && !preg_match("/^(?=.*[-_\.])[a-zA-Z0-9-_\.]{2,}$/",$username)){
            $_SESSION["usernameerr"] ="Invalid user-name format";
        }
        if(!empty($password) && !preg_match("/^(?=.*[@#%\$])[a-zA-Z0-9@#%\$]{8,}$/",$password)){
            $_SESSION["passerr"] ="Invalid password format";
        }
        if(!empty($password) && !empty($conpassword) && $password!=$conpassword){
            $_SESSION["conpasserr"] ="Password does not match";
        }
        header("location: registration.php");
    }
    else{
        $file3 = fopen('upload/registerID.txt', 'r');
        $data3 = fread($file3, filesize('upload/registerID.txt'));
        $ndata=((int)$data3+1);
        fclose($file3);
        
        $file4 = fopen('upload/registerID.txt', 'w');
        fwrite($file4, $ndata);
        fclose($file4);
        
        $id="R-".date("Y")."-".$ndata;
        $file1 = fopen('upload/registration.txt', 'a');
        $file2 = fopen('upload/login.txt', 'a');
        $data2 = "#id:".$id."#name:".$name."#email:".$email."#phone:".$phone."#username:".$username."#password:".$password."#end"."\r";
        $data1 = "#id:".$id.$gender."#dob:".$dob."\r";
        fwrite($file1, $data1);
        fwrite($file2, $data2);
        fclose($file1);
        fclose($file2);
        $_SESSION['regValid']='ID: '.$id.'<br>'.'Password'.$password.'<br>'.'Registration is successfull';
        header('location: login.php');
    }
?>