<?php
session_start(); include "db_connect.php";
echo "<h2>Your Cart</h2>";

foreach($_SESSION['cart'] as $item){
$p=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$item"));
echo "{$p['name']} - \${$p['price']}<br>";
}
