<?php
$servername = "localhost";
$database = "pizza";
$username = "root";
$password = "";

$veritabani = mysqli_connect($servername, $username, $password, $database);

if (!$veritabani) {
    die("Baglanti hatasi: " . mysqli_connect_error());
}
