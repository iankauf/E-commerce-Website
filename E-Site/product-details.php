<?php include "db_connect.php";
$id=$_GET['id'];
$p=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id"));
?>

<h2><?= $p['name']; ?></h2>
<img src="<?= $p['image_url'];?>" width="300">
<p><b>Price:</b> $<?= $p['price'];?></p>
<p><b>Description:</b> <?= $p['description'];?></p>
<p><b>Specs:</b> <?= $p['specs'];?></p>

<form method="POST" action="cart.php">
<input type="hidden" name="id" value="<?= $p['id']; ?>">
<button type="submit" name="add">Add to Cart</button>
</form>
<a href="products.php">Back to Products</a>