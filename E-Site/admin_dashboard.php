<?php session_start(); if(!isset($_SESSION['admin'])) die("Unauthorized"); ?>
<h2>Admin Dashboard</h2>
<a href="add_product.php">Add New Product</a><br><br>

<?php
include "db_connect.php";
$q=mysqli_query($conn,"SELECT products.*,categories.name AS cat FROM products JOIN categories ON category_id=categories.id");
while($r=mysqli_fetch_assoc($q)){
echo "{$r['name']} - {$r['cat']} - \${$r['price']}
<a href='edit_product.php?id={$r['id']}'>Edit</a>
<a href='delete_product.php?id={$r['id']}'>Delete</a><br>";
}
?>
