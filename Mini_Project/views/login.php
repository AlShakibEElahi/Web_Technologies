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
    <table width="100%" height="100%">
        <tr>
            <td>
                <center>
                    <table>
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>Login</legend>
                                    <form method="POST" action="../controllers/loginValidator.php">
                                        <table>
                                            <tr>
                                                <th>
                                                    Login
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" name="id" value="" placeholder="User ID" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="password" name="password" value="" placeholder="Password" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="Checkbox" name="remerberme" value="rememberme" />Remember me
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" name="" value="Login" />
                                                    <a href="registration.php">
                                                        Register
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                </center>
            </td>
        </tr>
        <!-- <tr>
            <td align="center"><h4>copyright @ smart_hostel</h4></td>
        </tr> -->
    </table>
    <script>
        function f1() {
            let name = document.getElementById('na1').value;
            if (name.length < 8) {
                document.getElementsByTagName('p')[0].innerHTML = "Invalid name";
            }
            else {
                document.getElementsByTagName('p')[0].style.display = 'none';
            }
        }
        function f2() {
            let email = document.getElementById('em1').value;
            if (email.length < 12) {
                document.getElementsByTagName('p')[1].innerHTML = "Invalid email";
            }
            else {
                document.getElementsByTagName('p')[1].innerHTML = "Email is Ok";
            }
        }
        function f3() {
            let phone = document.getElementById('phn1').value;
            //let phone=phone1.tostring();
            if (phone.length < 11) {
                document.getElementsByTagName('p')[2].innerHTML = "Invalid phone number";
            }
            else {
                document.getElementsByTagName('p')[2].innerHTML = "Phone number is Ok";
            }
        }
        function f4() {
            let username = document.getElementById('uid1').value;
            if (username.length < 2) {
                document.getElementsByTagName('p')[3].innerHTML = "Invalid username";
            }
            else {
                document.getElementsByTagName('p')[3].innerHTML = "username is valid";
            }
        }
        function f5() {
            let pass = document.getElementById('pass1').value;
            if (pass.length < 12) {
                document.getElementsByTagName('p')[4].innerHTML = "weak password";
            }
            else {
                document.getElementsByTagName('p')[4].innerHTML = "password is strong";
            }
        }
        function f6() {
            let pass = document.getElementById('pass1').value;

            let conpass = document.getElementById('con1').value;
            if (conpass != pass) {
                document.getElementsByTagName('p')[5].innerHTML = "Password didn't match";
            }
            else {
                document.getElementsByTagName('p')[5].innerHTML = "Password matched";
            }
        } 
    </script>
</body>

</html>

