<!-- Horizontal navigation bar  -->
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/team/roma.jpg') }}" class="img-fluid img-logo-size" alt="">
        </a>
      </h1>
      
      <nav class="nav-menu d-none d-lg-block nav-menu-left">

        <ul>
          <li class="{{ active('home') }}"><a href="{{ route('home') }}">Accueil</a></li>

          <li class="{{ active('portfolio') }}"><a href="{{ route('portfolio') }}">Portfolio</a></li>

          <li class="drop-down"><a>Formations</a>
            <ul>
              <li class="{{ active('technologie') }}"><a href="{{ route('technologie') }}">Technologie</a></li>
              <li class="{{ active('managment') }}"><a href="{{ route('managment') }}">Managment</a></li>
              <li class=""><a href="">Autres</a></li>
            </ul>
          </li>
          
          <li class="{{ active('conseil') }}"><a href="{{ route('conseil') }}">Conseil</a></li>
          <li class="{{ active('partenaires') }}"><a href="{{ route('partenaires') }}">Partenaires</a></li>
          <li class="{{ active('apropos') }}"><a href="{{ route('apropos') }}">Apropos</a></li>

        </ul>

      </nav><!-- .nav-menu -->

      <a href="{{ route('contact') }}" class="get-started-btn ml-auto">Me Contacter</a>

    </div>
  </header><!-- End Header -->
  
  <!-- End to horizontal navigation bar -->
