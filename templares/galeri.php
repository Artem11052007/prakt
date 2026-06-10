<div id="hero-reviews1" class="relative text-white py-36 border-b border-zinc-800 overflow-hidden">
  <div class="absolute inset-0 bg-[url('https://justdotattoo.ru/upload/medialibrary/c51/42coxjumdmhyu7bmpky9kjhyim6mqs6t.jpg')] bg-cover bg-center"></div>
  <div class="absolute inset-0 bg-[#0e1318]/80"></div>
  <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-[#0e1318] to-transparent"></div>
  <div class="container mx-auto px-4 text-center relative z-10">
    <h2 style="font-family:'Cinzel',serif;" class="text-3xl md:text-4xl font-bold text-white mb-4 tracking-widest uppercase">Наше Портфоліо</h2>
    <p class="text-[#a8b8c8] text-sm leading-relaxed mb-8">Пориньте у світ мистецтва татуювання. Відкрийте для себе різноманіття стилів та майстерність наших художників.</p>
    <a href="index.php?action=coll"
       class="inline-block px-8 py-3 text-[0.75rem] font-bold tracking-[0.2em] uppercase no-underline
              text-[#0a0f15] bg-gradient-to-r from-[#c9a84c] via-[#e8c96a] to-[#c9a84c]
              rounded-lg shadow-[0_4px_20px_rgba(201,168,76,0.3)]
              transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[0_8px_30px_rgba(201,168,76,0.45)]"
       style="font-family:'Cinzel',serif;">
      Записатись на сеанс
    </a>
  </div>
</div>
<div class="bg-[#0a0f15] min-h-screen px-4 py-10">
  <p style="font-family:'Cinzel',serif;" class="text-center text-[#c9a84c] text-xs tracking-[0.25em] uppercase mb-8">Переглядайте наші роботи за стилями</p>
  <div class="flex flex-wrap justify-center gap-2 mb-10 max-w-3xl mx-auto">
    <button onclick="showTab('all', this)"
      class="tab-btn px-5 py-2 text-[0.65rem] tracking-[0.15em] uppercase font-semibold rounded-full border border-[#c9a84c] bg-[#c9a84c] text-[#0a0f15] transition-all duration-200 cursor-pointer"
      style="font-family:'Cinzel',serif;">Всі роботи</button>
    <button onclick="showTab('tribal', this)"
      class="tab-btn px-5 py-2 text-[0.65rem] tracking-[0.15em] uppercase font-semibold rounded-full border border-[#2e3d50] bg-transparent text-[#7a8fa0] hover:border-[#c9a84c] hover:text-[#c9a84c] transition-all duration-200 cursor-pointer"
      style="font-family:'Cinzel',serif;">Трайбл</button>
    <button onclick="showTab('japan', this)"
      class="tab-btn px-5 py-2 text-[0.65rem] tracking-[0.15em] uppercase font-semibold rounded-full border border-[#2e3d50] bg-transparent text-[#7a8fa0] hover:border-[#c9a84c] hover:text-[#c9a84c] transition-all duration-200 cursor-pointer"
      style="font-family:'Cinzel',serif;">Японія</button>
    <button onclick="showTab('polinesia', this)"
      class="tab-btn px-5 py-2 text-[0.65rem] tracking-[0.15em] uppercase font-semibold rounded-full border border-[#2e3d50] bg-transparent text-[#7a8fa0] hover:border-[#c9a84c] hover:text-[#c9a84c] transition-all duration-200 cursor-pointer"
      style="font-family:'Cinzel',serif;">Полінезія</button>
    <button onclick="showTab('gothic', this)"
      class="tab-btn px-5 py-2 text-[0.65rem] tracking-[0.15em] uppercase font-semibold rounded-full border border-[#2e3d50] bg-transparent text-[#7a8fa0] hover:border-[#c9a84c] hover:text-[#c9a84c] transition-all duration-200 cursor-pointer"
      style="font-family:'Cinzel',serif;">Готика</button>
    <button onclick="showTab('minimal', this)"
      class="tab-btn px-5 py-2 text-[0.65rem] tracking-[0.15em] uppercase font-semibold rounded-full border border-[#2e3d50] bg-transparent text-[#7a8fa0] hover:border-[#c9a84c] hover:text-[#c9a84c] transition-all duration-200 cursor-pointer"
      style="font-family:'Cinzel',serif;">Мінімалізм</button>
  </div>
  <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 max-w-6xl mx-auto">
    <div data-cat="tribal" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/12.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Трайбл</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер Б</span></p>
      </div>
    </div>
    <div data-cat="japan" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/16.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Японія</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер В</span></p>
      </div>
    </div>
    <div data-cat="gothic" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/22.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Готика</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер Б</span></p>
      </div>
    </div>
    <div data-cat="tribal" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/14.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Трайбл</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер В</span></p>
      </div>
    </div>
    <div data-cat="gothic" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/20.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Готика</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер А</span></p>
      </div>
    </div>
    <div data-cat="gothic" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/21.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Готика</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер В</span></p>
      </div>
    </div>
    <div data-cat="polinesia" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/18.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Полінезія</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер В</span></p>
      </div>
    </div>
    <div data-cat="tribal" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/13.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Трайбл</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер А</span></p>
      </div>
    </div>
    <div data-cat="minimal" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/23.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Мінімалізм</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер А</span></p>
      </div>
    </div>
    <div data-cat="polinesia" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/17.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Полінезія</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер А</span></p>
      </div>
    </div>
    <div data-cat="tribal" class="gallery-card group relative rounded-xl overflow-hidden bg-[#111922] ring-1 ring-[#2e3d50] hover:ring-[#c9a84c]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(201,168,76,0.12)]">
      <img src="/prakt/public/img/15.jpg" alt="tattoo" class="w-full aspect-square object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="p-4">
        <span style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-[0.6rem] tracking-[0.2em] uppercase font-bold">Ескіз</span>
        <p class="text-[#ccd8e4] text-xs mt-1">Стиль: <span class="text-[#a8b8c8]">Трайбл</span></p>
        <p class="text-[#ccd8e4] text-xs">Майстер: <span class="text-[#a8b8c8]">Майстер Б</span></p>
      </div>
    </div>
  </div>
</div>
<script>
function showTab(cat, btn) {
  document.querySelectorAll('.gallery-card').forEach(c => {
    c.style.display = (cat === 'all' || c.dataset.cat === cat) ? '' : 'none';
  });
  document.querySelectorAll('.tab-btn').forEach(b => {
    b.classList.remove('bg-[#c9a84c]','text-[#0a0f15]','border-[#c9a84c]');
    b.classList.add('bg-transparent','text-[#7a8fa0]','border-[#2e3d50]');
  });
  btn.classList.add('bg-[#c9a84c]','text-[#0a0f15]','border-[#c9a84c]');
  btn.classList.remove('bg-transparent','text-[#7a8fa0]','border-[#2e3d50]');
}
</script>