<!doctype html>
<html lang="uk">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://img.icons8.com/ios/100/tattoo-machine.png">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/public/bootstrap-5.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/public/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
  tailwind.config = { corePlugins: { preflight: false } }
</script>
  <title>VipTattoo</title>
</head>
<body class="bg-[#0e1318]">


<?php if (!empty($_SESSION['user_name'])): ?>
<?php $action = $_GET['action'] ?? 'view1'; ?>

<nav class="navbar navbar-dark sticky top-0 z-50 border-bottom border-secondary" style="background-color:#0e1318;">
  <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3">

    <a class="navbar-brand py-0 m-0" href="index.php?action=view1">
      <img src="/public/img/icon.png" alt="icon" height="50" class="opacity-75">
    </a>

    <ul class="nav flex-row flex-wrap justify-content-center gap-1 list-unstyled m-0">
      <li class="nav-item">
        <a class="nav-link px-2 px-sm-3 py-2 small <?= $action === 'view1' ? 'text-warning border-bottom border-warning' : 'text-secondary' ?>" href="index.php?action=view1">Головна</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-2 px-sm-3 py-2 small <?= $action === 'galeri' ? 'text-warning border-bottom border-warning' : 'text-secondary' ?>" href="index.php?action=galeri">Галерея</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-2 px-sm-3 py-2 small <?= $action === 'news' ? 'text-warning border-bottom border-warning' : 'text-secondary' ?>" href="index.php?action=news">Новини</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-2 px-sm-3 py-2 small <?= $action === 'prise' ? 'text-warning border-bottom border-warning' : 'text-secondary' ?>" href="index.php?action=prise">Ціни</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-2 px-sm-3 py-2 small <?= $action === 'reviews' ? 'text-warning border-bottom border-warning' : 'text-secondary' ?>" href="index.php?action=reviews">Відгуки</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-2 px-sm-3 py-2 small <?= $action === 'coll' ? 'text-warning border-bottom border-warning' : 'text-secondary' ?>" href="index.php?action=coll">Записатись</a>
      </li>
    </ul>

    <div class="d-flex align-items-center gap-3">
      <span class="small text-secondary"><?= htmlspecialchars($_SESSION['user_name']) ?></span>
      <a href="index.php?action=logout" class="btn btn-sm btn-outline-danger px-3 py-1">Вийти</a>
    </div>
  </div>
</nav>
<?php endif; ?>


<?php include $content_view; ?>

<?php if (!empty($_SESSION['user_name'])): ?>
  <div class="w-100" style="height: 1px; background-color: #ffffff;"></div>
