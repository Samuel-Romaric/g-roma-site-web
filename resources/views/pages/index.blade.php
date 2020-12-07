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
              <p class="animate__animated animate__fadeInUp">Je suis un spécialiste diplômé des technologies de l'information, de la communication et de la securité de l'information. Un vaste domaine dans lequel j'évolue en étroit rélation avec leurdit sous domaine</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En Savoir plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Les meilleurs services qui soient</h2>
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
            <h3>Une mission qui vise a accompager les entreprises, PME dans leur développemnt par l'analyse, la conception et le deploiement des solutions Technologiques.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Je suis <strong>Romaric G.</strong>, passioné des technologies. Aujourd'hui, disponible au service des TPE, ONG, PME, start-up et bien d'autres type de structures en vue d'un accompagnement au sain de leurs activicté par le biais de divers connaissances en tant que :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Consultant SI / Freelance</li>
              <li><i class="ri-check-double-line"></i> Analyste programmeur</li>
              <li><i class="ri-check-double-line"></i> Gestionnaire de projet digital </li>
              <li><i class="ri-check-double-line"></i> Analyste et Manager des risques SI </li>
            </ul>
            <p class="font-italic">
              Aujourd'hui incontournable dans l'évolution de toutes activitées modernes, les Systèmes d'Information contribuent à l'élaboration d'une valeur ajouté au sein des entreprises.
            </p>
          </div>
        </div>

      </div>

    </section><!-- End About Section -->
    
    @include('layouts.partials._services')
    
    @include('layouts.partials._portofolio_section')

@stop
