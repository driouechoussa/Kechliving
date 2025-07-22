<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kechliving - à Marrakech</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/icon/favicon.png') }}" type="image/x-icon">

    <!-- Boxicons  -->
     <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
     <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
   
   @include('components.navbar')

    <!-- Hero Section -->
    <section class="hero text-center">
        <img src="../images/bg/marrakech.jpg" alt="Hero Image" class="hero-image">
        <div class="container hero-content">
            <h1 class="display-4 fw-bold">Nos Séjours à Marrakech</h1>
            <p class="lead">Trouvez votre bien idéal au cœur de Marrakech</p>
        </div>
    </section>


  

       <!-- Content Section -->
<section id="productList" class="container py-5 ">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 col-lg-4 my-3">
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
                              <a target="_blank" href="{{ route('PropertyShow' , $product->id)}}" class="btn btn-information w-100">Plus d'infos</a>
                          </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

    <div class="w-50 border Contact-card  mx-auto my-5 p-4 shadow-lg d-flex flex-column align-items-center">
        <h2 class="text-center mb-2">
            Contactez-nous
        </h2>

        <p class="text-center mb-2">
            Pour toute question ou besoin d'aide, n'hésitez pas à nous contacter via WhatsApp. Notre équipe est là pour
            vous accompagner dans tous vos besoins immobiliers à Marrakech. Que vous recherchiez un bien immobilier,
            souhaitiez des informations sur nos services ou que vous ayez d'autres questions, n'hésitez pas à nous
            contacter !
        </p>

        
            <a target="_blank" href="{{ route('contactPage') }}" class="btn btn-Contact">Contactez-nous</a>

    </div>

    @include('components.footer')


    <!-- Bootstrap JS Bundle (for navbar toggler) -->
     <script src="{{ asset('js/filter.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>