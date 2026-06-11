<?php
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASSWORD') ?: '';
$db   = getenv('DB_NAME') ?: 'prakt';

$conn = new mysqli($host, $user, $pass, $db);
$conn->query("DELETE FROM reviews WHERE id IN (3, 4)");
echo "Видалено! Рядків: " . $conn->affected_rows;
?>