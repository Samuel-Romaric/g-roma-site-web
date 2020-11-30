  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <!-- Use image same logo -->
      <a href="{{ route('home') }}" class="logo"><img src="{{ asset('assets/img/team/roma.jpg') }}" alt="" class="img-fluid img-logo-size"></a>

      <nav class="nav-menu d-none d-lg-block nav-menu-left">

        <ul>
          <li class="{{ active('home') }}"><a href="{{ route('home') }}">Acceuil</a></li>

          <li class="{{ active('portfolio') }}"><a href="{{ route('portfolio') }}">Portfolio</a></li>

          <li class="drop-down"><a href="#">Formations</a>
            <ul>
              <li class="{{ active('technologie') }}"><a href="{{ route('technologie') }}">Technologies</a></li>
              <li class="{{ active('managment') }}"><a href="{{ route('managment') }}">Managments</a></li>
            </ul>
          </li>

          <li class="{{ active('conseil') }}"><a href="{{ route('conseil') }}">Conseil</a></li>
          <li class="{{ active('services') }}"><a href="{{ route('services') }}">Services</a></li>
          <li class="{{ active('apropos') }}"><a href="{{ route('apropos') }}">Apropos</a></li>

        </ul>

      </nav><!-- .nav-menu -->

      <a href="{{ route('contact') }}" class="get-started-btn ml-auto">Me Contacter</a>

    </div>
  </header><!-- End Header -->