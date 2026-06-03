<!DOCTYPE html>
<html lang="{{session()->get('locale')}}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="robots" content="noindex, follow" />
  <title>

     @if (app()->getLocale() == 'ar')
        {{$product->product_name_ar}}

            @else
              {{$product->product_name}}
      @endif
     - Kechliving
    
  </title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />

  <!-- Fonts --> <!-- cairo -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('styles/styles.css') }}" />

  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('images/icon/favicon.png') }}" type="image/x-icon">
</head>

<body class="">
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
<div class="container-fluid h-100">
  @include('components.navbar')
    <div id="carouselExampleControls" class="carousel slide mx-2 mt-2" data-ride="false" data-interval="false">
        <div class="carousel-inner">
            @foreach ($imgs->products_items as $key => $image) 
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                  <img class="d-block w-100" loading="lazy" src="{{ asset($image->image_path) }}" alt="product slide">
                </div> 
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>

    <div class="row">
          <div class="col-md-4 border">
          <div>
             <h2 class="text-dark my-3 mx-2 text-capitalize">
                @if (app()->getLocale() == 'ar')
                  {{$product->product_name_ar}}

                      @else
                        {{$product->product_name}}
                @endif
            </h2>
          </div>
           <hr class="mx-3 mt-5">
          <div>
            <h3 class="px-3 py-2 text-capitalize">
              {{__('products.booking')}}
            </h3>
             <form action="{{ route('PropertyShow' , ['id' => $product->id]) }}" method="get">
                 <div class="col-md-2 my-3 d-flex flex-column w-100 px-3 align-items-center">
                    <input type="text" name="fullname" placeholder="{{__('messages.contact_name')}}" class="form-control w-100 none-outline bg-transparent border" id="">
                </div>
                 <div class="col-md-2 my-3 d-flex flex-column w-100 px-3 align-items-center">
                    <input type="email" name="" placeholder="{{__('messages.contact_email')}}" class="form-control w-100 none-outline bg-transparent border" id="">
                </div>
                 <div class="col-md-2  d-flex flex-column w-100 px-3 align-items-center">
                    <input type="phone" name="" placeholder="{{__('messages.contact_phone')}}" class="form-control w-100 none-outline bg-transparent border" id="">
                </div>
                <div class="col-md-2 my-3 d-flex flex-column w-100 px-3 align-items-center">
                    <select name="" id="" class="form-select none-outline">
                      <option value="">{{__('products.guest')}}</option>
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">+4</option>
                    </select>
                </div>
                 <div class="col-md-2 my-3 d-flex flex-row justify-items-center w-100 px-3 align-items-center">
                   <label for="checkin-date" class="form-label py-1 text-capitalize w-100 text-start ">{{__('messages.check-in')}}</label>
                    <input type="date" name="checkin-date" placeholder="xx" class="form-control none-outline bg-transparent border mx-2" id="checkin">
                    <input type="time" name="checkin-time" placeholder="xx" class="form-control none-outline bg-transparent border" id="checkin">
                </div>

                  <div class="col-md-2 my-3 d-flex flex-row justify-items-center w-100 px-3 align-items-center">
                    <label for="checkout-date" class="form-label py-1 text-capitalize w-100 text-start ">{{__('messages.check-out')}}</label>
                    <input type="date" name="checkout-date" placeholder="xx" class="form-control none-outline bg-transparent border mx-2" id="checkin">
                    <input type="time" name="checkout-time" placeholder="xx" class="form-control none-outline bg-transparent border" id="checkout">
                </div>
                  <div class="col-md-2 d-flex w-100 mt-4 align-items-end m-auto">
                    <button type="submit" class="btn primary_button py-2 rounded my-2  w-100 text-capitalize">{{__('products.booking_btn')}}</button>
                </div>
             </form>
          </div>
        </div>
        <div class="col-md-8">
           <div class="container-fluid">
              <div class="row mx-2 my-3 d-flex justify-evenly justify-content-center">
                <div title="Property type" class="col-md-4 border rounded m-2 d-flex flex-column align-items-center py-3 px-5">
                    <img width="30" src="{{ asset('images/icon/villa.png') }}" alt="type">
                    <span class="text-secondary lh_custom my-3 text-center text-capitalize">
                       @if (app()->getLocale() == 'ar')
                        {{$product->product_category_ar}}

                          @else
                            {{$product->product_category}}
                      @endif
                    </span>
                </div>
                <div title="location" class="col-md-4 border rounded m-2 d-flex flex-column align-items-center py-3 px-5">
                    <img width="30" src="{{ asset('images/icon/location.png') }}" alt="type">
                    <span class="text-secondary my-3 text-center text-capitalize">
                      @if (app()->getLocale() == 'ar')
                        {{$product->product_location_ar}}

                          @else
                            {{$product->product_location}}
                      @endif
                    </span>
                </div>
                <div title="rooms" class="col-md-4  border rounded m-2 d-flex flex-column align-items-center py-3 px-5">
                    <img width="30" src="{{ asset('images/icon/room.png') }}" alt="type">
                    <span class="text-secondary my-3 text-center">{{$product->product_rooms}}</span>
                </div>
                <div title="Size" class="col-md-4  border rounded m-2 d-flex flex-column align-items-center py-3 px-5">
                    <img width="30" src="{{ asset('images/icon/plans.png') }}" alt="type">
                    <span class="text-secondary my-3 text-center">{{$product->product_size}} <span>m<sup>2</sup> </span></span>
                </div>
            </div>
           </div>
            <div class="border rounded mx-2 my-3">
                <h2 class="p-3 text-dark text-capitalize">
                  {{__('products.about')}}
                </h2>
                <p class="px-3 text-secondary  ">
                  @if (app()->getLocale() == 'ar')
                      {{$product->product_description_ar}}

                      @elseif (app()->getLocale() == 'en')
                        {{$product->product_description_en}}

                      @elseif (app()->getLocale() == 'es')
                        {{$product->product_description_es}}

                      @elseif (app()->getLocale() == 'fr')
                        {{$product->product_description_fr}}
                  @endif
                </p>
            </div>

          
            
        </div>
    </div>
</div>

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
  <script src="{{asset('js/script.js')}}"></script>
  </script>
</body>

</html>