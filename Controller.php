<?php
class Controller {
    private $model;

    public function __construct($model) {
        if (session_status() === PHP_SESSION_NONE) {
            ini_set('session.cookie_lifetime', 0);
            session_start();
        }
        $this->model = $model;
    }

    public function route() {
        $action = $_GET['action'] ?? 'view1';

        if (!isset($_SESSION['user_name']) && $action !== 'login') {
            $this->login();
            return;
        }

        match($action) {
            'login'   => $this->login(),
            'logout'  => $this->logout(),
            'view1'   => $this->render('view1.php'),
            'coll'    => $this->render('coll.php'),
            'galeri'  => $this->render('galeri.php'),
            'news'    => $this->render('news.php'),
            'prise'   => $this->render('prise.php'),
            'reviews' => $this->reviews(),
            'booking' => $this->booking(),
            default   => $this->pageNotFound()
        };
    }
    private function login() {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action   = $_POST['action']   ?? '';
            $login    = trim($_POST['login']    ?? '');
            $password = trim($_POST['password'] ?? '');

            if ($action === 'login') {
                $user = $this->model->login($login, $password);
                if ($user) {
                    $_SESSION['user_name']     = $user['login'];
                    $_SESSION['isAdmin']       = (int)$user['isAdmin'];
                    $_SESSION['last_activity'] = time();
                    header("Location: index.php?action=view1");
                    exit();
                }
                $error = 'Невірний логін або пароль';

            } elseif ($action === 'register') {
                $result = $this->model->register($login, $password);
                $error  = $result === false ? 'Користувач вже існує' : 'Реєстрація успішна! Тепер увійдіть.';
            }
        }
        $this->render('login.php', ['error' => $error]);
    }
    private function reviews() {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $photoPath = '';

            if (!empty($_FILES['tattoo_photo']['tmp_name'])) {
                $allowed = ['image/jpeg', 'image/png', 'image/gif'];
                $maxSize = 5 * 1024 * 1024;
                if (!in_array($_FILES['tattoo_photo']['type'], $allowed)) {
                    $error = 'Невірний формат файлу';
                } elseif ($_FILES['tattoo_photo']['size'] > $maxSize) {
                    $error = 'Файл занадто великий (макс 5МБ)';
                } else {
                    $uploadDir = 'public/uploads/';
                    $photoPath = $uploadDir . uniqid() . '_' . basename($_FILES['tattoo_photo']['name']);
                    move_uploaded_file($_FILES['tattoo_photo']['tmp_name'], $photoPath);
                }
            }
            if (!$error) {
                $result = $this->model->addReview([
                    'customer_name'  => $_POST['customer_name']  ?? '',
                    'customer_email' => $_POST['customer_email'] ?? '',
                    'rating'         => $_POST['rating']         ?? 0,
                    'master_select'  => $_POST['master_select']  ?? '',
                    'tattoo_photo'   => $photoPath,
                    'review_text'    => $_POST['review_text']    ?? '',
                ]);

                if ($result) {
                    header("Location: index.php?action=reviews&success=1");
                    exit();
                }
                $error = 'Помилка при збереженні.';
            }
        }
        $reviews = $this->model->getAllReviews();
        $this->render('reviews.php', [
            'error'   => $error,
            'reviews' => $reviews
        ]);
    }
   private function booking() {
    $error = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name  = trim($_POST['customer_name']  ?? '');
        $email = trim($_POST['customer_email'] ?? '');
        $phone = trim($_POST['customer_tel']   ?? '');
        $date  = trim($_POST['customer_date']  ?? '');
        $time  = trim($_POST['customer_time']  ?? '');

        if (!$name || !$email || !$phone || !$date || !$time) {
            $error = 'Заповніть всі обов\'язкові поля';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Невірний email';
        } else {
            $result = $this->model->addBooking($_POST);
            if ($result) {
                $_SESSION['booking_success'] = [
                    'name'    => $name,
                    'email'   => $email,
                    'phone'   => $phone,
                    'date'    => $date,
                    'time'    => $time,
                    'master'  => trim($_POST['master_select'] ?? 'Не обрано'),
                    'comment' => trim($_POST['review_text']   ?? '—'),
                ];
                header("Location: index.php?action=coll&success=1");
                exit();
            }
            $error = 'Помилка при збереженні';
        }
    }
    $this->render('coll.php', ['error' => $error]);
}
    private function logout() {
        session_unset();
        session_destroy();
        header("Location: index.php?action=login");
        exit();
    }
    private function pageNotFound() {
        http_response_code(404);
        $this->render('pageNotFound.php');
    }
    private function render($template, $data = []) {
        extract($data);
        $isAdmin      = (int)($_SESSION['isAdmin'] ?? 0);
        $user_name    = $_SESSION['user_name'] ?? '';
        $content_view = 'templares/' . $template;

        if (!file_exists($content_view)) {
            die("Файл не знайдено: " . $content_view);
        }

        include 'templares/base.php';
    }
}