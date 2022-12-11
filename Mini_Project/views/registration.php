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
                                    <legend>REGISTRATION</legend>
                                    <form method="post" action="../controllers/registrationValidator.php">
                                        <table>
                                            <tr>
                                                <td>ID</td>
                                                <td>
                                                    :<input onkeyup="f1()" type="text" name="id" value="" id="id1" />
                                                    <p id="iderr"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    :<input onkeyup="f2()" type="password" name="password" value="" id="pass1" />
                                                    <p id="passerr"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>
                                                    :<input onkeyup="f3()" type="password" name="conpass" value="" id="conpass1" />
                                                    <p id="conerr"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                    :<input onkeyup="f4()" type="text" name="name" value="" id="name1" />
                                                    <p id="nameerr"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    :<input onkeyup="f5()" type="text" name="email" value="" id="email1" />
                                                    <p id="emailerr"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>User Type</td>
                                                <td>
                                                    <select onclick="f6()" name="usertype" id="usertype1">
                                                        <option value="User">User</option>
                                                        <option value="Admin">Admin</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" name="" value="Register" />
                                                    <a href="login.php">Login</a>
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
    </table>
    <script>
        function f1() {
            let username = document.getElementById('id1').value;
            if (username.length < 3) {
                document.getElementsById('iderr').innerHTML = "Invalid ID format";
            }
            else {
                document.getElementsById('iderr').style.display = 'none';
            }
        }
        function f2() {
            let pass = document.getElementById('password1').value;
            if (pass.length < 7) {
                document.getElementsByTagId('passerr').innerHTML = "weak password";
            }
            else {
                document.getElementsById('passerr').innerHTML = "password is strong";
            }
        }
        function f3() {
            let pass = document.getElementById('password1').value;

            let conpass = document.getElementById('conpass1').value;
            if (conpass != pass) {
                document.getElementsById('conerr').innerHTML = "Password didn't match";
            }
            else {
                document.getElementsById('conerr').innerHTML = "Password matched";
            }
        }
        function f4() {
            let name = document.getElementById('name1').value;
            if (name.length < 1) {
                document.getElementsById('nameerr').innerHTML = "Invalid name";
            }
            else {
                document.getElementsById('nameerr').style.display = 'none';
            }
        }
        function f4() {
            let email = document.getElementById('email1').value;
            if (email.length < 12) {
                document.getElementsById('emailerr').innerHTML = "Invalid email";
            }
            else {
                document.getElementsById('emailerr').innerHTML = "Email is Ok";
            }
        }
        
        
    </script>
</body>

</html>