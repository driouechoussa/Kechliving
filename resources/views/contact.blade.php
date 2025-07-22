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

  <title>Kechliving - Contactez-nous</title>
</head>

<body>
  @include('components/navbar')


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
                        <a class="link-secondary text-secondary text-decoration-none" href="tel:+212690886339">+212 (690) 886339</a>
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