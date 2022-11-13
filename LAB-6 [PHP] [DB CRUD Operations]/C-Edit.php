<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql ="select * from products where `id`=".$_SESSION['id'];
    $row = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($row)
?>
<html>
    <head>
        <title>Edit Product</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="post" action="validations/editvalidator.php">
                        <fieldset>
                            <legend><b>EDIT PRODUCT</b></legend>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <?php
                                            echo "<input type='text' name='name' value='".$result['name']."' />"
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Buing Price</td>
                                    <td>
                                        <?php
                                            echo "<input type='number' name='buyingp' value='".$result['buyingprice']."' />"
                                        ?>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Selling Price</td>
                                    <td>
                                        <?php
                                            echo "<input type='number' name='sellingp' value='".$result['sellingprice']."' />"
                                        ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="checkbox" name="display" value="Yes">Display</td>
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
    </body>
</html>