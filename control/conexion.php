<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$db = "control";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
    die("oh no!!". mysqli_connect_error());
}
