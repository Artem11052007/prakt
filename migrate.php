<?php
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASSWORD') ?: '';
$db   = getenv('DB_NAME') ?: 'prakt';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Помилка: " . $conn->connect_error);
}

$conn->query("ALTER TABLE reviews ADD COLUMN tattoo_photo_data LONGBLOB");
$conn->query("ALTER TABLE reviews ADD COLUMN tattoo_photo_type VARCHAR(50)");

echo "Готово!";
?>