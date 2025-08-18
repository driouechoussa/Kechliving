<nav class="navbar shadow navbar-expand-lg navbar-light bg-white px-5 ps-5" id="navBar">
      <a  class="navbar-brand" href="{{ route('homepage') }}"><img draggable="false" height="50" src="{{ asset('images//logo.svg') }}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav m-auto">
          <li class="nav-item  mx-3">
            <a  class="nav-link  poppins-regular text-capitalize " href="{{ route('homepage')}}">{{__('messages.home')}}</a>
          </li>

          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link  poppins-regular text-capitalize" href="{{ route('inMarrakechPage') }}">{{__('messages.in_marrakech')}}</a>
          </li>

          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link  poppins-regular text-capitalize" href="#">{{__('messages.villas')}}</a>
          </li>



          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link  poppins-regular linkMover text-capitalize" href="{{ route('contactPage') }}">{{__('messages.contact')}}</a>
          </li>
        </ul>

        <div class="dropdown mx-4 ">
            <button class="btn bg-transparent border none-outline dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="text-capitalize">{{ app()->getLocale() }}</span>
        </button>
        <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item bg-light text-dark text-capitalize" href="{{ route('langSwitcher' , 'en' )}}">en</a>
          <a class="dropdown-item bg-light text-dark text-capitalize" href="{{ route('langSwitcher' , 'ar' )}}">ar</a>
          <a class="dropdown-item bg-light text-dark text-capitalize" href="{{ route('langSwitcher' , 'es' )}}">es</a>
          <a class="dropdown-item bg-light text-dark text-capitalize" href="{{ route('langSwitcher' , 'fr' )}}">fr</a>
        </div>
      </div>

        <div class="row user-field">
          <div class="d-flex align-items-center">
            <a target="_blank" href="https://wa.me/212690886339" class="btn shadow large-btn text-capitalize d-flex"><img class="mx-2" width="20" height="22"
                src="{{ asset('images/icon/whatsapp.svg') }}" alt="" srcset=""> <span>{{__('messages.whtsapp_button')}}</span></a>
          </div>
        </div>
    </nav>
    
