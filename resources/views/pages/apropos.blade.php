@extends('/layouts/app', ['title' => 'Blog'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Apropos', 'page' => 'Apropos de moi'])

@stop


@section('content')

  <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          
          <div class="col-lg-12 pt-4 pt-lg-0">
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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Un passioné en mode Appretissage</p>
        </div>

        <div class="row">

          <div class="col-lg-12">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/team/roma.jpg') }}" class="img-fluid img-team-size" alt=""></div>
              <div class="member-info">
                <h4>Romaric GUEÏ</h4>
                <span>Dev. Web fullstack (PHP, CSS, JavaScript, MySQL, etc), Python3, Shell Bash | Consultant en sécurité des Systèmes d'informations</span>
                <p>Framework : Laravel, Bootstrap, JQuery, Flask, Django. | </p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Mes Competences</h2>
          <p>Voyons quelques competences</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML - CSS (Bootstrap, etc)<i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript - ES6 (JQuery, React) <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Analyse et Gestion des Risques SI (Meari, EBIOS, ...) <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP (Laravel) <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">OS (Linux, Windows Serveur - Client, MacOS) <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python (Flask, Djanjo) - Librairie Data Science<i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

@stop