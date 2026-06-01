const htmlElement = document.getElementsByTagName('html')[0].getAttribute('lang');

if (htmlElement == 'ar') {
    document.getElementsByTagName('body')[0].classList.toggle('ArabicActived');
    document.getElementsByTagName('h1')[0].classList.toggle('ArabicActived');
}

document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-slide-dot');

    if (!slides.length || !dots.length) {
        return;
    }

    let currentSlide = 0;
    const slideInterval = 7000;
    let autoplay = setInterval(() => {
        currentSlide = (currentSlide + 1) % slides.length;
        updateHeroSlide(currentSlide);
    }, slideInterval);

    function updateHeroSlide(index) {
        slides.forEach((slide, slideIndex) => {
            slide.classList.toggle('active', slideIndex === index);
        });
        dots.forEach((dot, dotIndex) => {
            dot.classList.toggle('active', dotIndex === index);
        });
    }

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            const index = Number(dot.dataset.slide);
            if (Number.isNaN(index)) {
                return;
            }
            currentSlide = index;
            updateHeroSlide(currentSlide);
            clearInterval(autoplay);
            autoplay = setInterval(() => {
                currentSlide = (currentSlide + 1) % slides.length;
                updateHeroSlide(currentSlide);
            }, slideInterval);
        });
    });

    const preferencesMenu = document.querySelector('.preferences-menu');
    const preferencesToggle = document.getElementById('preferencesDropdown');
    const darkModeCheckbox = document.getElementById('prefDarkMode');
    const darkModeStorageKey = 'kechliving-dark-mode';

    function applyDarkMode(enabled) {
        document.body.classList.toggle('dark-mode', enabled);
        if (darkModeCheckbox) {
            darkModeCheckbox.checked = enabled;
        }
    }

    function loadDarkMode() {
        const saved = localStorage.getItem(darkModeStorageKey);
        applyDarkMode(saved === 'true');
    }

    const preferenceTabs = document.querySelectorAll('.pref-icon');
    const preferencePanels = document.querySelectorAll('.preferences-panel-content');

    function activatePanel(panelName) {
        preferenceTabs.forEach(tab => {
            tab.classList.toggle('active', tab.dataset.panel === panelName);
        });
        preferencePanels.forEach(panel => {
            panel.classList.toggle('active', panel.dataset.panel === panelName);
        });
    }

    if (preferencesMenu) {
        preferencesMenu.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    }

    preferenceTabs.forEach(tab => {
        tab.addEventListener('click', (event) => {
            event.preventDefault();
            const panelName = tab.dataset.panel;
            if (panelName) {
                activatePanel(panelName);
            }
        });
    });

    document.addEventListener('click', (event) => {
        const openMenu = document.querySelector('.dropdown-menu.preferences-menu.show');
        if (!openMenu) {
            return;
        }
        if (openMenu.contains(event.target) || (preferencesToggle && preferencesToggle.contains(event.target))) {
            return;
        }
        openMenu.classList.remove('show');
        if (preferencesToggle) {
            preferencesToggle.setAttribute('aria-expanded', 'false');
        }
    });

    if (darkModeCheckbox) {
        darkModeCheckbox.addEventListener('change', () => {
            applyDarkMode(darkModeCheckbox.checked);
            localStorage.setItem(darkModeStorageKey, darkModeCheckbox.checked.toString());
        });
    }

    loadDarkMode();
    
    // Currency selection handling
    const currencyButtons = document.querySelectorAll('.currency-option');
    const currencyStorageKey = 'kechliving-currency';

    function loadCurrency() {
        const saved = localStorage.getItem(currencyStorageKey) || 'USD';
        currencyButtons.forEach(b => b.classList.toggle('active', b.dataset.currency === saved));
    }

    currencyButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const cur = btn.dataset.currency;
            if (!cur) return;
            localStorage.setItem(currencyStorageKey, cur);
            currencyButtons.forEach(b => b.classList.toggle('active', b === btn));
        });
    });

    loadCurrency();
});