<nav class="navbar shadow-2 navbar-expand-lg navbar-light bg-white px-5 ps-5" id="navBar">
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

          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link text-capitalize" href="{{ route('inMarrakechPage') }}">{{__('messages.in_marrakech')}}</a>
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
                <div class="preferences-content pl-3">
                  <div class="preferences-panel-content active" data-panel="darkmode">
                    <div class="preferences-panel">
                      <div class="preferences-panel-grid">
                        
                        <div class="pref-panel-col">
                          <h5>{{ __('messages.dark_mode') }}</h5>
                        </div>

                        <div class="pref-panel-col preference-switch">
                          <div class="preference-toggle">
                            <input class="preference-toggle-input" type="checkbox" id="prefDarkMode">
                            <label class="preference-toggle-label" for="prefDarkMode">
                              <span class="preference-toggle-ball"></span>
                            </label>
                          </div>
                        </div>

                        <div class="pref-panel-col preference-info">
                          <i class="bx bx-info-circle"></i>
                          <p>{{ __('messages.dark_mode_helper') }}</p>
                        </div>

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
          <div class="d-flex align-items-center">
            <a target="_blank" href="https://wa.me/212690886339" class="btn primary_button d-flex align-items-center "><img class="mx-2" width="20" height="22"
                src="{{ asset('images/icon/whatsapp.svg') }}" alt="whatsapp logo"> <span>{{__('messages.whtsapp_button')}}</span></a>
          </div>
        </div>
    </nav>
    
