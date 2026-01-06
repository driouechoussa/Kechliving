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

          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link  linkMover text-capitalize" href="{{ route('ContactPage') }}">{{__('messages.contact')}}</a>
          </li>
        </ul>

        <div class="dropdown mx-4 ">
            <button class="btn bg-transparent border none-outline dropdown-toggle d-flex flex-row align-items-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="text-capitalize mx-1">
                 @if (app()->getLocale() == 'en')
                   <span class="d-flex justify-content-center"><img class="mx-2" width="20" src="{{asset('images/icon/flags/uk.svg') }}" alt="english"> {{__('messages.en')}}</span>
                @elseif (app()->getLocale() == 'ar')
                   <span class="d-flex justify-content-center"><img class="mx-2" width="20" src="{{asset('images/icon/flags/morocco.svg') }}" alt="arabic"> {{__('messages.ar')}}</span>
                @elseif (app()->getLocale() == 'es')
                    <span class="d-flex justify-content-center"><img class="mx-2" width="20" src="{{asset('images/icon/flags/spain.svg') }}" alt="spanish"> {{__('messages.es')}}</span>
                @elseif (app()->getLocale() == 'fr')
                   <span class="d-flex justify-content-center"><img class="mx-2" width="20" src="{{asset('images/icon/flags/france.svg') }}" alt="french">{{__('messages.fr')}}</span>
               @endif

              </span>
            </button>
        <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
          <a class="langLink dropdown-item bg-light text-dark text-capitalize text-center py-2 d-flex flex-row align-items-center" href="{{ route('langSwitcher' , 'en' )}}"><img class="mx-2" width="20" src="{{asset('images/icon/flags/uk.svg') }}" alt="english">{{__('messages.en')}}</a>
          <a class="langLink dropdown-item bg-light text-dark text-capitalize text-center py-2 d-flex flex-row align-items-center" href="{{ route('langSwitcher' , 'ar' )}}"><img class="mx-2" width="20" src="{{asset('images/icon/flags/morocco.svg') }}" alt="arabic">{{__('messages.ar')}}</a>
          <a class="langLink dropdown-item bg-light text-dark text-capitalize text-center py-2 d-flex flex-row align-items-center" href="{{ route('langSwitcher' , 'es' )}}"><img class="mx-2" width="20" src="{{asset('images/icon/flags/spain.svg') }}" alt="spanish">{{__('messages.es')}}</a>
          <a class="langLink dropdown-item bg-light text-dark text-capitalize text-center py-2 d-flex flex-row align-items-center" href="{{ route('langSwitcher' , 'fr' )}}"><img class="mx-2" width="20" src="{{asset('images/icon/flags/france.svg') }}" alt="fremch">{{__('messages.fr')}}</a>
        </div>
      </div>

        <div class="row user-field">
          <div class="d-flex align-items-center">
            <a target="_blank" href="https://wa.me/212690886339" class="btn primary_button d-flex align-items-center "><img class="mx-2" width="20" height="22"
                src="{{ asset('images/icon/whatsapp.svg') }}" alt="whatsapp logo"> <span>{{__('messages.whtsapp_button')}}</span></a>
          </div>
        </div>
    </nav>
    
