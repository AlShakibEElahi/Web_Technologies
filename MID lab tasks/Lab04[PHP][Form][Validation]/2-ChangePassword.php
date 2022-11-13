<?php
    session_start();
    if(!isset($_SESSION['reset'])){
        header('location: 1-Login.php');
    }
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="2-ChangePasswordValidator.php" method="post">
            <fieldset>
                <legend><b>CHANGE PASSWORD</b></legend>
                <table>
                    <tr>
                        <td>Current Password</td>
                        <td><input type="password" name="currpass" value="" /></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td>
                            <input type="password" name="newpass" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Retype New Password</td>
                        <td>
                            <input type="password" name="repass" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr /></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="" value="Submit" />
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>
