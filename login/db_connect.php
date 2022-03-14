<?php
/* Database connection start */
$servername = "localhost";
$username = "jsmtcom_jsm33t";
$password = "Jsm33t@boi";
$dbname = "jsmtcom_test";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>