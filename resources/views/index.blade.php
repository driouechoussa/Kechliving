<!doctype html>
<html lang="{{session()->get('locale')}}">

<head>
  <!-- Required meta tags -->
  <meta name="description" content="{{__('messages.description')}}">
  <meta name="keywords" content="{{__('messages.keywords')}}">

  <meta name="author" content="Kechliving">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="robots" content="index, follow" />

  <meta property="og:title" content="{{__('messages.title')}}" />
  <meta property="og:description" content="{{__('messages.description')}}" />
  <meta property="og:image" content="{{ asset('images//logo.svg') }}" />
  <meta property="og:url" content="https://kechliving.com" />

  <!-- Fonts  --> <!-- poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

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

  <title>{{__('messages.title')}}</title>

     <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Kechliving",
          "url": "https://kechliving.com",
          "logo": "https://kechliving.com/images//logo.svg",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+212-69088339",
            "contactType": "customer service",
            "areaServed": "MA",
            "availableLanguage": ["ar", "fr", "en" , "es"]
          },
          "sameAs": [
            "https://www.facebook.com/p/Kechliving-Marrakech-61578336983831",
            "https://www.instagram.com/kechliving_marrakech/"
        ]
}
</script>
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
  
  <!-- Header -->
  <header class="header" id="header">
  @include('components/navbar')
    <div class="container-fluid search-form">
            <form class="row g-3 align-items-center" action="{{ route('VillasPage') }}" method="GET">
              @csrf
                <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="checkin" class="form-label px-2 py-2 text-capitalize">{{__('messages.check-in')}}</label>
                    <input type="date" name="date_checkin" class="form-control shadow-none bg-transparent border" id="checkin">
                </div>
                <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="checkout" class="form-label px-2 py-2 text-capitalize">{{__('messages.check-out')}}</label>
                    <input type="date" name="date_checkout" class="form-control none-outline" id="checkout">
                </div>
                <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="type" class="form-label px-2 py-2 text-capitalize">{{__('messages.property_type')}}</label>
                    <select name="property_type" id="type" class="form-select bg-transparent border w-100 none-outline py-1 px-3">
                        <option selected>{{__('messages.select')}}</option>
                        @foreach ($property_type as $type)
                            <option value="{{$type}}">{{ __('messages.property_types.' . $type ) }}</option>
                        @endforeach
                    </select>
                </div>
                 <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="type" class="form-label px-2 py-2 text-capitalize">{{__('messages.property_location')}}</label>
                    <select name="property_location" id="type" class="form-select none-outline bg-transparent w-100 border py-1 px-3">
                        <option selected>{{__('messages.select')}}</option>
                         @foreach ($cities as $city)
                            <option value="{{$city}}">{{ __('messages.cities.' . $city ) }}</option>
                        @endforeach
                    </select>
                </div>
                  <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="type" class="form-label px-2 py-2 text-capitalize">{{__('messages.property_cost')}}</label>
                    <select name="property_cost" id="type" class="form-select bg-transparent w-100 border py-1 px-3">
                        <option selected>{{__('messages.select')}}</option>
                            @foreach ($costs as $cost)
                              <option value="{{$cost}}"><span>{{__('messages.greater_than')}}</span> {{$cost}} <span>MAD</span></option>
                            @endforeach
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-end m-auto">
                    <button type="submit" class="primary_button btn shadow py-2  my-2  w-100 ">{{__('messages.filter_search')}}</button>
                </div>
            </form>

        </div>
    <div class="hero p-2">
      <div class="hero-slider">
        <div class="hero-slide active" style="background-image: url('{{ asset('images/bg/heroBg.png') }}')">
          <div class="hero-slide-content">
            <h1 class="hero-title text-light py-5">{{ __('messages.hero_slide_1_title') }}</h1>
            <p class="hero-subtitle">{{ __('messages.hero_slide_1_subtitle') }}</p>
            <a draggable="false" target="_blank"
              class="hero-btn btn btn-outline-light p-2 d-inline-block rounded text-capitalize text-light"
              href="{{ route('inMarrakechPage') }}">{{__('messages.hero_button')}}</a>
          </div>
        </div>

        <div class="hero-slide" style="background-image: url('{{ asset('images/bg/marrakech.jpg') }}')">
          <div class="hero-slide-content">
            <h1 class="hero-title text-light py-5">{{ __('messages.hero_slide_2_title') }}</h1>
            <p class="hero-subtitle">{{ __('messages.hero_slide_2_subtitle') }}</p>
            <a draggable="false" target="_blank"
              class="hero-btn btn btn-outline-light p-2 d-inline-block rounded text-capitalize text-light"
              href="{{ route('inMarrakechPage') }}">{{__('messages.hero_button')}}</a>
          </div>
        </div>

        <div class="hero-slide" style="background-image: url('{{ asset('images/bg/mr-castels.jpg') }}')">
          <div class="hero-slide-content">
            <h1 class="hero-title text-light py-5">{{ __('messages.hero_slide_3_title') }}</h1>
            <p class="hero-subtitle">{{ __('messages.hero_slide_3_subtitle') }}</p>
            <a draggable="false" target="_blank"
              class="hero-btn btn btn-outline-light p-2 d-inline-block rounded text-capitalize text-light"
              href="{{ route('inMarrakechPage') }}">{{__('messages.hero_button')}}</a>
          </div>
        </div>

        <div class="hero-slide" style="background-image: url('{{ asset('images/bg/sky_marrakech.jpg') }}')">
          <div class="hero-slide-content">
            <h1 class="hero-title text-light py-5">{{ __('messages.hero_slide_4_title') }}</h1>
            <p class="hero-subtitle">{{ __('messages.hero_slide_4_subtitle') }}</p>
            <a draggable="false" target="_blank"
              class="hero-btn btn btn-outline-light p-2 d-inline-block rounded text-capitalize text-light"
              href="{{ route('inMarrakechPage') }}">{{__('messages.hero_button')}}</a>
          </div>
        </div>
      </div>

      <div class="hero-slider-dots">
        <button type="button" class="hero-slide-dot active" data-slide="0" aria-label="Slide 1"></button>
        <button type="button" class="hero-slide-dot" data-slide="1" aria-label="Slide 2"></button>
        <button type="button" class="hero-slide-dot" data-slide="2" aria-label="Slide 3"></button>
        <button type="button" class="hero-slide-dot" data-slide="3" aria-label="Slide 4"></button>
      </div>
    </div>

    <div class="container-fluid search-form">
            <form class="row g-3 align-items-center" action="{{ route('VillasPage') }}" method="GET">
              @csrf
                <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="checkin" class="form-label px-2 py-2 text-capitalize">{{__('messages.check-in')}}</label>
                    <input type="date" name="date_checkin" class="form-control shadow-none bg-transparent border" id="checkin">
                </div>
                <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="checkout" class="form-label px-2 py-2 text-capitalize">{{__('messages.check-out')}}</label>
                    <input type="date" name="date_checkout" class="form-control none-outline" id="checkout">
                </div>
                <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="type" class="form-label px-2 py-2 text-capitalize">{{__('messages.property_type')}}</label>
                    <select name="property_type" id="type" class="form-select bg-transparent border w-100 none-outline py-1 px-3">
                        <option selected>{{__('messages.select')}}</option>
                        @foreach ($property_type as $type)
                            <option value="{{$type}}">{{ __('messages.property_types.' . $type ) }}</option>
                        @endforeach
                    </select>
                </div>
                 <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="type" class="form-label px-2 py-2 text-capitalize">{{__('messages.property_location')}}</label>
                    <select name="property_location" id="type" class="form-select none-outline bg-transparent w-100 border py-1 px-3">
                        <option selected>{{__('messages.select')}}</option>
                         @foreach ($cities as $city)
                            <option value="{{$city}}">{{ __('messages.cities.' . $city ) }}</option>
                        @endforeach
                    </select>
                </div>
                  <div class="col-md-2 d-flex flex-column  align-items-center">
                    <label for="type" class="form-label px-2 py-2 text-capitalize">{{__('messages.property_cost')}}</label>
                    <select name="property_cost" id="type" class="form-select bg-transparent w-100 border py-1 px-3">
                        <option selected>{{__('messages.select')}}</option>
                            @foreach ($costs as $cost)
                              <option value="{{$cost}}"><span>{{__('messages.greater_than')}}</span> {{$cost}} <span>MAD</span></option>
                            @endforeach
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-end m-auto">
                    <button type="submit" class="primary_button btn shadow py-2  my-2  w-100 ">{{__('messages.filter_search')}}</button>
                </div>
            </form>


        </div>
  </header>

  <!-- Service 7 -->
  <section class="bsb-service-7 mt-5 py-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7">
          <h3 class="fs-5 my-3  text-secondary text-center text-uppercase poppins-medium">{{__('messages.wcu_section_title')}}</h3>
          <h2 class="display-5 mb-5 mb-xl-9 text-center poppins-regular text-dark">{{__('messages.wcu_section_subtitle')}}</h2>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="container-fluid bg-light border shadow">
            <div class="row">
              <div class="col-12 col-md-4 p-0">
                <div class="card border-0 bg-transparent">
                  <div class="card-body text-center p-5 ">
                    <img draggable="false" class="w-25 mb-3" src="{{ asset('images/icon/shower.svg') }}" alt="shower">
                    <h4 class="fw-bold mb-4 poppins-medium text-capitalize">{{__('messages.wcu_item_01_heading')}}</h4>
                    <p class="mb-4 text-secondary poppins-regular">{{__('messages.wcu_item_01_subtitle')}}</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 p-0 border-top border-bottom border-start border-end">
                <div class="card border-0 bg-transparent">
                  <div class="card-body text-center p-5">
                    <img draggable="false" class="w-25 mb-3" src="{{ asset('images/icon/like.svg') }}" alt="like">
                    <h4 class="fw-bold text-capitalize mb-4 poppins-medium">{{__('messages.wcu_item_02_heading')}}</h4>
                    <p class="mb-4 text-secondary poppins-regular">{{__('messages.wcu_item_02_subtitle')}}</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 p-0">
                <div class="card border-0 bg-transparent">
                  <div class="card-body text-center p-5">
                    <img draggable="false" class="w-25 mb-3" src="{{ asset('images/icon/building.svg') }}" alt="building">
                    <h4 class="fw-bold text-uppercase mb-4 poppins-medium">{{__('messages.wcu_item_03_heading')}}</h4>
                    <p class="mb-4 text-secondary poppins-regular">{{__('messages.wcu_item_03_subtitle')}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="container my-5"> <!-- Cards View -->
    <div class="content-text w-100 text-center mb-5">
      <h3 class="poppins-medium text-secondary text-uppercase p-2">
        {{__('messages.prodict_section_title')}}
      </h3>
      <h2 class="poppins-regular text-dark pt-2">
        {{__('messages.prodict_section_subtitle')}}
      </h2>
    </div>

    <div class="row g-4"> <!-- Bootstrap gap utility -->


      @foreach ($products as $product)
      <div class="col-md-4 mt-3">
        <div class="card property-card shadow-sm">
          
        @if ($product->firstImage) 
            <div class="img-wapper">
                <img src="{{ asset($product->firstImage->image_path)}}" class="card-img-top" alt="Property">
            </div>
        @endif
          
          <div class="card-body">
            <h5 class="card-title text-capitalize">
                @if (app()->getLocale() == 'ar')
                    {{$product->product_name_ar}}

                    @else
                      {{$product->product_name}}
                 @endif
            </h5>
            <p class="card-text text-muted text-capitalize">
              @if (app()->getLocale() == 'ar')
                {{$product->product_location_ar}}

                  @else
                    {{$product->product_location}}
                @endif
            </p>
            <h4 class="text-secondary">
              <span class="text-dark">{{$product->product_price}}</span> <span class="text-dark text-uppercase">{{__('products.currency_mad')}}</span><sup class="text-secondary"> /{{__('products.per_night')}}</sup>
            </h4>
            <a target="_blank" href="{{ route('PropertyShow' , $product->id)}}" class="btn primary_button mt-2 w-100">{{__('messages.more_info_button')}}</a>
          </div>
        </div>
      </div>
      @endforeach
      
      
    </div>
  </section>
  
  <section class="py-3 py-md-5 py-xl-8" id="contact"> <!-- contact -->
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
          <h3 class="fs-5 mb-2 text-secondary text-uppercase poppins-medium">{{__('messages.contact_section_title')}}</h3>
          <h2 class="display-5 mb-4 mb-md-5 mb-xl-8  text-dark ">{{__('messages.contact_section_subtitle')}}</h2>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center">
        <div class="col-12 col-lg-6">
          <div class="border overflow-hidden">

            <form action="#!">
              <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                  <label for="fullname" class="form-label text-capitalize">{{__('messages.contact_name')}} <span
                      class="text-danger">*</span></label>
                  <input type="text" placeholder="{{__('messages.contact_name_placeholder')}}" class="form-control" id="fullname"
                    name="fullname" value="" required>
                </div>
                <div class="col-12 col-md-6 mt-4">
                  <label for="email" class="form-label text-capitalize">{{__('messages.contact_email')}} <span
                      class="text-danger">*</span></label>
                  <div class="input-group">
                    <input type="email" placeholder="example@email.com" class="form-control" id="email" name="email"
                      value="" required>
                  </div>
                </div>
                <div class="col-12 col-md-6 mt-4">
                  <label for="phone" class="form-label text-capitalize ">{{__('messages.contact_phone')}}</label>
                  <div class="input-group">
                    <input type="tel" placeholder="+212 600 000 000" class="form-control" id="phone"
                      name="phone" value="">
                  </div>
                </div>
                <div class="col-12 mt-4">
                  <label for="adress" class="form-label text-capitalize">{{__('messages.contact_adress')}} <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control text-capitalize" placeholder="{{__('messages.contact_adress_placeholder')}}"
                    id="adress" name="adress" value="" required>
                </div>
                <div class="col-12 mt-4">
                  <label for="message" class="form-label text-capitalize ">{{__('messages.contact_message')}} <span
                      class="text-danger">*</span></label>
                  <textarea class="form-control" placeholder="{{__('messages.contact_message_placeholder')}}" id="message" name="message"
                    rows="3" required></textarea>
                </div>
                <div class="col-12 mt-4">
                  <div class="d-grid">
                    <button class="btn primary_button shadow py-3 px-4"
                      type="submit">{{__('messages.contact_button')}}</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
              <div class="mb-4 mb-md-5">
                <div class="mb-3">
                  <img width="50" height="50" draggable="false" src="{{ asset('images/icon/location.svg') }}" alt="location">
                </div>
                <div>
                  <h4 class="mb-2 text-capitalize poppins-medium">{{__('messages.contact_att_location')}}</h4>
                  <hr class="w-50 mb-3 border-dark-subtle">
                  <address class="m-0 text-secondary poppins-regular">{{__('messages.adress')}}</address>
                </div>
              </div>
              <div class="row mb-sm-4 mb-md-5">
                <div class="col-12 col-sm-6">
                  <div class="mb-4 mb-sm-0">
                    <div class="mb-3">
                      <img width="50" height="50" draggable="false" src="{{ asset('images/icon/phone.svg') }}" alt="phone">
                    </div>
                    <div>
                      <h4 class="mb-2">{{__('messages.contact_att_phone')}}</h4>
                      <hr class="w-75 mb-3 border-dark-subtle">
                      <p class="mb-0">
                        <a class="link-secondary text-secondary text-decoration-none" href="tel:+15057922430">+212 (661) 234567</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="mb-4 mb-sm-0">
                    <div class="mb-3 text-dark">
                      <img width="50" height="50" draggable="false" src="{{ asset('images/icon/mail.svg') }}" alt="mail">
                    </div>
                    <div>
                      <h4 class="mb-2">{{__('messages.contact_att_email')}}</h4>
                      <hr class="w-75 mb-3 border-dark-subtle">
                      <p class="mb-0">
                        <a class="link-secondary text-secondary text-decoration-none"
                          href="mailto:demo@yourdomain.com">info@kechliving.com</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


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