@extends('layouts.app')

@section('content')
<div id="intro" class="bg-image vh-100 shadow-1-strong">
  <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
    <source class="h-100" src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
  </video>
  <div class="mask"     style="
  background: linear-gradient(
    45deg,
    rgba(29, 236, 197, 0.7),
    rgba(91, 14, 214, 0.7) 100%
  );
">
    <div class="container d-flex align-items-center justify-content-center text-center h-100">
      <div class="text-white">
        <h1 class="mb-3">Hello World</h1>
        <a
          class="btn btn-outline-light btn-lg m-2"
          href="#crud"
          role="button"
          rel="nofollow"
          target="_self"
          >Entra</a>

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
  <section>
    <div class="row">
      <div class="col-md-6 gx-5 mb-4">
        <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
      </div>

      <div class="col-md-6 gx-5 mb-4">
        <h4><strong>Facilis consequatur eligendi</strong></h4>
        <p class="text-muted">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
          eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
          sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
        </p>
        <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
        <p class="text-muted">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
          nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
          alias, unde optio accusantium soluta, iusto molestiae adipisci et?
        </p>
      </div>
    </div>
  </section>
  <!--Section: Content-->

  <hr class="my-5" />

  <!--Section: Content-->
  <section class="text-center">
    <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

    <div class="row">
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
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the
              card's content.
            </p>
            <a href="#!" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/023.jpg"
              class="img-fluid"
            />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the
              card's content.
            </p>
            <a href="#!" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
              class="img-fluid"
            />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the
              card's content.
            </p>
            <a href="#!" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
    </div>
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
@endsection
