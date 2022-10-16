<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="LoginValidator.php" method="post">
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
                            <a href="ChangePassword.php">Forget Password</a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>
