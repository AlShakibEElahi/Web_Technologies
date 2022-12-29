<?php
    session_start();
    if(isset($_SESSION["regValid"])){
        echo $_SESSION["regValid"];
        unset($_SESSION["regValid"]);
    }
?>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <table border="1" width="100%" height="100%">
        <tr>
            <td>
                <center>
                    <table height="100%" width="100%">
                        <tr>
                            <td>
                                <h1><i>Smart Hostel</i></h1>
                            </td>
                            <td align="right">
                                <a href="../index.php">Home</a> |
                                <a href="login.php">Login</a> |
                                <a href="registration.php">Registration</a>
                            </td>
                        </tr>
                    </table>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <h1>Hello</h1>

                </center>
            </td>
        </tr>
        <!-- <tr>
            <td align="center"><h4>copyright @ smart_hostel</h4></td>
        </tr> -->
    </table>
    <script>
        function nameck() {
            let name = document.getElementById('na1').value;
            if (name.length < 2) {
                document.getElementsById('h1')[0].innerHTML = "Weak name";
                alert('name');
            } else {
                document.getElementsById('h1')[0].innerHTML = "Strong password";
            }
        }
    </script>
</body>

</html>