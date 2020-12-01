  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <!-- Use image same logo -->
      <a href="{{ route('home') }}" class="logo"><img src="{{ asset('assets/img/team/roma.jpg') }}" alt="" class="img-fluid img-logo-size"></a>

      <nav class="nav-menu d-none d-lg-block nav-menu-left">

        <ul>
          <li class="{{ active('home') }}"><a href="{{ route('home') }}"><i class="icofont-home"></i> Acceuil</a></li>

          <li class="{{ active('portfolio') }}"><a href="{{ route('portfolio') }}"><i class="icofont-computer"></i> Portfolio</a></li>

          <li class="drop-down"><a href="#"><i class="icofont-unique-idea"></i> Savoir Faire</a>
            <ul>
              <li class="{{ active('technologie') }}"><a href="{{ route('technologie') }}"><i class="icofont-code"></i> Technologies</a></li>
              <li class="{{ active('managment') }}"><a href="{{ route('managment') }}"><i class="icofont-users"></i> Managments</a></li>
            </ul>
          </li>

          <li class="{{ active('conseil') }}"><a href="{{ route('conseil') }}"><i class="icofont-world"></i> Decouvrons</a></li>
          <li class="{{ active('services') }}"><a href="{{ route('services') }}"><i class="icofont-spanner"></i> Services</a></li>
          <li class="{{ active('apropos') }}"><a href="{{ route('apropos') }}"><i class="icofont-business-man-alt-1"></i> Apropos</a></li>

        </ul>

      </nav><!-- .nav-menu -->

      <a href="{{ route('contact') }}" class="get-started-btn ml-auto">Me Contacter</a>

    </div>
  </header><!-- End Header -->