@extends('/layouts/app', ['title' => 'Managment'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Managment', 'page' => 'Savoir / Managment'])

@stop


@section('content')

  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/gestion-de-projet.jpg" alt="" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="https://fr.wikipedia.org/wiki/Mod%C3%A8le_en_cascade" target="blank">Gestion de projet digital</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p class="text-justify">
                  En dehors du cadre professionnel, la vie est faite de projet, qu'il soit la recherche d'un nouvel emploie, l'achat ou la construction d'une maison ou même le repas que l'on souhaite prendre ce midi. En effet, un projet est une idée que l'on project materialiser. Celui-ci demande un coût une durée et une certaine qualité du livrable. Ainsi, la réalisation d'un projet implique différentes methodologie de gestion comme les methodologies classique (cascade, en V, ...) ou agile (scrum) selon le type de projet (Normal ou Inovatif)
                </p>
                <div class="read-more">
                  <a href="https://www.atlassian.com/fr/software/jira?&aceid=&adposition=&adgroup=107480679089&campaign=10595773382&creative=454987074400&device=c&keyword=%2Bprojet%20%2Bgestion&matchtype=b&network=g&placement=&ds_kids=p55785228762&ds_e=GOOGLE&ds_eid=700000001550060&ds_e1=GOOGLE&gclid=EAIaIQobChMI-KuihvCq7QIVDrvVCh0FtwAAEAAYASAAEgLFDfD_BwE&gclsrc=aw.ds" target="blank
                  ">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/gestion-quotidienne.jpg" alt="manager" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="https://reussir-son-management.com/manager-son-equipe-au-quotidien/" target="blank">Managment d'une équipe au quotidien</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p class="text-justify">
                  La gestion d’équipe détermine la capacité d’un gestionnaire à mener un groupe de personnes dans l’exécution d’un travail. En effet, gérer de façon efficace une équipe implique un soutien permanent des membres de l’équipe. Ce qui pourra s’expliquer par une meilleure communication avec l’équipe et l’évaluation de ses membres. Avec pour objectif, que ces derniers puissent fonctionner de façon professionnelle, efficace tout en demeurant dans l’objectif fixé par l’entreprise.
                </p>
                <div class="read-more">
                  <a href="https://reussir-son-management.com/manager-son-equipe-au-quotidien/" target="blank">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/DevOps.jpg" alt="devops" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="https://fr.wikipedia.org/wiki/Devops" target="blank">Metodologie DevOps.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p class="text-justify">
                  L'évolution d'une structure repose sur la bonne marche de son service d'exploitation au niveau de ses applications metiers qui doivent être stable. Or le bon fonctionnement des applications métiers est garantis par les developpeurs en charge de son évolution en apportant des fonctionnalitées, gerant les bugs et les versions. DevOp est une methode qui vise à mettre en place de bonne pratiques afin de garantir une bonne exploitation des applications metiers ainsi qu'accroître la productivité.
                </p>
                <div class="read-more">
                  <a href="https://fr.wikipedia.org/wiki/Devops" target="blank">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

@stop