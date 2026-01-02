<form method="POST">
<input name="name" placeholder="Product Name">
<input name="price" placeholder="Price">
<textarea name="description"></textarea>
<textarea name="specs"></textarea>
<input name="image_url" placeholder="Image URL">

<select name="category_id">
<?php include "db_connect.php"; $c=mysqli_query($conn,"SELECT * FROM categories");
while($x=mysqli_fetch_assoc($c)) echo"<option value='{$x['id']}'>{$x['name']}</option>";?>
</select>

<button name="save">Save</button>
</form>

<?php
if(isset($_POST['save'])){
mysqli_query($conn,"INSERT INTO products(category_id,name,price,description,specs,image_url)
VALUES('{$_POST['category_id']}','{$_POST['name']}','{$_POST['price']}',
'{$_POST['description']}','{$_POST['specs']}','{$_POST['image_url']}')");

echo "Product Added!";
}
?>
