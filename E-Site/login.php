<?php
include "db_connect.php";
session_start();

if(isset($_POST['login'])){
    $u=$_POST['username'];
    $p=md5($_POST['password']);

    $q=mysqli_query($conn,"SELECT * FROM users WHERE username='$u' AND password='$p'");
    
    if(mysqli_num_rows($q)==1){
        $_SESSION['admin']=$u;
        header("location: admin_dashboard.php");
    }else{ echo "Invalid login!"; }
}
?>

<form method="POST">
<input name="username" placeholder="Username">
<input name="password" type="password" placeholder="Password">
<button name="login">Login</button>
</form>
