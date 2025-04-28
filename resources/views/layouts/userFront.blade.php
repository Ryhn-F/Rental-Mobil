<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
        .custom-card {
          transition: transform 0.3s ease, box-shadow 0.3s ease;
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
            <a class="navbar-brand fw-bold text-primary" href="#">RentalRy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Booking List</a>
                    </li>

                </ul>
                @auth
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle rounded-pill text-truncate" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="max-width: 150px;">
                     hi ,   {{ (Auth::user()->name) }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
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

        </div>

        <footer class="bg-dark text-white py-5">
            <div class="container">
              <div class="row">

                <!-- Brand & Social Media -->
                <div class="col-md-3 mb-4">
                  <h5 class="fw-bold">🟣 Revent</h5>
                  <div class="d-flex gap-2 mt-3">
                    <a href="#" class="text-white"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-twitter fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-linkedin fs-5"></i></a>
                  </div>
                </div>

                <!-- Column 1 -->
                <div class="col-md-2 mb-4">
                  <h6 class="fw-bold">Perks & Benefits</h6>
                  <ul class="list-unstyled">
                    <li>Life at Revent</li>
                    <li>Values</li>
                    <li>Design</li>
                    <li>Growth</li>
                    <li>Android</li>
                    <li>iOS</li>
                  </ul>
                </div>

                <!-- Column 2 -->
                <div class="col-md-3 mb-4">
                  <h6 class="fw-bold">Digital Transformation</h6>
                  <ul class="list-unstyled">
                    <li>Web Development</li>
                    <li>Smart Contract</li>
                    <li>Branding</li>
                    <li>dApps</li>
                    <li>Web3</li>
                    <li>DeFi</li>
                  </ul>
                </div>

                <!-- Column 3: Contact -->
                <div class="col-md-4 mb-4">
                  <h6 class="fw-bold">ESTABLISHED 2023</h6>
                  <p class="mb-1">hello@revent.com</p>
                  <p class="mb-1">www.revent.site</p>
                  <a href="#" class="text-white text-decoration-underline">Contact & Career Partner</a>
                </div>
              </div>

              <hr class="border-gray-700">

              <!-- Bottom Footer -->
              <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3">
                <p class="mb-2 mb-md-0 small">© 2024 REVENT. ALL RIGHTS RESERVED</p>
                <div class="d-flex gap-3 small">
                  <a href="#" class="text-white text-decoration-none">Home</a>
                  <a href="#" class="text-white text-decoration-none">About Us</a>
                  <a href="#" class="text-white text-decoration-none">Service</a>
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
