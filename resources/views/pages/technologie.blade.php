@extends('/layouts/app', ['title' => 'Technologie'])

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
                <a href="https://fr.wikipedia.org/wiki/COBIT" target="blank">Analyser et Gérez des risques des Systèmes d'Informations</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Nov. 29, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p class="text-justify">
                  Le risque zero (0) est quasi inexistant en matière de confidentialité, d'integrité et de disponibilité des données au sein d'une entreprise. Or, à chaque instant qui soit l'on genère d'enorme quantité de données à sécuriser. Il est donc important pour les managers d'avoir un aperçu des risques de perte de données afin de mieux gérer les menaces qui pèse sur leurs différents actifs.
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
                <p class="text-justify">
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
                <p class="text-justify">
                  Utilisé aujourd'hui dans maintes de domains ou secteurs d'activités, Python est un langage de programmation informatique basé sur le concepte de la programmation orienté objet. Aujourd'hui, faisant partir des technologies les plus utilisé, Pyhton est utilisé dans la conception de site ou aplications web robuste avec ses selèbres framework Flask et Django, dans la robotique et l'intelligence artificielle, la Data Science , etc.
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
                <img src="assets/img/coding.jpg" alt="" class="img-fluid img-learn">
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
                <p class="text-justify">
                  Aussi puissant que sa mascotte (l'éléphant), le PHP est un langage de programmation à la fois procedural et orienté objet utilisé dans le back-end. A son aise, l'on est capable de concévoir des sites et applications web de tout type. Les puissants framwork tel que Symfony et Laravel en sont conçus. Il vous permet de gérer tout ce qui est traitemnt entre le front-end (Interface Utilisateur) et la base de données.
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
                <a href="blog-single.html">Système de Gestion de Base de données.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Nov. 30, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p class="text-justify">
                  Tout comme son nom l'indique, les Systèmes d'Information on pour coeur le traitement de l'information. La bonne maitrise d'un Système de Gestion de Base de Données Rélationnel reste indispenssable dans la structuration, la definition et la manipulation des données en vue d'une bonne gestion de celles-ci (MySQL, SQLite, PostgreSQL).  
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
                <img src="assets/img/blog-6.jpg" alt="" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="https://linux.goffinet.org/administration/scripts-shell/" target="blank">Administration Système serveurs reseaux (Shell).</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Nov. 30, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p class="text-justify">
                  Une bonne connaissance des systèmes d'exploitaon Linux et Windows (Client et Server) est necessairement important dans le deploiement des différentes applications métiers, leurs configuration et le managment de celle-ci. Cette action nécessite des connaissances en matière de la programmation shell en vu d'automatiser des actions.
                </p>
                <div class="read-more">
                  <a href="https://linux.goffinet.org/administration/scripts-shell/" target="blank">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

@stop