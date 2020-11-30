@extends('/layouts/app', ['title' => 'Learn Tech'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Technologie', 'page' => 'Savoir faire / Technologie'])

@stop


@section('content')

  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/securite.jpg" alt="" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="https://fr.wikipedia.org/wiki/COBIT" target="blank">Analyse et gestion des risques des Systèmes d'Informations</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Nov. 29, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Le risque zero (0) est quasi inexistant en matière de confidentialité, d'integrité et de disponibilité des données. Il est important d'user de certaines methodologies (MEHARI, OCTAVE, etc) en vue de reduire au maximum et mieux gérer les menaces vis-àvis de vos actifs.
                </p>
                <div class="read-more">
                  <a href="https://fr.wikipedia.org/wiki/COBIT" target="blank">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/architecture.jpg" alt="architecture" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="https://www.blueway.fr/blog/architecture-si" target="blank">Archiectures des Systèmes</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Nov. 29, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Le deploiement de tout Système d'Information ou application métier ne peut être possibe que dans un environnement qui se doit d'être robust, bien sécurisé, élastique et surtout simple. Cet environement permet de rendre possible l'exploitation dudit système d'information ou application metier sur les plans fonctionnel, applicatif, infrastructure et operationnel.
                </p>
                <div class="read-more">
                  <a href="https://www.blueway.fr/blog/architecture-si" target="blank">En savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('assets/img/python.jpg') }}" alt="" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">La programmation en Python.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Nov. 30, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Utilisé aujourd'hui dans maintes de domains, Python est un langage de programmation informatique basé sur le concepte de la programmation orienté objet qui intervient dans l'administration système, la création des applications desktop et web (Flask, Django), la robotique, l'analyse de données (Data Science), etc.
                </p>
                <div class="read-more">
                  <a href="https://www.python.org/download/releases/3.0/" target="blank">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="https://www.php.net/" target="blank">PHP & le Back-End</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Nov. 30, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Aussi puissant que son logo (l'éléphant), le PHP est un langage de programmation objet orient back-end. A son aise, l'on est capable de concévoir et mettre en production des applications web de tout type. Les puissants framwork tel que Symfony et Laravel en sont conçus.
                </p>
                <div class="read-more">
                  <a href="https://laravel.com/" target="blank">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/database.jpg" alt="" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Base de données.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Nov. 30, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  La bonne maitrise d'un SGBD (Système de Gestion de Base de Données) Rélationnel reste indispenssable dans la structuration, la definition et la manipulation des données en vue d'une bonne gestion de celles-ci (MySQL, SQLite, PostgreSQL, Oracle).  
                </p>
                <div class="read-more">
                  <a href="https://www.mysql.com/fr/" target="blank">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog-6.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Administration Système des serveurs et reseaux.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Nov. 30, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Une bonne connaissance des systèmes d'exploitaon Linux et Windows (Client et Server) est necessairement important dans le deploiement des différentes applications métiers, leurs configuration et le managment de celle-ci.
                </p>
                <div class="read-more">
                  <a href="#">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

@stop