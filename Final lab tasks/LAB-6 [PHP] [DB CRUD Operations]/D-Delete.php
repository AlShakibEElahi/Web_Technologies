<?php
    session_start();
    if(!isset($_GET['id'])){
        header('location: B-Display.php');
    }
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql ="select * from products where `id`=".$_GET['id'];
    $_SESSION['id']=$_GET['id'];
    unset($_GET['id']);
    $row = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($row)
?>
<html>
    <head>
        <title>Delete Product</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="post" action="validations/deletevalidator.php">
                        <fieldset>
                            <legend><b>DELETE</b></legend>
                            <table>
                                <tr>
                                    <td>Name:</td>
                                    <td>
                                        <?php
                                            echo $result['name'];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Buing Price:</td>
                                    <td>
                                        <?php
                                            echo $result['buyingprice'];
                                        ?>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Selling Price:</td>
                                    <td>
                                        <?php
                                            echo $result['sellingprice'];
                                        ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>Displayable:</td>
                                    <td>
                                        <?php
                                            echo $result['display'];
                                        ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="" value="Delete" />
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