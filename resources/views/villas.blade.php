<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

  <title>kechliving - {{__('messages.villas')}}</title>
</head>
<body>
    @include('components.navbar')
    <section id="villas" class="py-5 mt-5">
        <div class="container text-center">
            <h3 id="Villa_header" class="mb-4 mb-md-5 mt-2 mb-xl-8  text-dark text-left">
              {{ __('messages.villas_page_header') }}
            </h3>
          

            <div id="villa-list" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($products as $product)
                   <div class="col-md-4 mt-3">
                <div class="card property-card shadow-sm">
                  
                @if ($product->firstImage) 
                    <div class="img-wapper">
                        <img src="{{ asset($product->firstImage->image_path)}}" class="card-img-top" alt="Property">
                    </div>
                @endif
                  
                  <div class="card-body">
                    <h5 class="card-title text-capitalize">{{$product->product_name}}</h5>
                    <p class="card-text text-muted text-capitalize">{{$product->product_location}}</p>
                    <h4 class="text-secondary "><span class="text-dark">{{$product->product_price}}</span> <span class="text-dark">MAD</span> <sup>/ par nuit</sup></h4>
                    <a target="_blank" href="{{ route('PropertyShow' , $product->id)}}" class="btn btn-information w-100">{{__('messages.more_info_button')}}</a>
                  </div>
                </div>
              </div>
              @endforeach

              @if ($products->isEmpty())
                  @include('components.notFound')
              @endif

            </div>
        </div>
    </section>


    @include('components.footer')


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

    <script>
       const localdata = '{{ session()->get('locale')}}';
       if (localdata === 'ar') {
        var val =  document.getElementsByTagName('body')[0].classList.add('arabicLangActived');
        var h1 = document.getElementsByClassName('hero-title')[0].classList.add('arabicLangActived');
       }

      
    </script>


</body>
</html>