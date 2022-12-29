<?php
    $host="localhost";
    $dbusername="root";
    $dbpass="";
    $dbname="smart_hostel";
    
    function getconnection(){
        global $host;
        global $dbusername;
        global $dbpass;
        global $dbname;
        return $con=mysqli_connect($host,$dbusername,$dbpass,$dbname);
    }
?>