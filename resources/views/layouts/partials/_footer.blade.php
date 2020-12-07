  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Romaric G. S.</h3>
              <p>
                Yopougon, Toit-Rouge <br>
                Abidjan, Côte d'Ivoire<br><br>
                <strong>Phone:</strong> +225 77 934 561<br>
                <strong>Email:</strong> samuelromaric2015@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens Usuels</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('portfolio') }}">Portofolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('conseil') }}">Univers IT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contacter</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Mes Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion de projet</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Development d'appli.</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Archectures des SI.</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Analyse & Gesion de risques SI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Formations</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Nos Nouvelles</h4>
            <p>Veuillez laisser votre addresse mail dans ce champ ci-dessous affin de pouvoir recevoir Mes News</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Souscrire">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Romaric-G</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('layouts.partials.script')
  