<?php
$host = 'localhost';      
$user = 'root';         
$password = '12345678';        
$database = 'bd';    
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>