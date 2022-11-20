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
                            <td><h1><i>Smart Hostel</i></h1></td>
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
                                    <form method="post" action="registrationValidator.php" >
                                        <table>
                                            <tr>
                                                <td colspan="2"><br></td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                    :<input type="text" name="name" value="" />
                                                    <?php
                                                        if(isset($_SESSION["emtname"])){
                                                            echo $_SESSION["emtname"];
                                                            unset($_SESSION["emtname"]);
                                                        }
                                                        if(isset($_SESSION['nameerr'])){
                                                            echo $_SESSION['nameerr'];
                                                            unset($_SESSION['nameerr']);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    :<input type="text" name="email" value="" />
                                                    <?php
                                                        if(isset($_SESSION["emtemail"])){
                                                            echo $_SESSION["emtemail"];
                                                            unset($_SESSION["emtemail"]);
                                                        }
                                                        if(isset($_SESSION['emailerr'])){
                                                            echo $_SESSION['emailerr'];
                                                            unset($_SESSION['emailerr']);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>
                                                    :<input type="number" name="phone" value="" />
                                                    <?php
                                                        if(isset($_SESSION["emtphone"])){
                                                            echo $_SESSION["emtphone"];
                                                            unset($_SESSION["emtphone"]);
                                                        }
                                                        if(isset($_SESSION['phoneerr'])){
                                                            echo $_SESSION['phoneerr'];
                                                            unset($_SESSION['phoneerr']);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>Userame</td>
                                                <td>
                                                    :<input type="text" name="username" value="" />
                                                    <?php
                                                    
                                                        if(isset($_SESSION["emtusername"])){
                                                            echo $_SESSION["emtusername"];
                                                            unset($_SESSION["emtusername"]);
                                                        }
                                                    
                                                        if(isset($_SESSION['usernameerr'])){
                                                            echo $_SESSION['usernameerr'];
                                                            unset($_SESSION['usernameerr']);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    :<input type="password" name="pass" value="" />
                                                    <?php
                                                        if(isset($_SESSION["emtpass"])){
                                                            echo $_SESSION["emtpass"];
                                                            unset($_SESSION["emtpass"]);
                                                        }
                                                        if(isset($_SESSION['passerr'])){
                                                            echo $_SESSION['passerr'];
                                                            unset($_SESSION['passerr']);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>
                                                    :<input type="password" name="conpass" value="" />
                                                    <?php
                                                        if(isset($_SESSION["emtconpass"])){
                                                            echo $_SESSION["emtconpass"];
                                                            unset($_SESSION["emtconpass"]);
                                                        }
                                                        if(isset($_SESSION['conpasseerr'])){
                                                            echo $_SESSION['conpasseerr'];
                                                            unset($_SESSION['conpasseerr']);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>Gender</legend>
                                                        <input type="radio" name="gender" value="Male" />Male
                                                        <input type="radio" name="gender" value="Female" />Female
                                                        <input type="radio" name="gender" value="Other" />Other
                                                    </fieldset>
                                                    <?php
                                                        if(isset($_SESSION["emtgender"])){
                                                            echo $_SESSION["emtgender"];
                                                            unset($_SESSION["emtgender"]);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td  colspan="2">
                                                    <fieldset>
                                                        <legend>Date of Birth</legend>
                                                        <input type="date" name="dob" value="" />
                                                    </fieldset>
                                                    <?php
                                                        if(isset($_SESSION["emtdob"])){
                                                            echo $_SESSION["emtdob"];
                                                            unset($_SESSION["emtdob"]);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
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
</body>
</html>
