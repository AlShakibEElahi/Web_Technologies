<html>
    <head>
        <title>Display</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="post" action="validations/displayvalidator.php">
                        <fieldset>
                            <legend><b>DISPLAY</b></legend>
                            <?php
                                session_start();
                                echo "<table border='1'>";
                                echo "<tr><th>Name</th><th>Profit</th><th colspan='2'></th></tr>";
                                
                                $con = mysqli_connect('localhost', 'root', '', 'product_db');
                                $sql ="select * from products";
                                $result = mysqli_query($con, $sql);
                                $i=1;
                                while($row = mysqli_fetch_assoc($result)){
                                    if($row['display']=="Yes"){
                                        echo "<tr><td>". $row['name']."</td><td>". ((int)$row['sellingprice']-(int)$row['buyingprice'])."<td><input type='submit' name='submit' value='edit-".$row['id']."' /></td><td><input type='submit' name='submit' value='delete-".$row['id']."' /></td></tr>";
                                    }
                                }
                                echo "</tabel>";
                            ?>
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>