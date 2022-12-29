<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:login.php');
    }
?>
<?php?>
<html>
    <head>
        <title>Public Home</title>
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
                            <td align="right"> <h4>Welcome, <?php echo $_SESSION['user']['name']?></h4></td>
                            <td align="right">
                                <a href="../controllers/logout.php"><img src="../assets/../assets/image/logout-icon.jpg" width="35" height="35" align="center"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <center>
                        <form>
                            <table>
                                <tr>
                                    <td><br /></td>
                                </tr>
                                <tr>
                                    <td>
                                        Select Branch
                                        <select name="branch">
                                            <option>Branch 01</option>
                                            <option>Branch 02</option>
                                        </select>
                                    </td>
                                    <td></td>
                                    <td>
                                        Class Type
                                        <select name="class">
                                            <option>Economy Class</option>
                                            <option>Business Class</option>
                                            <option>First Class</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" align="center"><input type="submit" value="Check Availability"/></td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="3">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">
                                        <p>One solution for bachelors' life</p>
                                    </th>
                                </tr>
                            </table>
                        </form>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <center>
                        <table>
                            <tr>
                                <th colspan="3">
                                    <h2>Services</h2>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <img src="../assets/image/1.jpg" width="280" height="200"><br>
                                    <p>GYM</p>
                                </th>
                                <th>
                                    <img src="../assets/image/2.png" width="280" height="200"><br>
                                    <p>DINING</p>
                                </th>
                                <th>
                                    <img src="../assets/image/3.jpg" width="280" height="200"><br>
                                    <p>SWIMMING</p>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="3">
                                    <br>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <img src="../assets/image/4.png" width="280" height="200"><br>
                                    <p>24/7 CCTV</p>
                                </th>
                                <th>
                                    <img src="../assets/image/5.jpg" width="280" height="200"><br>
                                    <p>WIFI</p>
                                </th>
                                <th>
                                    <img src="../assets/image/6.jpg" width="280" height="200"><br>
                                    <p>Laundry</p>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="3">
                                    <br>
                                </th>
                            </tr>
                        </table>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <center>
                        <table>
                            <tr>
                                <td colspan="2" align="center">
                                    <h2>Branches</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <fieldset>
                                        <center>
                                            <img src="../assets/image/portrush.jpg" width="310" height="260"/><br /><br />
                                            <h3>Branch #01</h3>

                                            <p>
                                                HOUSE# 28, ROAD#
                                                24, <br />
                                                KURIL BISWAROAD
                                                <br />
                                                DHAKA
                                            </p>
                                        </center>
                                    </fieldset>
                                </td>
                                <td>
                                    <fieldset>
                                        <center>
                                            <img src="../assets/image/front.jpg" width="310" height="260"/><br /><br />
                                            <h3>Branch #01</h3>
                                            <p>
                                                HOUSE# 17/A,
                                                ROAD# 08, ,
                                                <br />
                                                BASUNDHORA
                                                BLOCK-C<br />
                                                DHAKA
                                            </p>
                                        </center>
                                    </fieldset>
                                </td>
                            </tr>
                        </table>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <center>
                        <table>
                            <tr>
                                <td>
                                    <fieldset>
                                        <form method="post" action="contactus.php">
                                            <table>
                                                <tr>
                                                    <td colspan="2"><br /></td>
                                                </tr>
                                                <tr>
                                                    <td align="right">Name:</td>
                                                    <td>
                                                        <input
                                                            type="text"
                                                            name="name"
                                                        />
                                                    </td>
                                                    <td
                                                        rowspan="4"
                                                        align="center"
                                                    >
                                                        <fieldset>
                                                            <h4>
                                                                Phono: 017** ***
                                                                ***<br />
                                                                Email:
                                                                super***@gmail.com<br />
                                                            </h4>
                                                        </fieldset>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        Phone:
                                                    </td>
                                                    <td>
                                                        <input
                                                            type="number"
                                                            name="phone"
                                                        />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        Email:
                                                    </td>
                                                    <td>
                                                        <input
                                                            type="email"
                                                            name="email"
                                                        />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">Text:</td>
                                                    <td>
                                                        <input
                                                            type="textarea"
                                                            name="txtarea"
                                                        />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td align="right">
                                                        <input
                                                            type="submit"
                                                            name="btn"
                                                            value="Submit"
                                                        />
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </fieldset>
                                </td>
                            </tr>
                        </table>
                    </center>
                </td>
            </tr>
            <tr>
                <td align="center"><h4>copyright @ smart_hostel</h4></td>
            </tr>
        </table>
    </body>
</html>