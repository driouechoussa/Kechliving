<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{$product->product_name}}</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('styles/styles.css') }}" />
  

  
  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('images/icon/favicon.png') }}" type="image/x-icon">
</head>

<body>
  @include('components.navbar')
  <div class="container py-5">
    <div class="row g-5 mt-4">
      <!-- Image Gallery -->
      <div class="col-md-6 ">
        <div class="position-relative">
          <div id="imageCarousel" class="d-flex overflow-hidden" style="scroll-behavior: smooth;">
            @foreach ($imgs->products_items as $image)
            <img src="{{ asset($image->image_path) }}" class="img-fluid rounded me-3 "
            alt="Main villa image"  />
            @endforeach
          </div>
          <button id="prevBtn" class="btn btn-dark position-absolute top-50 start-0 translate-middle-y z-1">❮</button>
          <button id="nextBtn" class="btn btn-dark position-absolute top-50 end-0 translate-middle-y z-1">❯</button>
        </div>
      </div>

      <!-- Property Info -->
      <div class="col-md-6">
        <h2 class="mb-3 text-capitalize">{{$product->product_name}}</h2>

        <p class="lead">{{$product->product_price}} <span>MAD par nuit</span></p>
        <p class="text-secondary">{{$product->product_description}}</p>

        <div class="mt-4">
          <h5 class="fw-semibold">Caractéristiques principales :</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item text-capitalize d-flex align-items-center"><img src="{{ asset('images/icon/villa.png') }}" alt="villa" class="mt-1 mb-1 mx-2"><span>{{$product->product_category}}</span></li>
            <li class="list-group-item text-capitalize d-flex align-items-center"><img src="{{ asset('images/icon/location.png') }}" alt="location" class="mt-1 mb-1 mx-2"><span>{{$product->product_location}}</span></li>
            <li class="list-group-item d-flex align-items-center"><img src="{{ asset('images/icon/room.png') }}" alt="location" class="mt-1 mb-1 mx-2"><span >{{$product->product_rooms}}</span></li>
            <li class="list-group-item d-flex align-items-center"><img src="{{ asset('images/icon/plans.png') }}" alt="size" class="mt-1 mb-1 mx-2"> <span>{{$product->product_size}} <span>m<sup>2</sup> </span></span></li>
           
          </ul>
        </div>

        <div class="mt-4">
          <a targe href="https://wa.me/212690886339" class="text-capitalize primary_btn_Style d-inline-block w-100 p-2 rounded">contact agent</a>
        </div>
      </div>
    </div>
  </div>


  
  @include('components.footer')

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Carousel Scroll Logic -->
  <script src="{{asset('js/script.js')}}">
    
  </script>
</body>

</html>