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
                <p>
                  Un projet est une idée que l'on project materialiser. Celui-ci demande un coût une durée et une certaine qualité du livrable. Ainsi, la réalisation d'un projet implique différentes methodologie de gestion comme les methodologies classique (cascade, en V, ...) ou agile (scrum) selon le type de projet (Normal ou Inovatif)
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
                <img src="assets/img/gestion-quotidienne.jpg" alt="" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Managment d'une équipe au quotidien</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/DevOps.jpg" alt="" class="img-fluid img-learn">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Metodologie DevOps.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  L'évolution d'une structure repose sur la bonne marche de son service d'exploit au niveau de ses applications metiers qui doivent être stable. Or le bon fonctionnement des applications métiers est garantis par les developpeurs en charge de son évolution en apportant des fonctionnalitées, gerant les bugs et les versions. DevOp est une methode qui vise à mettre en place de bonne pratiques afin de garantir un bonne exploitation.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">En Savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

@stop