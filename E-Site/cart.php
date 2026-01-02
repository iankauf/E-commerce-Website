<?php
session_start();
$id=$_POST['id'];
$_SESSION['cart'][]=$id;
echo "Item added to cart <a href='view_cart.php'>View Cart</a>";
?>
