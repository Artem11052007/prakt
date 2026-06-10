document.addEventListener('DOMContentLoaded', function () {

    // ── Зірки рейтингу ──
    const stars = document.querySelectorAll('#rating-stars .star');
    const ratingValue = document.getElementById('rating-value');
    const ratingResult = document.getElementById('result');
    let currentRating = 0;

    if (stars.length) {
        const updateStars = (rating) => {
            stars.forEach((s, i) => {
                s.classList.toggle('text-amber-500', i < rating);
                s.classList.toggle('text-zinc-700', i >= rating);
            });
        };

        stars.forEach((star, index) => {
            star.addEventListener('mouseover', () => updateStars(index + 1));
            star.addEventListener('mouseout',  () => updateStars(currentRating));
            star.addEventListener('click', () => {
                currentRating = index + 1;
                ratingValue.value = currentRating;
                ratingResult.textContent = `${currentRating}/5`;
                updateStars(currentRating);
            });
        });
    }

    // ── Завантаження файлу ──
    const uploadFile = document.getElementById('tattoo-file');
    const uploadBtn  = document.getElementById('tattoo-btn');
    const uploadText = document.getElementById('tattoo-text');

    if (uploadBtn) {
        uploadBtn.addEventListener('click', () => uploadFile.click());
        uploadFile.addEventListener('change', function () {
            uploadText.textContent = this.files[0] ? this.files[0].name : 'Файл не завантажено';
        });
    }

    // ── Фільтрація та сортування відгуків ──
    const container    = document.getElementById('reviews-container');
    const sortSelect   = document.getElementById('sort-select');
    const masterFilter = document.getElementById('master-filter');

    if (container && sortSelect && masterFilter) {
        const applyFiltersAndSort = () => {
            const cards = Array.from(container.querySelectorAll('.review-card'));
            const master = masterFilter.value;
            const sort   = sortSelect.value;

            cards.forEach(card => {
                const show = master === 'all' || card.dataset.master === master;
                card.style.display = show ? '' : 'none';
            });

            const visible = cards.filter(c => c.style.display !== 'none');
            visible.sort((a, b) => {
                if (sort === 'newest')  return new Date(b.dataset.date) - new Date(a.dataset.date);
                if (sort === 'oldest')  return new Date(a.dataset.date) - new Date(b.dataset.date);
                if (sort === 'highest') return b.dataset.rating - a.dataset.rating;
                if (sort === 'lowest')  return a.dataset.rating - b.dataset.rating;
            });

            visible.forEach(card => container.appendChild(card));
        };

        sortSelect.addEventListener('change', applyFiltersAndSort);
        masterFilter.addEventListener('change', applyFiltersAndSort);
        applyFiltersAndSort();

        // ── Показати більше відгуків ──
        const VISIBLE_COUNT = 4;
        const allCards   = Array.from(container.querySelectorAll('.review-card'));
        const loadMoreBtn = document.getElementById('load-more-btn');

        allCards.forEach((card, i) => {
            if (i >= VISIBLE_COUNT) card.classList.add('hidden');
        });

        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', () => {
                const hidden = container.querySelectorAll('.review-card.hidden');
                if (hidden.length > 0) {
                    hidden.forEach(c => c.classList.remove('hidden'));
                    loadMoreBtn.textContent = 'Сховати відгуки';
                } else {
                    allCards.forEach((card, i) => {
                        if (i >= VISIBLE_COUNT) card.classList.add('hidden');
                    });
                    loadMoreBtn.textContent = 'Показати ще відгуки';
                }
            });
        }
    }

});