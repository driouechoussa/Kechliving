<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta name="description"
    content="Explore the best properties for your next staycation, vacation, or business trip. Our platform offers a wide selection of homes, apartments, and hotels to suit your needs.">
  <meta name="author" content="Kechliving">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

  <!-- icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">

  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('images/icon/favicon.png') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Kechliving - Trouvez votre séjour idéal !</title>
</head>

<body>
  <!-- Header -->
  <header class="header" id="header">
  @include('components/navbar')
    <div class="hero p-2">
      <div class="text-Content w-75 mt-5">
        <h1 class="hero-title noto-serif text-light py-5">
          {{__('messages.hero_title')}}
        </h1>

        <a draggable="false" target="_blank"
          class="hero-btn btn btn-outline-light p-2 d-inline-block rounded text-capitalize text-light "
          href="{{ route('inMarrakechPage') }}">{{__('messages.hero_button')}}</a>
      </div>
      <img class="hero-bg w-100 h-100 rounded " loading="lazy" draggable="false" src="{{ asset('images/bg/heroBg.png') }}"
        alt="her background">
    </div>
  </header>


  <section class="py-3 py-md-5">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5">
          <img style="width: 300px;" draggable="false" class="img-fluid rounded"
            src="{{ asset('images/bg/riad_Marrakech.png') }}" alt="About 1">
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
              <h2 class="mb-3"><span class="text-capitalize ">qui </span> sommes nous?</h2>
              <p class="lead fs-4 text-secondary mb-3 poppins-regular"><span class="text-capitalize">Chez Kechliving,
                  nous
                  proposons une gamme complète de services immobiliers pour répondre à vos besoins. Que vous achetiez,
                  vendiez, louiez ou investissiez, notre équipe de professionnels expérimentés vous accompagne à chaque
                  étape du processus. Spécialisés dans l'immobilier résidentiel, commercial et locatif, nous vous
                  offrons des conseils d'experts et un service personnalisé pour vous aider à trouver le bien ou
                  l'acheteur idéal. Forts d'une connaissance approfondie du marché local, nous nous engageons à offrir
                  des résultats exceptionnels à nos clients.
                  Nous sommes une entreprise en pleine croissance, mais nous n'avons jamais perdu de vue nos valeurs
                  fondamentales. Nous croyons en la collaboration, l'innovation et la satisfaction client. Nous
                  cherchons constamment à améliorer nos produits et services.</p>
      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service 7 -->
  <section class="bsb-service-7 py-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7">
          <h3 class="fs-5 mb-2 text-secondary text-center text-uppercase poppins-medium">pourquoi nous choisir</h3>
          <h2 class="display-5 mb-5 mb-xl-9 text-center poppins-regular text-dark"><span
              class="text-capitalize">nous</span> sommes toujours disponibles pour vous aider et répondre à toutes vos
            questions afin que vos vacances soient inoubliables.</h2>
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
                    <h4 class="fw-bold mb-4 poppins-medium text-capitalize">service personnalisé</h4>
                    <p class="mb-4 text-secondary poppins-regular"><span class="text-capitalize">nouse</span> nous
                      engageons à vous fournir un service personnalisé adapté à vos besoins spécifiques.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 p-0 border-top border-bottom border-start border-end">
                <div class="card border-0 bg-transparent">
                  <div class="card-body text-center p-5">
                    <img draggable="false" class="w-25 mb-3" src="{{ asset('images/icon/like.svg') }}" alt="like">
                    <h4 class="fw-bold text-capitalize mb-4 poppins-medium">une expertise de confiance</h4>
                    <p class="mb-4 text-secondary poppins-regular"><span class="text-capitalize">forts</span> de nos
                      années
                      d'expérience sur le marché immobilier de luxe, nous apportons des connaissances et une intégrité
                      inégalées à chaque transaction.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 p-0">
                <div class="card border-0 bg-transparent">
                  <div class="card-body text-center p-5">
                    <img draggable="false" class="w-25 mb-3" src="{{ asset('images/icon/building.svg') }}" alt="building">
                    <h4 class="fw-bold text-uppercase mb-4 poppins-medium">annonces exclusives</h4>
                    <p class="mb-4 text-secondary poppins-regular"><span class="text-capitalize">annonces</span>
                      exclusives
                      Nous vous proposons une sélection rigoureuse des plus belles propriétés disponibles.</p>
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
        découvrez nos séjours
      </h3>
      <h2 class="poppins-regular text-dark pt-2">
        <span class="text-capitalize">Une</span> sélection soignée des séjours luxueuses à Marrakech. Chaque villa allie
        élégance contemporaine et design marocain traditionnel.
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
            <h5 class="card-title text-capitalize">{{$product->product_name}}</h5>
            <p class="card-text text-muted text-capitalize">{{$product->product_location}}</p>
            <h4 class="text-secondary "><span class="text-dark">{{$product->product_price}}</span> <span class="text-dark">MAD</span> <sup>/ par nuit</sup></h4>
            <a target="_blank" href="{{ route('PropertyShow' , $product->id)}}" class="btn btn-information w-100">{{__('messages.more_info_button')}}</a>
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
          <h3 class="fs-5 mb-2 text-secondary text-uppercase poppins-medium">contact</h3>
          <h2 class="display-5 mb-4 mb-md-5 mb-xl-8 poppins-regular text-dark "><span
              class="text-capitalize">nous</span> sommes toujours à la recherche de nouveaux clients pour travailler
            avec eux. s'il vous plaît contactez-nous
            de l’une des manières suivantes.</h2>
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
                  <label for="fullname" class="form-label text-capitalize poppins-regular">nom et prénom <span
                      class="text-danger">*</span></label>
                  <input type="text" placeholder="Nom et Prénom" class="form-control poppins-regular" id="fullname"
                    name="fullname" value="" required>
                </div>
                <div class="col-12 col-md-6 mt-4">
                  <label for="email" class="form-label text-capitalize poppins-regular">email <span
                      class="text-danger">*</span></label>
                  <div class="input-group">
                    <input type="email" placeholder="Email" class="form-control poppins-regular" id="email" name="email"
                      value="" required>
                  </div>
                </div>
                <div class="col-12 col-md-6 mt-4">
                  <label for="phone" class="form-label text-capitalize poppins-regular">numéro de téléphone</label>
                  <div class="input-group">
                    <input type="tel" placeholder="numéro de téléphone" class="form-control poppins-regular" id="phone"
                      name="phone" value="">
                  </div>
                </div>
                <div class="col-12 mt-4">
                  <label for="adress" class="form-label text-capitalize poppins-regular">adresse <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control text-capitalize poppins-regular" placeholder="adresse"
                    id="adress" name="adress" value="" required>
                </div>
                <div class="col-12 mt-4">
                  <label for="message" class="form-label text-capitalize poppins-regular">message <span
                      class="text-danger">*</span></label>
                  <textarea class="form-control poppins-regular" placeholder="Message" id="message" name="message"
                    rows="3" required></textarea>
                </div>
                <div class="col-12 mt-4">
                  <div class="d-grid">
                    <button class="btn btn-lg text-white shadow text-capitalize poppins-regular large-btn"
                      type="submit">envoyer un message</button>
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
                  <h4 class="mb-2 text-capitalize poppins-medium">location</h4>
                  <p class="mb-2 poppins-regular">Venez nous rendre visite pour discuter.</p>
                  <hr class="w-50 mb-3 border-dark-subtle">
                  <address class="m-0 text-secondary poppins-regular">40000 Marrakech, Maroc</address>
                </div>
              </div>
              <div class="row mb-sm-4 mb-md-5">
                <div class="col-12 col-sm-6">
                  <div class="mb-4 mb-sm-0">
                    <div class="mb-3">
                      <img width="50" height="50" draggable="false" src="{{ asset('images/icon/phone.svg') }}" alt="phone">
                    </div>
                    <div>
                      <h4 class="mb-2">Téléphone</h4>
                      <p class="mb-2">Veuillez nous parler directement.</p>
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
                      <h4 class="mb-2">Email</h4>
                      <p class="mb-2">Veuillez nous écrire directement.</p>
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

    <script src="{{ asset('js/script.js')}}"></script>
</body>

</html>