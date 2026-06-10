<?php
class model {
    private $conn;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $host     = getenv('DB_HOST')     ?: 'localhost';
        $user     = getenv('DB_USER')     ?: 'root';
        $password = getenv('DB_PASSWORD') ?: '';
        $dbname   = getenv('DB_NAME')     ?: 'prakt';

        $this->conn = new mysqli($host, $user, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return true;
    }

    public function login($login, $password) {
        $login    = $this->conn->real_escape_string($login);
        $password = $this->conn->real_escape_string($password);
        $result   = $this->conn->query(
            "SELECT * FROM users WHERE login = '$login' AND password = '$password'"
        );
        return $result ? $result->fetch_assoc() : null;
    }

    public function register($login, $password) {
        $login    = $this->conn->real_escape_string($login);
        $password = $this->conn->real_escape_string($password);
        $result   = $this->conn->query("SELECT id FROM users WHERE login = '$login'");

        if ($result && $result->num_rows > 0) return false;

        return $this->conn->query(
            "INSERT INTO users (login, password, isAdmin) VALUES ('$login', '$password', 0)"
        );
    }

    public function addReview($data) {
        $name   = $this->conn->real_escape_string($data['customer_name']);
        $email  = $this->conn->real_escape_string($data['customer_email'] ?? '');
        $rating = (int)$data['rating'];
        $master = $this->conn->real_escape_string($data['master_select'] ?? '');
        $photo  = $this->conn->real_escape_string($data['tattoo_photo'] ?? '');
        $text   = $this->conn->real_escape_string($data['review_text']);

        return $this->conn->query(
            "INSERT INTO reviews (customer_name, customer_email, rating, master_select, tattoo_photo, review_text)
             VALUES ('$name', '$email', $rating, '$master', '$photo', '$text')"
        );
    }

    public function getAllReviews() {
        $result = $this->conn->query("SELECT * FROM reviews ORDER BY created_at DESC");
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }
    public function addBooking($data) {
    $name    = $this->conn->real_escape_string($data['customer_name']);
    $email   = $this->conn->real_escape_string($data['customer_email']);
    $phone   = $this->conn->real_escape_string($data['customer_tel']);
    $date    = $this->conn->real_escape_string($data['customer_date']);
    $time    = $this->conn->real_escape_string($data['customer_time']);
    $master  = $this->conn->real_escape_string($data['master_select'] ?? '');
    $comment = $this->conn->real_escape_string($data['review_text'] ?? '');

    return $this->conn->query(
        "INSERT INTO bookings (name, email, phone, date, time, master, comment)
         VALUES ('$name', '$email', '$phone', '$date', '$time', '$master', '$comment')"
    );
}

public function getAllBookings() {
    $result = $this->conn->query(
        "SELECT * FROM bookings ORDER BY created_at DESC"
    );
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
}
}
?>