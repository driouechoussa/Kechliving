<nav class="navbar shadow navbar-expand-lg navbar-light bg-white px-5 ps-5" id="navBar">
      <a  class="navbar-brand" href="{{ route('homepage') }}"><img draggable="false" height="50" src="{{ asset('images//logo.svg') }}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav m-auto">
          <li class="nav-item  mx-3">
            <a  class="nav-link  poppins-regular text-capitalize " href="{{ route('homepage')}}">accueil</a>
          </li>

          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link  poppins-regular text-capitalize" href="{{ route('inMarrakechPage') }}">à Marrakech</a>
          </li>

          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link  poppins-regular text-capitalize" href="#">les villas</a>
          </li>



          <li class="nav-item mx-3">
            <a target="_blank" class="nav-link  poppins-regular linkMover text-capitalize" href="{{ route('contactPage') }}">contactez-nous</a>
          </li>
        </ul>

        <div class="row user-field">
          <div class="d-flex align-items-center">


            <a target="_blank" href="https://wa.me/212690886339" class="btn shadow large-btn text-capitalize d-flex"><img class="mx-2" width="20" height="22"
                src="{{ asset('images/icon/whatsapp.svg') }}" alt="" srcset=""> <span>whatsApp</span></a>
          </div>
        </div>
    </nav>
    
