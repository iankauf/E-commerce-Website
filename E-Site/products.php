<?php include "db_connect.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Our Products</h2>

<form method="GET">
<select name="cat">
<option value="">All Categories</option>
<?php
$cats=mysqli_query($conn,"SELECT * FROM categories");
while($c=mysqli_fetch_assoc($cats)){ echo "<option value='{$c['id']}'>{$c['name']}</option>"; }
?>
</select>
<button type="submit">Filter</button>
</form>

<div class="product-grid">

<?php
$filter= isset($_GET['cat']) ? "WHERE category_id=".$_GET['cat'] : "";
$result=mysqli_query($conn,"SELECT * FROM products $filter");

while($p=mysqli_fetch_assoc($result)){ ?>
    <div class="product-card">
        <img src="<?= $p['image_url']; ?>" height="150">
        <h3><?= $p['name']; ?></h3>
        <p class="price">$<?= $p['price']; ?></p>
        <a href="product-details.php?id=<?= $p['id']; ?>" class="btn">View Details</a>
    </div>
<?php } ?>

</div>
</body>
</html>
