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

    <title>Kechliving - {{__('messages.contact')}}</title>
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

      <section class="py-3 py-md-5 py-xl-8 mt-5" id="contact"> <!-- contact -->
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
          <h2 class="display-5 mb-4 mb-md-5 mb-xl-8  text-dark ">
            <span class="display-5 mb-4 mb-md-5 mb-xl-8  text-dark ">
              {{__('messages.contact_section_subtitle')}}
            </span>
           </h2>
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
                    <input type="tel" placeholder="+212 600 000 000" class="form-control \" id="phone"
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
                    <button class="btn btn-lg text-white shadow text-capitalize large-btn"
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
</body>
</html>