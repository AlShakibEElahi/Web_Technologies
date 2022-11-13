<?php
session_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="1-LoginValidator.php" method="post">
            <fieldset>
                <legend><b>LOGIN</b></legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="remember" value="">Remember Me</td>
                    </tr>
                    <tr>
                        <td colspan="2"><br /></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="" value="Submit" />
                            <?php
                                $_SESSION['check']='True';
                            ?>
                            <a href="ChangePassword.php">
                                <?php
                                    $_SESSION['reset']='True';
                                ?>
                            Forget Password</a>
                            
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>
