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
                    <table>
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>REGISTRATION</legend>
                                    <form method="post" action="../controllers/registrationValidator.php">
                                        <table>
                                            <tr>
                                                <td colspan="2"><br></td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                    :<input onkeyup="f1()" type="text" name="name" value="" id="na1" />
                                                    <p id="na1err"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    :<input onkeyup="f2()" type="text" name="name" value="" id="em1" />
                                                    <p id="em1err"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>
                                                    :<input onkeyup="f3()" type="number" name="phone" value="" id="phn1" />
                                                    <p id="phn1err"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Userame</td>
                                                <td>
                                                    :<input onkeyup="f4()" type="text" name="username" value="" id="uid1" />
                                                    <p id="uid1err"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    :<input onkeyup="f5()" type="password" name="pass" value="" id="pass1" />
                                                    <p id="1passerr"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>
                                                    :<input onkeyup="f6()" type="password" name="conpass" value="" id="con1" />
                                                    <p id="con1err"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>Gender</legend>
                                                        <input type="radio" name="gender" value="Male" />Male
                                                        <input type="radio" name="gender" value="Female" />Female
                                                        <input type="radio" name="gender" value="Other" />Other
                                                        <p id="g1err"></p>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>Date of Birth</legend>
                                                        <input type="date" name="dob" value="" id="dob1" />
                                                        <p id="dob1err"></p>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" name="" value="Submit" />
                                                    <input type="reset" name="" value="Reset" />
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