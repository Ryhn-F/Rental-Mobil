<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
        .custom-card {
          transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        
      .custom-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .custom-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.8);
      }

      .whatsapp-float {
        position: fixed;
        bottom: 100px;
        right: 20px;
        background-color: #25D366;
        color: white;
        border-radius: 30px;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        z-index: 9999;
        transition: transform 0.3s ease;
      }

      .whatsapp-float:hover {
        transform: scale(1.05);
        background-color: #1ebe5d;
      }

      .whatsapp-float i {
      font-size: 24px;
      margin-right: 8px;
      }

      .whatsapp-text {
        font-weight: bold;
        white-space: nowrap;
        font-size: 14px;
      }


        .custom-card:hover {
          transform: scale(1.05);
          box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.8);
        }

      </style>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental Mobil </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('./css/HomePage.css') }}">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('Front/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('Front/css/custom.css')}}" />


  </head>
  <body>
    <section class="bg-light position-relative   ">
        <div
        class="container">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
            <a class="navbar-brand fw-bold text-primary" href="#">Drivezy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About Us</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Booking List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/contact">Contact</a>
                    </li>

                </ul>
                @auth
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle rounded-pill text-truncate" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="max-width: 150px;">
                     hi ,   {{ (Auth::user()->name) }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                       <li>

                                <a href="/profile" class="dropdown-item"> My Profile</a>

                        </li>
                        <li>

                                <a href="/logout" class="dropdown-item"> Logout</a>

                        </li>
                    </ul>
                </div>
            @else
                <a href="/login" class="btn btn-dark rounded-pill">Sign In</a>
            @endauth
            </div>
        </nav>

          <!-- Header-->
        @yield('content')
        <a href="https://wa.me/6285718247039" class="whatsapp-float" target="_blank">
          <i class="bi bi-whatsapp"></i>
          <span class="whatsapp-text">Need help?</span>
        </a>

        </div>

        <footer class="bg-dark text-white py-5">
            <div class="container">
              <div class="row">

                <!-- Brand & Social Media -->
                <div class="col-md-3 mb-4">
                  <h5 class="fw-bold">🟣 Drivezy</h5>
                  <div class="d-flex gap-2 mt-3">
                    <a href="#" class="text-white"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-twitter fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-linkedin fs-5"></i></a>
                  </div>
                  <p class="mt-3">Follow us on social media to stay updated with our latest offers and services.</p>
                </div>

                <!-- Column 1 -->
                <div class="col-md-2 mb-4 justify-content-center align-items-center">
                  <h6 class="fw-bold">Perks & Benefits</h6>
                  <ul class="list-unstyled text-white">
                    <li class="mb-3"><i class="bi bi-car-front-fill me-2"></i>
                      Armada Baru
                    </li>
                    <li class="mb-3"><i class="bi bi-clock-history me-2"></i>
                      24 Jam Siap Jalan
                    </li>
                    <li class="mb-3"><i class="bi bi-cash-coin me-2"></i>
                      Harga Terjangkau
                    </li>
                    <li class="mb-3"><i class="bi bi-phone-fill me-2"></i>
                      Booking Mudah
                    </li>
                  </ul>
                </div>

                <!-- Column 2 -->
                <div class="col-md-3 mb-4">
                  <h6 class="fw-bold">Locations</h6>
                  <ul class="list-unstyled">
                    <li class="mb-3"><i class="bi bi-geo-alt"></i>
                      Jl. Daan Mogot KM.11 RT.01/RW.04, RT.1/RW.4, Kedaung Kali Angke, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11710
                    </li>
                    
                  </ul>
                </div>

                <!-- Column 3: Contact -->
                <div class="col-md-4 mb-4">
                  <h6 class="fw-bold">ESTABLISHED 2025</h6>
                  <p href='#' class="mb-1 ">
                    <i class='bi bi-envelope fill'></i> rentals@drivezy.com
                  </p>
                  <a href='#' class="mb-1 text-white text-decoration-underline">
                    <i class='bi bi-globe fill'>  </i>www.drivezy.id
                  </a>
                </div>
              </div>

              <hr class="border-gray-700">

              <!-- Bottom Footer -->
              <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3">
                <p class="mb-2 mb-md-0 small">© 2024 Drivezy. ALL RIGHTS RESERVED</p>
                <div class="d-flex gap-3 small">
                  <a href="/home" class="text-white text-decoration-none">Home</a>
                  <a href="/about" class="text-white text-decoration-none">About Us</a>
                  <a href="#" class="text-white text-decoration-none">Booking List</a>
                  <a href="/contact" class="text-white text-decoration-none">Contact</a>
                  <a href="/service" class="text-white text-decoration-none">Service</a>
                  <a href="/syarat" class="text-white text-decoration-none">Syarat dan Ketentuan</a>
                  <a href="/faq" class="text-white text-decoration-none">FAQ</a>
                </div>
              </div>
            </div>
          </footer>


    </section>

      <!-- Bootstrap core JS-->
      <script src="{{asset('Front/js/bootstrap.js')}}"></script>
      <!-- Core theme JS-->
      <script src="{{asset('js/scripts.js')}}"></script>

    </body>


</html>
