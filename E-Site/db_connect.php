<?php
$host = "localhost";
$username = "root";        // default WAMP username
$password = "";            // default WAMP password is empty
$database = "techgadgets_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
