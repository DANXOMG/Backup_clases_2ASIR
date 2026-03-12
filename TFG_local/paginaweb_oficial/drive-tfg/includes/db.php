<?php
$dsn = 'mysql:host=localhost;dbname=drive_tfg;charset=utf8mb4';
$user = 'root';
$pass = ''; // por defecto en XAMPP

try {
  $pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
} catch (PDOException $e) {
  die('Error de conexión: ' . $e->getMessage());
}