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
  <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
    <strong>MDB</strong>
  </a>
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
        <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
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
@yield('content')
    <!--Main Navigation-->

    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
