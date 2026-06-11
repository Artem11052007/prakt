<?php
$host = $_ENV['MYSQLHOST'] ?? getenv('MYSQLHOST');
$db   = $_ENV['MYSQLDATABASE'] ?? getenv('MYSQLDATABASE');
$user = $_ENV['MYSQLUSER'] ?? getenv('MYSQLUSER');
$pass = $_ENV['MYSQLPASSWORD'] ?? getenv('MYSQLPASSWORD');
$port = $_ENV['MYSQLPORT'] ?? getenv('MYSQLPORT');

$pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);

$pdo->exec("ALTER TABLE reviews ADD COLUMN tattoo_photo_data LONGBLOB");
$pdo->exec("ALTER TABLE reviews ADD COLUMN tattoo_photo_type VARCHAR(50)");

echo "Готово!";