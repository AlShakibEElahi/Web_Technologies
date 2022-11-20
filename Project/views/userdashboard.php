<?php
    session_start();
    #if(!isset($_COOKIE['logstatus'])){
       # header('location:login.php');
    #}
?>
<?php?>
<html>
    <head>
        <title>User Dashboard</title>
    </head>
    <body>
        <table border="4" width="100%" height="100%">
            <tr>
                <td>
                    <table height="100%" width="100%">
                        <tr height="70px">
                            <td>
                                <h2><i>Smart Hostel</i></h2>
                            </td>
                            <td align="right"> <h4>Welcome, <?php echo $_SESSION['name']?></h4></td>
                            <td align="right">
                                <a href="logout.php"><img src="image\logout-icon.jpg" width="35" height="35" align="center"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="30%">
                                <form method="post" action="userdashboards/usersection.php">
                                    <fieldset>
                                        <table>
                                            <tr align="left">
                                                <td><input type="radio" name="usrOpt" value="information" />My Profile</td>
                                                <td>
                                                    <select name="information">
                                                        <option value="updateProf">Upload Profile Picture</option>
                                                        <option value="update">Update Information</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr align="left">
                                                <td><input type="radio" name="usrOpt" value="accounts" />Accounts</td>
                                                <td>
                                                    <select name="accounts">
                                                        <option value="monthlybill">Monthly Bill</option>
                                                        <option value="servicecost">View Services Cost</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            

                                            <tr align="left">
                                                <td><input type="radio" name="usrOpt" value="usrfacilityAndServices" />Facility & Services</td>
                                                <td>
                                                    <select name="usrfacilityAndServices">
                                                        <option value="addnewfacility">Add Services</option>
                                                        <option value="updatefacility">Cancel Services</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="usrOpt" value="others" />Others</td>
                                                <td>
                                                    <select name="others">
                                                        <option value="termsandconditions">Terms and conditions</option>
                                                        <option value="leaveapplication">Leave application</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="2">
                                                    <input type="submit" name="" value="Continue..." />
                                                    <input type="reset" name="" value="Reset" />
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                            <td align="center">
                                <h2>Facilities: </h2>
                                <h2>Cost: </h2>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>