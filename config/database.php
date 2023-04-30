<?php

# konfigurasi database
$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'login_dashboard';

# koneksi database
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