<div class="flex flex-col md:flex-row justify-between bg-[#0e1318] border-t border-[#2e3d50] px-4 py-6 pb-20 gap-6 items-center">
  <div class="flex justify-center w-full md:w-auto ml-6">
    <img src="public/img/icon.png" alt="icon" class="max-h-16 opacity-85">
  </div>
  <div class="flex flex-wrap justify-center gap-3 w-full md:w-auto">
    <div class="dropdown">
      <button class="text-xs text-[#a8b8c8] border border-[#2e3d50] bg-[#1b2736] hover:border-[#c9a84c] hover:text-[#c9a84c] transition-all px-4 py-2 rounded dropdown-toggle"
              type="button" data-bs-toggle="dropdown" aria-expanded="false">Основне</button>
      <ul class="dropdown-menu bg-[#1b2736] border border-[#2e3d50]">
        <li><a class="dropdown-item text-[#a8b8c8] hover:text-[#c9a84c] hover:bg-[#243040] text-xs" href="index.php?action=view1">Головна</a></li>
        <li><a class="dropdown-item text-[#a8b8c8] hover:text-[#c9a84c] hover:bg-[#243040] text-xs" href="index.php?action=galeri">Ескізи</a></li>
        <li><a class="dropdown-item text-[#a8b8c8] hover:text-[#c9a84c] hover:bg-[#243040] text-xs" href="index.php?action=reviews">Відгуки</a></li>
      </ul>
    </div>
    <div class="dropdown">
      <button class="text-xs text-[#a8b8c8] border border-[#2e3d50] bg-[#1b2736] hover:border-[#c9a84c] hover:text-[#c9a84c] transition-all px-4 py-2 rounded dropdown-toggle"
              type="button" data-bs-toggle="dropdown" aria-expanded="false">Вартість</button>
      <ul class="dropdown-menu bg-[#1b2736] border border-[#2e3d50]">
        <li><a class="dropdown-item text-[#a8b8c8] hover:text-[#c9a84c] hover:bg-[#243040] text-xs" href="index.php?action=prise">Ціни</a></li>
      </ul>
    </div>
    <div class="dropdown">
      <button class="text-xs text-[#a8b8c8] border border-[#2e3d50] bg-[#1b2736] hover:border-[#c9a84c] hover:text-[#c9a84c] transition-all px-4 py-2 rounded dropdown-toggle"
              type="button" data-bs-toggle="dropdown" aria-expanded="false">Сеанс</button>
      <ul class="dropdown-menu bg-[#1b2736] border border-[#2e3d50]">
        <li><a class="dropdown-item text-[#a8b8c8] hover:text-[#c9a84c] hover:bg-[#243040] text-xs" href="index.php?action=coll">Записатись</a></li>
      </ul>
    </div>
    <div class="dropdown">
      <button class="text-xs text-[#a8b8c8] border border-[#2e3d50] bg-[#1b2736] hover:border-[#c9a84c] hover:text-[#c9a84c] transition-all px-4 py-2 rounded dropdown-toggle"
              type="button" data-bs-toggle="dropdown" aria-expanded="false">Події</button>
      <ul class="dropdown-menu bg-[#1b2736] border border-[#2e3d50]">
        <li><a class="dropdown-item text-[#a8b8c8] hover:text-[#c9a84c] hover:bg-[#243040] text-xs" href="index.php?action=news">Новини</a></li>
      </ul>
    </div>
  </div>
  <div class="flex flex-row md:flex-col items-center gap-3 mr-6">
    <a href="https://t.me/hhartemm" target="_blank" class="opacity-75 hover:opacity-100 transition-opacity">
      <img src="https://img.icons8.com/ios/50/telegram.png" alt="telegram" width="26" class="invert">
    </a>
    <a href="https://www.instagram.com/hhartev2/" target="_blank" class="opacity-75 hover:opacity-100 transition-opacity">
      <img src="https://img.icons8.com/ios/50/instagram-new--v1.png" alt="Instagram" width="25" height="25" class="invert">
    </a>
  </div>
</div>
<div class="w-100" style="height: 1px; background-color: #ffffff;"></div>
<div class="text-center bg-[#0e1318] border-t border-[#2e3d50] py-6 px-4">
  <div class="text-[#6a7f92] text-xs mb-4">Сайт розроблений Art Murzak Group</div>
  <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-6 text-xs text-[#6a7f92]">
    <div class="px-3 sm:px-0">Зв'яжіться з нами<br>
      <a href="mailto:artemmurzak8@gmail.com" class="text-[#a8b8c8] hover:text-[#c9a84c] transition-colors no-underline">artemmurzak8@gmail.com</a>
    </div>
    <div class="px-3 sm:px-0">Скарги та пропозиції<br>
      <a href="mailto:artemmurzhak@gmail.com" class="text-[#a8b8c8] hover:text-[#c9a84c] transition-colors no-underline">artemmurzhak@gmail.com</a>
    </div>
    <div class="px-3 sm:px-0">Запис та консультація по Україні безкоштовно:<br>
      <a href="tel:+380992421738" class="text-[#a8b8c8] hover:text-[#c9a84c] transition-colors no-underline">+380992421738</a>
    </div>
  </div>
</div>
<?php if (!empty($_SESSION['booking_success'])): ?>
  <a href="index.php?action=coll&success=1"
     class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#c9a84c] hover:bg-[#d4b86a] text-black rounded-full shadow-lg shadow-black/40 flex items-center justify-center transition-transform hover:scale-110"
     title="Мій запис">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
    </svg>
  </a>
<?php endif; ?>
<?php endif; ?>
<script src="/public/bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js"></script>
<script src="/public/javaskript/js.js"></script>
</body>
</html>