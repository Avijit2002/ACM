<?php
//echo "hello world";


//connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "acm database";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("sorry we failed to connect" . mysqli_connect_error());
} else {
    //echo "<br>connected";
}
