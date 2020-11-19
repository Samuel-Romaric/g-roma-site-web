<!-- Horizontal navigation bar -->
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="{{ route('home') }}">Romaric-G</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li class="{{ active('home') }}"><a href="{{ route('home') }}">Home</a></li>

          <li class="{{ active('services') }}"><a href="{{ route('services')}}">Services</a></li>
          <li class="{{ active('portfolio') }}"><a href="{{ route('portfolio') }}">Portfolio</a></li>
          <!-- <li class="{{ active('home') }}"><a href="pricing.html">Pricing</a></li> -->
          <li class="{{ active('formation') }}"><a href="{{ route('formation') }}">Formation</a></li>
          <li class="{{ active('blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
          <li class="{{ active('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>

          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="about.html">About Us</a></li>

              <li class="drop-down"><a href="#">Technologie</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>

              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>

              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

        </ul>

      </nav><!-- .nav-menu -->

      <a href="{{ route('home') }}" class="get-started-btn ml-auto">Get Started</a>

    </div>
  </header><!-- End Header -->

<!-- End to horizontal navigation bar -->