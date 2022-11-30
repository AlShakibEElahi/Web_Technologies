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
    if(isset($_SESSION['insertemployee'])){
        echo $_SESSION['insertemployee'];
        unset($_SESSION['insertemployee']);
    }
    if(isset($_SESSION['insertemployeelogin'])){
        echo $_SESSION['insertemployeelogin'];
        unset($_SESSION['insertemployeelogin']);
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
                            <td align="right"> <h4>Welcome, <?php echo $_SESSION['user']['username']?></h4></td>
                            <td align="right">
                                <a href="../../controllers/logout.php"><img src="../../assets/image/logout-icon.jpg" width="35" height="35" align="center"></a>
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
                                <form method="post" action="../../controllers/adminsection/adminselection.php">
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
                                <form method="post" action="../../controllers/adminsection/addemployeevalidator.php">
                                    <fieldset>
                                        <legend>Add Employee</legend>
                                        <table>
                                            <tr>
                                                <td>Name</td>
                                                <td>:<input type="text" name="name" /></td>
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
                                            </tr>
                                            <tr>
                                                <td>Father's Name</td>
                                                <td>:<input type="text" name="fathername" /></td>
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
                                            </tr>
                                            <tr>
                                                <td>Mother's Name</td>
                                                <td>:<input type="text" name="mothername" /></td>
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
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:<input type="email" name="email" /></td>
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
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>:<input type="number" name="phone" /></td>
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
                                            </tr>
                                            <tr>
                                                <td>Date of Birth</td>
                                                <td>:<input type="date" name="dob" /></td>
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
                                            </tr>
                                            <tr>
                                                <td>Designation</td>
                                                <td>:
                                                    <select name="designation">
                                                        <option value="Manager">Manager</option>
                                                        <option value="General Employee">General Employee</option>
                                                        <option value="Service Man">service Men</option>
                                                        <option value="Washerman">Washerman</option>
                                                        <option value="Head Chef">Head Chef</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Branch</td>
                                                <td>:
                                                    <select name="branch">
                                                        <option value="01">Branch 01</option>
                                                        <option value="02">Branch 02</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Salary</td>
                                                <td>:<input type="number" name="salary" /></td>
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