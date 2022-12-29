<html>
    <head>
        <title>Display</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
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
                                    echo "<tr><td>". $row['name']."</td><td>". ((int)$row['sellingprice']-(int)$row['buyingprice'])."<td><a href='C-Edit.php?id={$row['id']}"."'>edit</a></td><td><a href='D-Delete.php?id={$row['id']}"."'>delete</a></td></tr>";
                                }
                            }
                            echo "</tabel>";
                        ?>
                    </fieldset>
                </td>
            </tr>
        </table>
    </body>
</html>