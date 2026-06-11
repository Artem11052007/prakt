<?php
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASSWORD') ?: '';
$db   = getenv('DB_NAME') ?: 'prakt';

$conn = new mysqli($host, $user, $pass, $db);

$result = $conn->query("SELECT id, customer_name, tattoo_photo_type, LENGTH(tattoo_photo_data) as photo_size FROM reviews ORDER BY id DESC LIMIT 5");
while ($row = $result->fetch_assoc()) {
    echo "id={$row['id']} name={$row['customer_name']} type={$row['tattoo_photo_type']} size={$row['photo_size']}<br>";
}
?>