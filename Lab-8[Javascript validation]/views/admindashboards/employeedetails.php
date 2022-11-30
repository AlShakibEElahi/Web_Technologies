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
                                <?php
                                    require_once '../../models/employeeModel.php';
                                    $results=showallemp();
                                    $rows=mysqli_num_rows($results);
                                    if($rows>0){

                                        echo "<table border='1'>
                                        <tr>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Mother's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Designation</th>
                                            <th>Branch</th>
                                            <th>Salary</th>
                                            <th></th>
                                            <th></th>
                                        </tr>";
                                        while($row = mysqli_fetch_assoc($results)){
                                            echo "<tr><td>". $row['id']."</td><td>". $row['fathername']."</td><td>". $row['mothername']."</td><td>". $row['dob']."</td><td>". $row['designation']."</td><td>". $row['branch']."</td><td>". $row['salary']."</td><td><a href='updateinformationedit.php?id={$row['id']}"."'>edit</a></td><td><a href='updateinformation.php?id={$row['id']}"."'>delete</a></td></tr>";
                                        }
                                        echo "</tabel>";
                                    }
                                    else{
                                        echo"Currently no employee added...";
                                    }
                                    
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>