<?php
$servername = "localhost";
$username = "root";
$password = "12345678";  
$dbname = "bd";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}
?>