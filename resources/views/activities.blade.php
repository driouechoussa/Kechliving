<!DOCTYPE html>
<html lang="{{session()->get('locale')}}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="robots" content="index, follow" />
  <!-- Fonts  --> <!-- poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Fonts  --> <!-- noto serif -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <!-- Fonts --> <!-- cairo -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

  <!-- icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">

  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('images/icon/favicon.png') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title> Kechliving - {{__('messages.activites')}}</title>


  <style>
   

 
 
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      overflow: hidden;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
      border-top-left-radius: 1rem;
      border-top-right-radius: 1rem;
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 1.5rem;
    }



    .form-control {
      border-radius: 2rem;
      padding: 1rem 1.5rem;
      border: none;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <script>
    (function(){
      try{
        var enabled = localStorage.getItem('kechliving-dark-mode') === 'true';
        if(enabled){
          document.documentElement.classList.add('dark-mode');
          if(document.body){ document.body.classList.add('dark-mode'); }
          else { document.addEventListener('DOMContentLoaded', function(){ document.body.classList.add('dark-mode'); }); }
        }
      }catch(e){}
    })();
  </script>
    @include('components.navbar')
  <header class="activities-hero-section mt-5">
     <div class="container search-container">
    <div class="row justify-content-center">
        <div class="col-md-10 my-4">
            <h1 class="hero-title m-auto text-center py-3">{{__('messages.activities_heading_page')}}</h1>
            <p class="text-center py-1">{{__('messages.activities_heading_sub')}}</p>
        </div>
      <div class="col-12 col-md-8 col-lg-6">
        <div class="input-group mb-0">
          <input type="text" id="search-bar" class="form-control"
            placeholder="{{__('messages.activities_search_keywords')}}">
        </div>
      </div>
    </div>
  </div>
  </header>

 

  <!-- Activities Section -->
  <main class="container py-5 mt-4">
    <div class="row g-4" id="activities-container">
      <div class="col-12 col-sm-6 my-4 col-lg-4 activity-card">
        <div class="card">
          <img src="{{asset('images/items/activities/climbing.jpg')}}" class="card-img-top"
            alt="A person climbing a mountain">
          <div class="card-body">
            <h5 class="card-title text-center py-1">{{__('activities.mountain_climbing')}}</h5>
            <p class="card-text text-center text-secondary">
              {{__('activities.mountain_climbing_sub')}}
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2: Hot Air Balloon Ride -->
      <div class="col-12 col-sm-6 my-4 col-lg-4 activity-card">
        <div class="card">
          <img src="{{ asset('images/items/activities/ballon.jpg') }}" class="card-img-top"
            alt="Hot air balloons in the sky">
          <div class="card-body">
            <h5 class="card-title text-center py-1">{{__('activities.ballon')}}</h5>
            <p class="card-text text-center text-secondary">{{__('activities.ballon_sub')}}</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 my-4 col-lg-4 activity-card">
        <div class="card">
          <img src="{{ asset('images/items/activities/landmark.jpg') }}" class="card-img-top"
            alt="An old European city street">
          <div class="card-body">
            <h5 class="card-title text-center py-1">{{__('activities.landmarks')}}</h5>
            <p class="card-text text-center text-secondary">
                {{__('activities.landmarks_sub')}}
            </p>
          </div>
        </div>
      </div>

       <div class="col-12 col-sm-6 col-lg-4 activity-card">
        <div class="card">
          <img src="{{asset('images/items/activities/surfing.jpg')}}" class="card-img-top" alt="A person surfing on a wave">
          <div class="card-body">
            <h5 class="card-title text-center">
              {{__('activities.surfing')}}
            </h5>
            <p class="card-text text-center">
              {{__('activities.surfing_sub')}}
            </p>
          </div>
        </div>
      </div>

      <!-- Card 5: Desert Safari -->
      <div class="col-12 col-sm-6 col-lg-4 activity-card">
        <div class="card">
          <img src="{{ asset('images/items/activities/camels.jpg') }}" class="card-img-top"
            alt="Sand dunes at sunset">
          <div class="card-body">
            <h5 class="card-title text-center">{{__('activities.safari')}}</h5>
            <p class="card-text text-center">
              {{__('activities.safari_desert_sub')}}
            </p>
            
          </div>
        </div>
      </div>

      <!-- Card 6: Cooking Class -->
      <div class="col-12 col-sm-6 col-lg-4 activity-card">
        <div class="card">
          <img src="{{ asset('images/items/activities/dishes.jpg') }}" class="card-img-top"
            alt="A person cooking in a kitchen">
          <div class="card-body">
            <h5 class="card-title text-center">
              {{__('activities.cooking')}}
            </h5>
            <p class="card-text text-center">
              {{__('activities.cooking_sub')}}
            </p>
          </div>
        </div>
      </div>

      <!-- More cards can be added here following the same structure -->

    </div>
  </main>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- JavaScript for Search Functionality -->
  <!-- <script>
    document.addEventListener('DOMContentLoaded', () => {
      const searchBar = document.getElementById('search-bar');
      searchBar.addEventListener('keyup', () => {
        const searchTerm = searchBar.value.toLowerCase();
        const cards = document.querySelectorAll('.activity-card');

        cards.forEach(card => {
          const title = card.querySelector('.card-title').textContent.toLowerCase();
          const description = card.querySelector('.card-text').textContent.toLowerCase();

          if (title.includes(searchTerm) || description.includes(searchTerm)) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  </script> -->

  @include('components/footer')


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="{{asset('js/script.js')}}"></script>

</body>

</html>