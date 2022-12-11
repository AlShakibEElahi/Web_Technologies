<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    if(isset($_SESSION['err'])){
        echo $_SESSION['err'];
        unset($_SESSION['err']);
    }
    if(isset($_SESSION['addValid'])){
        echo $_SESSION['addValid'];
        unset($_SESSION['addValid']);
    }
    if(isset($_SESSION['insertemployee'])){
        echo $_SESSION['insertemployee'];
        unset($_SESSION['insertemployee']);
    }
    if(isset($_SESSION['insertemployeelogin'])){
        echo $_SESSION['insertemployeelogin'];
        unset($_SESSION['insertemployeelogin']);
    }
?>
<html>
    <head>
        <script src="../dashboard.js"></script>
        <title>Admin Dashboard</title>
    </head>
    <body onload="search()">
        <table width="100%">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td align="center">
                                <form method="POST" action="../../controllers/adminsection/employeedetailsvalidator.php">
                                    <tabble>
                                        <tr>
                                            <td colspan='9'>
                                                <input type='text' name='name' value='' id='na1' onkeyup='search()'>
                                                <input type='submit' value='Search by name'>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p id='na1write'>Employee Information is going to show here...</p>
                                            </td>
                                        </tr>
                                    </tabble> 
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <script>
            function search() {
                let name = document.getElementById('na1').value;
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controllers/viewusersval.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('name=' + name);
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementsByTagName('p')[0].innerHTML = this.responseText;
                    }
                }
            }
        </script>
    </body>
</html>