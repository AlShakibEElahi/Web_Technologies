<?php
session_start();
if(isset($_SESSION['password'])){
    echo $_SESSION['password'];
    unset($_SESSION['password']);
}
?>
<head>
    <title>Forget Password</title>
</head>
<body>
    <table border="1" width="100%" height="100%">
        <tr>
            <td>
                <table height="100%" width="100%">
                    <tr>
                        <td><h1><i>Smart Hostel</i></h1></td>
                        <td align="right">
                            <a href="index.php">Home</a> |
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
                    <form action="../controllers/forgetpassvalidator.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <fieldset>
                                        <legend><b>Forget Password</b></legend>
                                        <table>
                                            <tr>
                                                <td>Username</td>
                                                <td>
                                                    :<input type="text" name="username" value="" />
                                                    <?php
                                                        if(isset($_SESSION['emtusername'])){
                                                            echo $_SESSION['emtusername'];
                                                            unset($_SESSION['emtusername']);
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>
                                                    :<input type="number" name="phone" value="" />
                                                    <?php
                                                        if(isset($_SESSION['emtphone'])){
                                                            echo $_SESSION['emtphone'];
                                                            unset($_SESSION['emtphone']);
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
                                                    <a href="registration.php">
                                                        Donot have an Account? Register.
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

