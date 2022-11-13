<?php
    session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <table border='2'>
        <tr><td><a href="A-Addproducts.php">Add Products</a></td></tr>
        <tr><td><a href="B-Display.php">Display</a></td></tr>
        <tr><td><a href="E-Search.php">Search</a></td></tr>
    </table>
</body>
</html>