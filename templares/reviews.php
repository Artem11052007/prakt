<div>
  <div id="hero-reviews1" class="relative text-white py-36 border-b border-zinc-800 overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1611501275019-9b5cda994e8d?w=1600&q=80')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-[#0e1318]/80"></div>
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-[#0e1318] to-transparent"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
      <h2 class="text-5xl font-black mb-5 tracking-tight">Ваш досвід —<br><span class="text-[#c9a84c]">наше натхнення</span></h2>
      <p class="text-zinc-400 text-base mb-10 max-w-lg mx-auto leading-relaxed">Ми пишаємося кожною роботою та кожним клієнтом. Дізнайтеся, чому нам довіряють.</p>
      <a href="#leave-review-form" style="text-decoration: none;" class="inline-block bg-[#c9a84c] hover:bg-[#d4b86a] text-black font-bold px-8 py-3 rounded-full transition tracking-wide">Залишити відгук</a>
    </div>
  </div>

  <div id="reviews-list" class="bg-zinc-900 py-12">
    <div class="container mx-auto px-4">
      <h3 class="text-white text-2xl font-bold mb-6">Реальні відгуки наших клієнтів</h3>
      <div class="flex flex-wrap gap-6 mb-8 text-white">
        <div class="relative">
          <label class="mr-2 text-zinc-300">Сортувати за:</label>
          <select id="sort-select" class="bg-zinc-700 text-white px-4 py-2 rounded cursor-pointer">
            <option value="newest">Спочатку нові</option>
            <option value="oldest">Спочатку старі</option>
            <option value="highest">Найвища оцінка</option>
            <option value="lowest">Найнижча оцінка</option>
          </select>
        </div>
        <div class="relative">
          <label class="mr-2 text-zinc-300">Майстер:</label>
          <select id="master-filter" class="bg-zinc-700 text-white px-4 py-2 rounded cursor-pointer">
            <option value="all">Всі</option>
            <option value="Майстер А">Майстер А</option>
            <option value="Майстер Б">Майстер Б</option>
            <option value="Майстер В">Майстер В</option>
          </select>
        </div>
      </div>

      <div id="reviews-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2025-06-15" data-rating="5" data-master="Майстер А">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Муржак А.</span>
            <span class="text-[#c9a84c] text-lg">★★★★★</span>
            <span class="text-zinc-400 text-sm">15.06.2025</span>
          </div>
          <img src="./public/img/1.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Шалено задоволена новим татуюванням! Майстер А просто чарівник, втілив мою ідею на 100%.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">40 хвилин тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер А</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2025-06-11" data-rating="5" data-master="Майстер В">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Вова П.</span>
            <span class="text-[#c9a84c] text-lg">★★★★★</span>
            <span class="text-zinc-400 text-sm">11.06.2025</span>
          </div>
          <img src="./public/img/2.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Чудовий досвід! Майстер В дуже уважна до деталей, вийшло саме те, що я хотіла.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">3 дні тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер В</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2025-05-18" data-rating="5" data-master="Майстер А">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Макс Т.</span>
            <span class="text-[#c9a84c] text-lg">★★★★★</span>
            <span class="text-zinc-400 text-sm">18.05.2025</span>
          </div>
          <img src="./public/img/4.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Це вже моє третє татуювання в цьому салоні, і я завжди повертаюся сюди.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">3 тижні тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер А</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2025-05-11" data-rating="4" data-master="Майстер Б">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Дарія М.</span>
            <span class="text-[#c9a84c] text-lg">★★★★<span class="text-zinc-600">★</span></span>
            <span class="text-zinc-400 text-sm">11.05.2025</span>
          </div>
          <img src="./public/img/3.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Робив невеликий ескіз, все дуже швидко та якісно. Трохи було боляче, але результат того вартий.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">1 місяць тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер Б</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2025-03-07" data-rating="3" data-master="Майстер В">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Тетяна Ш.</span>
            <span class="text-[#c9a84c] text-lg">★★★<span class="text-zinc-600">★★</span></span>
            <span class="text-zinc-400 text-sm">07.03.2025</span>
          </div>
          <img src="./public/img/5.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Загалом непогано, але сеанс затягнувся довше, ніж очікувалося.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">4 місяці тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер В</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2025-01-01" data-rating="5" data-master="Майстер Б">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Настя Р.</span>
            <span class="text-[#c9a84c] text-lg">★★★★★</span>
            <span class="text-zinc-400 text-sm">01.01.2025</span>
          </div>
          <img src="./public/img/6.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Моє перше татуювання, і я в захваті! Майстер Б пояснив усі етапи, було комфортно.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">6 місяців тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер Б</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2024-12-16" data-rating="5" data-master="Майстер А">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Рома Л.</span>
            <span class="text-[#c9a84c] text-lg">★★★★★</span>
            <span class="text-zinc-400 text-sm">16.12.2024</span>
          </div>
          <img src="./public/img/7.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Результат вийшов приголомшливий! Майстер робив короткі перерви, було комфортно.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">11 місяців тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер А</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2024-08-15" data-rating="3" data-master="Майстер В">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Рома Ш.</span>
            <span class="text-[#c9a84c] text-lg">★★★<span class="text-zinc-600">★★</span></span>
            <span class="text-zinc-400 text-sm">15.08.2024</span>
          </div>
          <img src="./public/img/8.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Гарний салон, зробили акуратно та красиво. Єдине, не відразу знайшов парковку.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">рік тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер В</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2024-06-18" data-rating="5" data-master="Майстер А">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Юля Г.</span>
            <span class="text-[#c9a84c] text-lg">★★★★★</span>
            <span class="text-zinc-400 text-sm">18.06.2024</span>
          </div>
          <img src="./public/img/9.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Майстер дуже талановитий, створив унікальний дизайн, який перевершив усі очікування.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">2 роки тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер А</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2024-04-30" data-rating="5" data-master="Майстер Б">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Аліна Я.</span>
            <span class="text-[#c9a84c] text-lg">★★★★★</span>
            <span class="text-zinc-400 text-sm">30.04.2024</span>
          </div>
          <img src="./public/img/10.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Майстер проконсультував щодо догляду за татуюванням, дуже вдячна.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">3 роки тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер Б</small>
          </div>
        </div>

        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col" data-date="2024-02-15" data-rating="3" data-master="Майстер В">
          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white">Артем Є.</span>
            <span class="text-[#c9a84c] text-lg">★★★<span class="text-zinc-600">★★</span></span>
            <span class="text-zinc-400 text-sm">15.02.2024</span>
          </div>
          <img src="./public/img/11.jpg" class="w-full h-48 object-cover" alt="tattoo">
          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm">Майстер допоміг підібрати ідеальний варіант. Татуювання виглядає дуже акуратно.</p>
          </div>
          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs">5 років тому</small>
            <small class="text-[#c9a84c]/70 text-xs">Майстер В</small>
          </div>
        </div>

        <?php foreach ($reviews as $review): ?>
        <div class="review-card bg-zinc-800 rounded-xl overflow-hidden flex flex-col"
             data-date="<?= htmlspecialchars($review['created_at']) ?>"
             data-rating="<?= (int)$review['rating'] ?>"
             data-master="<?= htmlspecialchars($review['master_select']) ?>">

          <div class="flex items-center justify-between px-4 py-3 bg-zinc-700">
            <span class="font-semibold text-white"><?= htmlspecialchars($review['customer_name']) ?></span>
            <span class="text-[#c9a84c] text-lg">
              <?= str_repeat('★', (int)$review['rating']) ?>
              <span class="text-zinc-600"><?= str_repeat('★', 5 - (int)$review['rating']) ?></span>
            </span>
            <span class="text-zinc-400 text-sm"><?= date('d.m.Y', strtotime($review['created_at'])) ?></span>
          </div>

          <?php if (!empty($review['tattoo_photo'])): ?>
          <img src="/<?= htmlspecialchars($review['tattoo_photo']) ?>"
               class="w-full h-48 object-cover" alt="tattoo">
          <?php else: ?>
          <div class="w-full h-48 bg-zinc-700 flex items-center justify-center">
            <span class="text-zinc-500 text-sm">Фото відсутнє</span>
          </div>
          <?php endif; ?>

          <div class="p-4 flex-1">
            <p class="text-zinc-300 text-sm"><?= htmlspecialchars($review['review_text']) ?></p>
          </div>

          <div class="px-4 py-2 bg-zinc-700 flex justify-between items-center">
            <small class="text-zinc-400 text-xs"><?= date('d.m.Y H:i', strtotime($review['created_at'])) ?></small>
            <small class="text-[#c9a84c]/70 text-xs"><?= htmlspecialchars($review['master_select']) ?></small>
          </div>
        </div>
        <?php endforeach; ?>

      </div>

      <div class="text-center mt-10">
        <button id="load-more-btn" class="bg-zinc-700 hover:bg-zinc-600 text-white font-semibold px-8 py-3 rounded transition">
          Показати ще відгуки
        </button>
      </div>
    </div>
  </div>

  <div id="leave-review-form" class="bg-[#0e1318] text-white py-20 border-t border-zinc-800">
    <div class="container mx-auto px-4 max-w-2xl">
      <div class="text-center mb-12">
        <h3 class="text-4xl font-black mb-3">Поділіться своїм <span class="text-[#c9a84c]">відгуком</span></h3>
        <p class="text-zinc-500">Ваш відгук допомагає нам стати кращими та іншим клієнтам зробити правильний вибір.</p>
      </div>
      <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-8">
        <form id="review-form" method="POST" class="space-y-6" enctype="multipart/form-data">
          <div>
            <label class="block text-sm font-medium mb-1 text-zinc-300">Ваше ім'я:</label>
            <input type="text" name="customer_name" placeholder="Наприклад, Юлія С."
              class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white placeholder-zinc-600 focus:outline-none focus:border-[#c9a84c]/50 transition">
          </div>
          <div>
            <label class="block text-sm font-medium mb-1 text-zinc-300">Ваш Email <span class="text-zinc-600">(необов'язково)</span>:</label>
            <input type="email" name="customer_email" placeholder="email@example.com"
              class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white placeholder-zinc-600 focus:outline-none focus:border-[#c9a84c]/50 transition">
          </div>
          <div>
            <label class="block text-sm font-medium mb-3 text-zinc-300">Ваша оцінка: <span id="result" class="text-[#c9a84c] font-bold">0/5</span></label>
            <div id="rating-stars" class="flex gap-3">
              <span class="star text-5xl cursor-pointer text-zinc-700 hover:text-[#c9a84c] transition-all select-none leading-none">★</span>
              <span class="star text-5xl cursor-pointer text-zinc-700 hover:text-[#c9a84c] transition-all select-none leading-none">★</span>
              <span class="star text-5xl cursor-pointer text-zinc-700 hover:text-[#c9a84c] transition-all select-none leading-none">★</span>
              <span class="star text-5xl cursor-pointer text-zinc-700 hover:text-[#c9a84c] transition-all select-none leading-none">★</span>
              <span class="star text-5xl cursor-pointer text-zinc-700 hover:text-[#c9a84c] transition-all select-none leading-none">★</span>
            </div>
            <input type="hidden" name="rating" id="rating-value" value="0">
          </div>
          <div>
            <label class="block text-sm font-medium mb-1 text-zinc-300">Майстер <span class="text-zinc-600">(необов'язково)</span>:</label>
            <select name="master_select" class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-[#c9a84c]/50 transition">
              <option value="">Не обрано</option>
              <option value="Майстер А">Майстер А</option>
              <option value="Майстер Б">Майстер Б</option>
              <option value="Майстер В">Майстер В</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2 text-zinc-300">Фото вашого тату <span class="text-zinc-600">(необов'язково)</span>:</label>
            <input type="file" id="tattoo-file" name="tattoo_photo" hidden accept="image/jpeg,image/png,image/gif">
            <div class="flex items-center gap-4">
              <button type="button" id="tattoo-btn"
                class="border border-zinc-600 hover:border-[#c9a84c] hover:text-[#c9a84c] text-zinc-300 px-4 py-2 rounded-lg transition text-sm">
                Завантажити фото
              </button>
              <span id="tattoo-text" class="text-zinc-500 text-sm italic">Файл не завантажено</span>
            </div>
            <p class="text-zinc-600 text-xs mt-1">Максимальний розмір: 5МБ. Формати: JPG, PNG, GIF.</p>
          </div>
          <div>
            <label class="block text-sm font-medium mb-1 text-zinc-300">Ваш відгук:</label>
            <textarea name="review_text" rows="5" placeholder="Опишіть свої враження..."
              class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-white placeholder-zinc-600 focus:outline-none focus:border-[#c9a84c]/50 transition resize-none"></textarea>
          </div>
          <div class="flex items-start gap-3">
            <input type="checkbox" id="privacy-agree" name="privacy_agree" required class="mt-1 accent-[#c9a84c]">
            <label for="privacy-agree" class="text-sm text-zinc-400">
              Я погоджуюся з <a href="/privacy-policy.html" target="_blank" class="text-[#c9a84c] hover:underline">політикою конфіденційності</a> та
              <a href="/terms-of-service.html" target="_blank" class="text-[#c9a84c] hover:underline">умовами використання</a>.
            </label>
          </div>
          <button type="submit" class="w-full bg-[#c9a84c] hover:bg-[#d4b86a] text-black font-black py-3.5 rounded-lg transition tracking-wide text-sm uppercase">
            Надіслати відгук
          </button>
        </form>
      </div>
    </div>
  </div>
</div>