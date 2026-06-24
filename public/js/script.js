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
        document.documentElement.classList.toggle('dark-mode', enabled);
        document.body.classList.toggle('dark-mode', enabled);
        if (darkModeCheckbox) {
            darkModeCheckbox.checked = enabled;
        }
    }

    const preferenceTabs = document.querySelectorAll('.pref-icon');
    const preferencePanels = document.querySelectorAll('.preferences-panel-content');
    const preferencesDropdownWrapper = preferencesToggle ? preferencesToggle.closest('.nav-item.dropdown') : null;

    function activatePanel(panelName) {
        preferenceTabs.forEach(tab => {
            tab.classList.toggle('active', tab.dataset.panel === panelName);
        });
        preferencePanels.forEach(panel => {
            panel.classList.toggle('active', panel.dataset.panel === panelName);
        });
    }

    function openPreferencesMenu() {
        if (!preferencesMenu || !preferencesToggle) {
            return;
        }
        preferencesMenu.classList.add('show');
        preferencesToggle.setAttribute('aria-expanded', 'true');
    }

    function closePreferencesMenu() {
        if (!preferencesMenu || !preferencesToggle) {
            return;
        }
        preferencesMenu.classList.remove('show');
        preferencesToggle.setAttribute('aria-expanded', 'false');
    }

    function togglePreferencesMenu() {
        if (!preferencesMenu) {
            return;
        }
        if (preferencesMenu.classList.contains('show')) {
            closePreferencesMenu();
            return;
        }
        openPreferencesMenu();
    }

    if (preferencesMenu) {
        preferencesMenu.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    }

    if (preferencesToggle) {
        preferencesToggle.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();
            togglePreferencesMenu();
        });
    }

    let preferencesCloseTimer = null;
    const preferencesHoverElements = [preferencesToggle, preferencesMenu].filter(Boolean);

    function scheduleClosePreferencesMenu() {
        if (preferencesCloseTimer) {
            clearTimeout(preferencesCloseTimer);
        }
        preferencesCloseTimer = setTimeout(() => {
            const isHoveringToggle = preferencesToggle && preferencesToggle.matches(':hover');
            const isHoveringMenu = preferencesMenu && preferencesMenu.matches(':hover');
            if (!isHoveringToggle && !isHoveringMenu) {
                closePreferencesMenu();
            }
        }, 120);
    }

    preferencesHoverElements.forEach((element) => {
        element.addEventListener('mouseenter', () => {
            if (window.innerWidth > 991) {
                if (preferencesCloseTimer) {
                    clearTimeout(preferencesCloseTimer);
                }
                openPreferencesMenu();
            }
        });

        element.addEventListener('mouseleave', () => {
            if (window.innerWidth > 991) {
                scheduleClosePreferencesMenu();
            }
        });
    });

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
        const openPreferencesMenu = document.querySelector('.dropdown-menu.preferences-menu.show');
        if (openPreferencesMenu) {
            if (!openPreferencesMenu.contains(event.target) && !(preferencesToggle && preferencesToggle.contains(event.target))) {
                openPreferencesMenu.classList.remove('show');
                if (preferencesToggle) {
                    preferencesToggle.setAttribute('aria-expanded', 'false');
                }
            }
        }

        if (cityDropdown && !cityDropdown.contains(event.target)) {
            closeCityMenu();
        }
    });

    const cityDropdown = document.querySelector('.city-location-dropdown');
    const cityToggle = document.getElementById('cityLocationDropdown');
    const cityMenu = document.getElementById('cityLocationMenu');
    const cityItems = document.querySelectorAll('.city-location-item');
    const cityLabel = document.querySelector('.city-dropdown-label');
    const cityStorageKey = 'kechliving-selected-city';
    const defaultCity = 'Marrakech';
    const cityHoverElements = [cityToggle, cityMenu].filter(Boolean);
    let cityCloseTimer = null;

    function getSavedCity() {
        return localStorage.getItem(cityStorageKey) || defaultCity;
    }

    function updateSelectedCity(city) {
        if (!cityLabel) {
            return;
        }
        cityLabel.textContent = city;
        cityItems.forEach(item => {
            item.classList.toggle('active', item.dataset.city === city);
        });
        localStorage.setItem(cityStorageKey, city);
    }

    function closeCityMenu() {
        if (!cityDropdown || !cityMenu || !cityToggle) {
            return;
        }
        cityDropdown.classList.remove('show');
        cityMenu.classList.remove('show');
        cityToggle.setAttribute('aria-expanded', 'false');
    }

    function openCityMenu() {
        if (!cityDropdown || !cityMenu || !cityToggle) {
            return;
        }
        cityDropdown.classList.add('show');
        cityMenu.classList.add('show');
        cityToggle.setAttribute('aria-expanded', 'true');
    }

    function toggleCityMenu() {
        if (!cityMenu || !cityToggle) {
            return;
        }
        if (cityMenu.classList.contains('show')) {
            closeCityMenu();
            return;
        }
        openCityMenu();
    }

    function scheduleCloseCityMenu() {
        if (cityCloseTimer) {
            clearTimeout(cityCloseTimer);
        }
        cityCloseTimer = setTimeout(() => {
            const isHoveringToggle = cityToggle && cityToggle.matches(':hover');
            const isHoveringMenu = cityMenu && cityMenu.matches(':hover');
            if (!isHoveringToggle && !isHoveringMenu) {
                closeCityMenu();
            }
        }, 120);
    }

    if (cityToggle && cityMenu) {
        cityToggle.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();
            toggleCityMenu();
        });

        cityHoverElements.forEach((element) => {
            element.addEventListener('mouseenter', () => {
                if (window.innerWidth > 991) {
                    if (cityCloseTimer) {
                        clearTimeout(cityCloseTimer);
                    }
                    openCityMenu();
                }
            });

            element.addEventListener('mouseleave', () => {
                if (window.innerWidth > 991) {
                    scheduleCloseCityMenu();
                }
            });
        });

        if (cityMenu) {
            cityMenu.addEventListener('click', (event) => {
                event.stopPropagation();
            });
        }

        cityItems.forEach((item) => {
            item.addEventListener('click', (event) => {
                event.stopPropagation();
                const target = event.currentTarget;
                const city = target.dataset.city;
                if (!city) {
                    return;
                }
                if (target.getAttribute('href') === '#') {
                    event.preventDefault();
                }
                updateSelectedCity(city);
                closeCityMenu();
            });
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeCityMenu();
            }
        });

        updateSelectedCity(getSavedCity());
    }

    const themeButtons = document.querySelectorAll('.theme-option');
    const themeModeStorageKey = 'kechliving-theme-mode';

    function resolveSavedThemeMode() {
        const savedMode = localStorage.getItem(themeModeStorageKey);
        if (savedMode) {
            return savedMode;
        }

        const legacy = localStorage.getItem(darkModeStorageKey);
        if (legacy === 'true') {
            return 'dark';
        }
        if (legacy === 'false') {
            return 'light';
        }

        return 'system';
    }

    function applyThemeMode(mode) {
        let enabled = false;

        if (mode === 'dark') {
            enabled = true;
        } else if (mode === 'light') {
            enabled = false;
        } else {
            enabled = window.matchMedia('(prefers-color-scheme: dark)').matches;
        }

        applyDarkMode(enabled);

        themeButtons.forEach(button => {
            button.classList.toggle('active', button.dataset.theme === mode);
        });

        if (darkModeCheckbox) {
            darkModeCheckbox.checked = enabled;
        }
    }

    function loadDarkMode() {
        const savedMode = resolveSavedThemeMode();
        applyThemeMode(savedMode);
    }

    themeButtons.forEach(btn => {
        btn.addEventListener('click', (event) => {
            event.stopPropagation();
            const newMode = btn.dataset.theme;
            if (!newMode) return;

            localStorage.setItem(themeModeStorageKey, newMode);
            localStorage.setItem(darkModeStorageKey, (newMode === 'dark').toString());
            applyThemeMode(newMode);
        });
    });

    if (darkModeCheckbox) {
        darkModeCheckbox.addEventListener('change', () => {
            const newMode = darkModeCheckbox.checked ? 'dark' : 'light';
            applyThemeMode(newMode);
            localStorage.setItem(themeModeStorageKey, newMode);
            localStorage.setItem(darkModeStorageKey, darkModeCheckbox.checked.toString());
        });
    }

    function updateNavbarState() {
        const navbar = document.getElementById('navBar');
        if (!navbar) {
            return;
        }

        const shouldScroll = window.scrollY > 30;
        navbar.classList.toggle('navbar-scrolled', shouldScroll);
        navbar.classList.toggle('navbar-transparent', !shouldScroll);
    }

    window.addEventListener('scroll', updateNavbarState, { passive: true });
    updateNavbarState();

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