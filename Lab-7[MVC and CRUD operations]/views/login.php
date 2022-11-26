<?php
session_start();
if(isset($_SESSION['regValid'])){
    echo $_SESSION['regValid'];
    unset($_SESSION['regValid']);
}
if(isset($_SESSION['logerr'])){
    echo $_SESSION['logerr'];
    unset($_SESSION['logerr']);
}
if(isset($_SESSION['password'])){
    echo $_SESSION['password'];
    unset($_SESSION['password']);
}
?>
<head>
    <title>Login</title>
</head>
<body>
    <table border="1" width="100%" height="100%">
        <tr>
            <td>
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
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <form action="../controllers/loginValidator.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <fieldset>
                                        <legend><b>LOGIN</b></legend>
                                        <table>
                                            <tr>
                                                <td>User ID</td>
                                                <td>
                                                    <input type="text" name="uid" value="" />
                                                    <?php
                                                        if(isset($_SESSION["emtuid"])){
                                                            echo $_SESSION["emtuid"];
                                                            unset($_SESSION["emtuid"]);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    <input type="password" name="password" value="" />
                                                    <?php
                                                        if(isset($_SESSION["emtpass"])){
                                                            echo $_SESSION["emtpass"];
                                                            unset($_SESSION["emtpass"]);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><br /></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" name="" value="Submit" />
                                                    <a href="forgetpass.php">
                                                        Forget Password
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </td>
                            </tr>
                        </table>
                    </form>
                </center>
            </td>
        </tr>
        <!-- <tr>
            <td align="center"><h4>copyright @ smart_hostel</h4></td>
        </tr> -->
    </table>
</body>
</html>

