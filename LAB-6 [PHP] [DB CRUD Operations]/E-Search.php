<?php
    session_start();
?>
<html>
    <head>
        <title>Search Product</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="post" action="validation/searchvalidator.php">
                        <fieldset>
                            <legend><b>SEARCH</b></legend>
                            <table>
                                <tr>
                                    <th colspan='4'>
                                        <input type="text" name="name" value="" />
                                        <input type="submit" name="" value="Search By Name" />
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan='4'>
                                        <hr>
                                    </th>
                                </tr>
                            </table>
                            <table border='1' width='100%'>
                                <?php
                                    if(!isset($_SESSION['name'])){
                                        
                                        echo "<tr><th>Name</th><th>Profit</th><th colspan='2'></th></tr>";
                                        
                                        $con = mysqli_connect('localhost', 'root', '', 'product_db');
                                        $sql ="select * from products";
                                        $result = mysqli_query($con, $sql);
                                        $i=1;
                                        while($row = mysqli_fetch_assoc($result)){
                                            if($row['display']=="Yes"){
                                                echo "<tr><td>". $row['name']."</td><td>". ((int)$row['sellingprice']-(int)$row['buyingprice'])."</td><td><a href='C-Edit.php'>edit</a></td><td><a href='D-Delete.php'>delete</a></td></tr>";
                                            }
                                        }
                                    }
                                ?>
                            </table>
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>