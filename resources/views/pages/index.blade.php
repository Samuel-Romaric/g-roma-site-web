@extends('/layouts/app', ['title' => 'Accueil'])

@section('slidebar')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Qui suis-je ?</h2>
              <p class="animate__animated animate__fadeInUp">Je suis un spécialiste diplômé des technologien de l'information, de la communication et de la securité de l'information. Un vaste domaine dans lequel j'évolue en étroit rélation avec leurdit sous domaines</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En Savoir plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Un service de best quality</h2>
              <p class="animate__animated animate__fadeInUp">Au terme du multiservice, l'on dira qu'ils sont de nature très varriés, de très haut qualité avec des coût defiant toute concurance. Certains seront véritablement surpris de faire face à de telle réalité</p>
              <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto">En Savoir plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Mon expérience</h2>
              <p class="animate__animated animate__fadeInUp">Une experience acquise au file du temps par le bias de maintes formations, essais et travaux de réalisation et surtout avec pour coeur  la volonté de laisser des traces dans l'histoire.</p>
              <a href="#portfolio" class="btn-get-started animate__animated animate__fadeInUp scrollto">En Savoir plus</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

@stop



@section('content')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Conception, Expertise et Consultance IT </h2>
            <h3>Une mission qui vise a accompager les entreprises, PME dans leur développemnt par la conception et le deploiement des solutions Technologiques.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Je suis <strong>Romaric GUEI</strong>, diplômé à la base d'informatique. Aujourd'hui, disponible au service des TPE, ONG, PME et bien d'autres type de structures en vue d'un accompagnement au sain de leurs activicté par le biais de divers services tel que :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Consultance - Conseil - Suivi</li>
              <li><i class="ri-check-double-line"></i> Analyse - Conception - Maintenance - Managment des SI</li>
              <li><i class="ri-check-double-line"></i> Managment de projet digital </li>
              <li><i class="ri-check-double-line"></i> Analyse et Managment des risques SI </li>
            </ul>
            <p class="font-italic">
              Aujourd'hui incontournable dans l'évolution de toutes activitées modernes, les Systèmes d'Information contribuent à l'élaboration d'une valeur ajouté au sein des entreprises.
            </p>
          </div>
        </div>

      </div>

    </section><!-- End About Section -->
    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Service</h2>
          <p>Mes services offerts</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="icofont-computer"></i>
              <h4><a href="#">Programmation</a></h4>
              <p><!--Détailé dans la section Services --></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="#">Analyse - Conception - Deploiement</a></h4>
              <p><!--Détailé dans la section Services --></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-image"></i>
              <h4><a href="#">Infographie - Web Desing</a></h4>
              <p><!--Détailé dans la section Services --></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-settings"></i>
              <h4><a href="#">Architecture de SI</a></h4>
              <p>
                <!--Détailé dans la section Services -->
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-earth"></i>
              <h4><a href="#">Securité - Administration système et réseau</a></h4>
              <p><!--Détailé dans la section Services --></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-tasks-alt"></i>
              <h4><a href="#">Gestion de projet digital</a></h4>
              <p><!--Détailé dans la section Services --></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
    
    @include('layouts.partials._portofolio_section')

@stop
