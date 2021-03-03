<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Laravel 7 Hello World </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <!--Main Navigation-->
    <header>
      <style>
        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #intro {
            margin-top: -58.59px;
          }
        }
        .navbar .nav-link {
          color: #fff !important;
        }
      </style>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <!-- Navbar brand -->
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="#intro">Home</a>
              </li>

            </ul>

            <ul class="navbar-nav d-flex flex-row">
              <!-- Icons -->
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://github.com/jimipulsar?tab=repositories" rel="nofollow" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Background image -->
      <div id="intro" class="bg-image vh-100 shadow-1-strong">
       <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
         <source class="h-100" src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
       </video>
       <div class="mask"     style="background: linear-gradient(45deg,rgba(29, 236, 197, 0.7),rgba(91, 14, 214, 0.7) 100%);">
         <div class="container d-flex align-items-center justify-content-center text-center h-100">
           <div class="text-white">
             <h1 class="mb-3">Hello World</h1>
             <a class="btn btn-outline-light btn-lg m-2"
               href="#crud"
               role="button"
               rel="nofollow"
               target="_self">Visualizza Lista</a>
               <a class="btn btn-outline-light btn-lg m-2" href="/login" target="_blank" role="button">Loggati</a>
           </div>
         </div>
       </div>
     </div>
      <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5" id="crud">
      <div class="container">
        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>
          <div class="row">
            @foreach($users as $user)
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                      class="img-fluid"
                    />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <p class="card-text">
                    {{$user->email}}
                    </p>
                    <a href="#!" class="btn btn-primary">Button</a>
                  </div>
                </div>
            </div>
            @endforeach
          </div>
          <hr>
              {{$users->links()}}
        </section>
        <!--Section: Content-->
      </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
