<?php
$booking = null;
if (isset($_GET['success']) && !empty($_SESSION['booking_success'])) {
    $booking = $_SESSION['booking_success'];
}
?>

<div id="coll-fon" class="bg-[#0e1318] relative mt-4 pb-16 text-center border-b border-zinc-800 overflow-hidden">
<div class="container mx-auto max-w-6xl flex flex-col lg:flex-row gap-10 items-stretch">

    <div id="leave-review-form" class="flex-1 text-white">
      <h3 class="text-3xl font-black mb-8">Записатись на <span class="text-[#c9a84c]">сеанс</span></h3>
      <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-8">
        <form action="index.php?action=booking" method="POST" class="space-y-5">

          <div>
            <label class="block text-sm font-medium mb-1 text-zinc-300">Ваше ім'я:</label>
            <input type="text" id="customer-name" name="customer_name" placeholder="Наприклад, Юлія С."
              pattern="^[a-zA-Zа-яА-ЯёЁіІїЇєЄ\s-]{2,50}$"
              title="Ім'я повинно містити лише літери, пробіли та дефіси (від 2 до 50 символів)."
              class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white placeholder-zinc-600 focus:outline-none focus:border-[#c9a84c]/50 transition">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1 text-zinc-300">Ваш Email:</label>
            <input type="email" id="customer-email" name="customer_email" placeholder="email@example.com"
              title="Будь ласка, введіть дійсну адресу електронної пошти."
              class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white placeholder-zinc-600 focus:outline-none focus:border-[#c9a84c]/50 transition">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1 text-zinc-300">Номер телефону:</label>
            <input type="tel" id="customer-tel" name="customer_tel" placeholder="+380XXXXXXXXX"
              title="Будь ласка, введіть дійсний номер телефону."
              class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white placeholder-zinc-600 focus:outline-none focus:border-[#c9a84c]/50 transition">
          </div>

          <div class="flex gap-4">
            <div class="flex-1">
              <label class="block text-sm font-medium mb-1 text-zinc-300">Бажана дата:</label>
              <input type="date" id="customer-date" name="customer_date"
                title="Будь ласка, введіть бажану дату."
                class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-[#c9a84c]/50 transition">
            </div>
            <div class="flex-1">
              <label class="block text-sm font-medium mb-1 text-zinc-300">Бажаний час:</label>
            <input type="time" id="customer-time" name="customer_time"
            title="Будь ласка, введіть бажаний час."
            class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-[#c9a84c] transition"
            style="color-scheme: dark; background-color: #27272a;">
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium mb-1 text-zinc-300">Майстер:</label>
            <select id="master-select" name="master_select"
              class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-[#c9a84c]/50 transition">
              <option value="">Не обрано</option>
              <option value="Мастер А">Майстер А</option>
              <option value="Мастер Б">Майстер Б</option>
              <option value="Мастер В">Майстер В</option>
            </select>
          </div>

          <div>
            <label class="block text-sm font-medium mb-1 text-zinc-300">Опис тату / Коментарі:</label>
            <textarea id="review-text" name="review_text" rows="5"
              placeholder="Опишіть вашу ідею, розмір та місце розташування."
              class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white placeholder-zinc-600 focus:outline-none focus:border-[#c9a84c]/50 transition resize-none"></textarea>
          </div>

          <button type="submit"
            class="w-full bg-[#c9a84c] hover:bg-[#d4b86a] text-black font-black py-3.5 rounded-lg transition tracking-wide text-sm uppercase">
            Записатись
          </button>

        </form>
      </div>
    </div>
<div class="flex-1 text-white flex flex-col">
  <h3 class="text-3xl font-black mb-8">Виберіть тату <span class="text-[#c9a84c]">салон</span></h3>

  <div class="bg-zinc-900 border border-zinc-800 rounded-2xl overflow-hidden flex-1 min-h-[400px]">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d43581.95347738726!2d31.996994016584903!3d46.9445529600934!3m2!1i1024!2i768!4f13.1!2m1!1z0YLQsNGC0YMg0YHQsNC70L7QvdGLINC90LiQutC-0LvQsNC10LI!5e0!3m2!1sru!2sua!4v1750254452718!5m2!1sru!2sua"
      width="100%" height="100%" style="border:0;display:block;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>
  </div>
</div>
<?php if ($booking): ?>
<div class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm">
  <div class="bg-zinc-900 border border-zinc-700 rounded-2xl p-8 max-w-md w-full mx-4 shadow-2xl">
    <div class="flex justify-center mb-4">
      <div class="w-16 h-16 rounded-full bg-[#c9a84c]/20 flex items-center justify-center">
        <svg class="w-8 h-8 text-[#c9a84c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
      </div>
    </div>
    <h2 class="text-xl font-bold text-white text-center mb-1">Запис підтверджено!</h2>
    <p class="text-zinc-400 text-sm text-center mb-6">Деталі вашого запису:</p>
    <div class="space-y-3 bg-zinc-800 rounded-xl p-4 mb-6">
      <div class="flex justify-between text-sm">
        <span class="text-zinc-400">Ім'я:</span>
        <span class="text-white font-medium"><?= htmlspecialchars($booking['name']) ?></span>
      </div>
      <div class="flex justify-between text-sm">
        <span class="text-zinc-400">Email:</span>
        <span class="text-white font-medium"><?= htmlspecialchars($booking['email']) ?></span>
      </div>
      <div class="flex justify-between text-sm">
        <span class="text-zinc-400">Телефон:</span>
        <span class="text-white font-medium"><?= htmlspecialchars($booking['phone']) ?></span>
      </div>
      <div class="w-full h-px bg-zinc-700"></div>
      <div class="flex justify-between text-sm">
        <span class="text-zinc-400">Дата:</span>
        <span class="text-white font-medium">
          <?= date('d.m.Y', strtotime($booking['date'])) ?>
        </span>
      </div>
      <div class="flex justify-between text-sm">
        <span class="text-zinc-400">Час:</span>
        <span class="text-white font-medium"><?= htmlspecialchars($booking['time']) ?></span>
      </div>
      <div class="flex justify-between text-sm">
        <span class="text-zinc-400">Майстер:</span>
        <span class="text-white font-medium"><?= htmlspecialchars($booking['master'] ?: 'Не обрано') ?></span>
      </div>
      <div class="w-full h-px bg-zinc-700"></div>
      <div class="text-sm">
        <span class="text-zinc-400">Коментар:</span>
        <p class="text-white mt-1"><?= htmlspecialchars($booking['comment'] ?: '—') ?></p>
      </div>
    </div>
    <a href="index.php?action=coll"
      class="block w-full bg-[#c9a84c] hover:bg-[#d4b86a] text-black font-black py-3 rounded-lg transition text-sm uppercase tracking-wide text-center">
      Зрозуміло
    </a>
  </div>
</div>
<?php endif; ?>