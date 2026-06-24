<nav class="navbar shadow-2 navbar-expand-lg navbar-light px-5 ps-5 navbar-transparent" id="navBar">
      <a  class="navbar-brand" href="{{ route('homepage') }}"><img draggable="false" height="50" src="{{ asset('images//logo.svg') }}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav m-auto">
          <li class="nav-item  mx-3">
            <a  class="nav-link   text-capitalize " href="{{ route('homepage')}}">{{__('messages.home')}}</a>
          </li>

          <li class="nav-item dropdown mx-3 city-location-dropdown">
            <button class="nav-link dropdown-toggle d-flex align-items-center text-capitalize city-dropdown-toggle" id="cityLocationDropdown" type="button" aria-haspopup="true" aria-expanded="false" aria-controls="cityLocationMenu">
              <span class="city-dropdown-label">Marrakech</span>
            </button>
            <div class="dropdown-menu city-location-menu shadow-sm" aria-labelledby="cityLocationDropdown" id="cityLocationMenu">
              <a href="{{ route('inMarrakechPage') }}" class="dropdown-item city-location-item active" data-city="Marrakech">Marrakech</a>
              <a href="#" class="dropdown-item city-location-item" data-city="Casablanca">Casablanca</a>
              <a href="#" class="dropdown-item city-location-item" data-city="Rabat">Rabat</a>
              <a href="#" class="dropdown-item city-location-item" data-city="Agadir">Agadir</a>
            </div>
          </li>


          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link   text-capitalize" href="{{ route('VillasPage') }}">{{__('messages.villas')}}</a>
          </li>


          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link   text-capitalize" href="{{ route('ActivitiesPage') }}">{{__('messages.activites')}}</a>
          </li>

          <li class="nav-item dropdown mx-3">
            <a class="nav-link dropdown-toggle text-capitalize" href="#" id="preferencesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ __('messages.preferences') }}
            </a>
            <div class="dropdown-menu bg-light preferences-menu p-3" aria-labelledby="preferencesDropdown">
              <div class="preferences-flyout d-flex align-items-start">
                <div class="preferences-nav d-flex flex-column align-items-center">
                  <div class="preferences-icons d-flex justify-content-center align-items-center flex-wrap gap-2">
                    <a href="#darkmode" data-panel="darkmode" class="pref-icon active d-flex flex-column align-items-center text-center text-dark p-2 bg-white rounded shadow-sm">
                      <i class="bx bx-moon fs-4"></i>
                      <span class="small mt-1">{{ __('messages.dark_mode') }}</span>
                    </a>
                    <a href="#language" data-panel="language" class="pref-icon d-flex flex-column align-items-center text-center text-dark p-2 bg-white rounded shadow-sm">
                      <i class="bx bx-world fs-4"></i>
                      <span class="small mt-1">{{ __('messages.language') }}</span>
                    </a>
                    <a href="#currency" data-panel="currency" class="pref-icon d-flex flex-column align-items-center text-center text-dark p-2 bg-white rounded shadow-sm">
                      <i class="bx bx-dollar-circle fs-4"></i>
                      <span class="small mt-1">{{ __('messages.currency') }}</span>
                    </a>
                  </div>
                </div>
                <div class="preferences-content p-3">
                  <div class="preferences-panel-content active" data-panel="darkmode">
                    <div class="preferences-panel">
                      <h5>{{ __('messages.dark_mode') }}</h5>
                      <div class="theme-options mt-3">
                        <button type="button" class="theme-option d-flex align-items-center justify-content-between" data-theme="light">
                          <span>{{ __('messages.theme_light') }}</span>
                          <i class="bx bx-sun"></i>
                        </button>
                        <button type="button" class="theme-option d-flex align-items-center justify-content-between" data-theme="dark">
                          <span>{{ __('messages.theme_dark') }}</span>
                          <i class="bx bx-moon"></i>
                        </button>
                        <button type="button" class="theme-option d-flex align-items-center justify-content-between" data-theme="system">
                          <span>{{ __('messages.theme_system') }}</span>
                          <i class="bx bx-reset"></i>
                        </button>
                      </div>
                      <div class="preference-info mt-3">
                        <i class="bx bx-info-circle"></i>
                        <p>{{ __('messages.dark_mode_helper') }}</p>
                      </div>
                    </div>
                  </div>

                  <div class="preferences-panel-content" data-panel="language">
                    <div class="preferences-panel">
                      <h5>{{ __('messages.language') }}</h5>
                      <div class="language-options mt-3">
                            <a class="language-option d-flex align-items-center" href="{{ route('langSwitcher', 'en') }}">
                              <img class="mx-2" width="20" src="{{ asset('images/icon/flags/uk.svg') }}" alt="english">
                              {{ __('messages.en') }}
                            </a>
                            <a class="language-option d-flex align-items-center" href="{{ route('langSwitcher', 'ar') }}">
                              <img class="mx-2" width="20" src="{{ asset('images/icon/flags/morocco.svg') }}" alt="arabic">
                              {{ __('messages.ar') }}
                            </a>
                            <a class="language-option d-flex align-items-center" href="{{ route('langSwitcher', 'es') }}">
                              <img class="mx-2" width="20" src="{{ asset('images/icon/flags/spain.svg') }}" alt="spanish">
                              {{ __('messages.es') }}
                            </a>
                            <a class="language-option d-flex align-items-center" href="{{ route('langSwitcher', 'fr') }}">
                              <img class="mx-2" width="20" src="{{ asset('images/icon/flags/france.svg') }}" alt="french">
                              {{ __('messages.fr') }}
                            </a>
                      </div>
                    </div>
                  </div>

                  <div class="preferences-panel-content" data-panel="currency">
                    <div class="preferences-panel">
                          <h5>{{ __('messages.currency') }}</h5>
                          <div class="currency-options mt-3">
                            <button type="button" class="currency-option d-flex align-items-center" data-currency="USD">USD — US Dollar</button>
                            <button type="button" class="currency-option d-flex align-items-center" data-currency="EUR">EUR — Euro</button>
                            <button type="button" class="currency-option d-flex align-items-center" data-currency="MAD">MAD — Moroccan Dirham</button>
                          </div>
                          <div class="preference-info mt-3">
                            <i class="bx bx-info-circle"></i>
                            <p>{{ __('messages.currency_helper') }}</p>
                          </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link  linkMover text-capitalize" href="{{ route('ContactPage') }}">{{__('messages.contact')}}</a>
          </li>
        </ul>


        <div class="row user-field">
          <div class="d-flex align-items-center  flex-wrap">
            <a href="/login" class="btn secondary_button text-uppercase px-4 mx-2 py-2">{{ __('messages.login_button') }}</a>
            <a href="/register" class="btn primary_button text-uppercase px-4 py-2">{{ __('messages.signup_button') }}</a>
          </div>
        </div>
    </nav>
    
