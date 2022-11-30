<?php
    require_once('../../models/db.php');
    session_start();

    if(isset($_GET['id'])){
            $con = getconnection();
            $sql ="select * from employee where `id`=".$_GET['id'];
            unset($_GET['id']);
            $row = mysqli_query($con, $sql);
            print_r($row);
            $result = mysqli_fetch_assoc($row);
                print_r($result);
    }
                                    
                                
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
                                <table>
                                    <tr>
                                        <td>
                                            <form method="post" action="../../controllers/adminsection/editvalidator.php">
                                                <fieldset>
                                                    <legend><b>EDIT</b></legend>
                                                    <table>
                                                        <tr>
                                                            <td>ID</td>
                                                            <td>
                                                                <?php
                                                                    echo "<input type='text' name='id' value='".$result['id']."' />"
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name</td>
                                                            <td>
                                                                <?php
                                                                    echo "<input type='text' name='name' value='".$result['name']."' />"
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Father's Name</td>
                                                            <td>
                                                                <?php
                                                                    echo "<input type='text' name='fname' value='".$result['fathername']."' />"
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mother's Name</td>
                                                            <td>
                                                                <?php
                                                                    echo "<input type='text' name='mname' value='".$result['mothername']."' />"
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date of Birth</td>
                                                            <td>
                                                                <?php
                                                                    echo "<input type='text' name='dob' value='".$result['dob']."' />"
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Designation</td>
                                                            <td>
                                                                <?php
                                                                    echo "<input type='text' name='designation' value='".$result['designation']."' />"
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Branch</td>
                                                            <td>
                                                                <?php
                                                                    echo "<input type='number' name='branch' value='".$result['branch']."' />"
                                                                ?>                                    
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Salary</td>
                                                            <td>
                                                                <?php
                                                                    echo "<input type='number' name='salary' value='".$result['salary']."' />"
                                                                ?> 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><hr /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="submit" name="" value="Save" />
                                                            </td>
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
                </td>
            </tr>
        </table>
    </body>
</html>