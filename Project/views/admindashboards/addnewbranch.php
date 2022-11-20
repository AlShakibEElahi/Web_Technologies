<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    if(isset($_SESSION['err'])){
        echo $_SESSION['err'];
        unset($_SESSION['err']);
    }
    if(isset($_SESSION['addValid'])){
        echo $_SESSION['addValid'];
        unset($_SESSION['addValid']);
    }
?>
<?php?>
<html>
    <head>
        <title>Admin Dashboard</title>
    </head>
    <body>
        <table border="4" width="100%" height="100%">
            <tr>
                <td>
                    <table height="100%" width="100%">
                        <tr height="70px">
                            <td>
                                <a href="../admindashboard.php"><h2><i>Smart Hostel</i></h2></a>
                            </td>
                            <td align="right"> <h4>Welcome, <?php echo $_SESSION['name']?></h4></td>
                            <td align="right">
                                <a href="../logout.php"><img src="../image/logout-icon.jpg" width="35" height="35" align="center"></a>
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
                                <form method="post" action="adminsection.php">
                                    <fieldset>
                                        <table>
                                            <tr align="left">
                                                <td><input type="radio" name="admOpt" value="employeemanagement" />Employee Management</td>
                                                <td>
                                                    <select name="employeemanagement">
                                                        <option value="addemployee">Add Employee</option>
                                                        <option value="updateinformation">Update Information</option>
                                                        <option value="employeedetails">Employee Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="admOpt" value="usermanagement" />User Management</td>
                                                <td>
                                                    <select name="usermanagement">
                                                        <option value="adduser">Add User</option>
                                                        <option value="updatedetails">Update Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="admOpt" value="facilityAndServices" />Facility & Services</td>
                                                <td>
                                                    <select name="facilityAndServices">
                                                        <option value="addnewfacility">Add new Facility</option>
                                                        <option value="updatefacility">Update Facility</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="admOpt" value="branch" />Branch</td>
                                                <td>
                                                    <select name="branch">
                                                        <option value="addnewbranch">Add new branch</option>
                                                        <option value="branchdetails">Branch Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="admOpt" value="room" />Room</td>
                                                <td>
                                                    <select name="room">
                                                        <option value="addnewroom">Add new room</option>
                                                        <option value="updatefacility">Update Facility</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="admOpt" value="accounts" />Accounts</td>
                                                <td>
                                                    <select name="accounts">
                                                        <option value="totalrevenue">Total Revenue</option>
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
                                <form method="post" action="addemployeevalidator.php">
                                    <fieldset>
                                        <legend>Add New Branch</legend>
                                        <table>
                                            <tr>
                                                <td>Branch Name</td>
                                                <td>:<input type="text" name="branchname" /></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>:<input type="text" name="branchaddress" /></td>
                                            </tr>
                                            <tr>
                                                <td>Branch Manager</td>
                                                <td>:<input type="text" name="branchmanager" /></td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="2"><input type="submit" name="insert" value="ADD" ></td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>