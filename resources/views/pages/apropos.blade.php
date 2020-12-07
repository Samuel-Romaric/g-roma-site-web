@extends('/layouts/app', ['title' => 'Apropos'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Apropos', 'page' => 'Apropos de moi'])

@stop


@section('content')

  <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p class="font-italic">
              Je suis <strong>Romaric GUEI</strong>. Né en Côte d'Ivoire, où j'y ai fait une partie de mes études. Passioné d'informatique ce site web est l'une mes réalisations qui met en évidence mon petit savoir faire. Après plusieurs formations différentes, je trouve aujourd'hui la possibilité d'exercer dans les domaines suivant :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> La conception d'Application</li>
              <li><i class="ri-check-double-line"></i> Sécurité des systèmes d'informatique</li>
              <li><i class="ri-check-double-line"></i> La gestion de projet</li>
              <li><i class="ri-check-double-line"></i> La Formation en Informatique</li>
            </ul>
            <p class="font-italic">
              Comme le disait quelqu'un : "Qui veut aller loin, menage sa monture". C'est sur ces termes que je vous exhorte tout un chacun a être toujours diponible a apprendre car c'est en pocedant la bonne information que l'on parvient à de belle réalisation.
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
                <span>Développeur Web fullstack (PHP, CSS, MySQL, etc), Python | Analyste et Manager des Risques des Systèmes d'Information | Architect des Systèmes d'Information.</span>
                <p>Framework : Laravel, Bootstrap, JQuery, Flask, Django. | HTML, CSS, JavaScript, Python, PHP, XML, Shell Bash.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""><i class="ri-linkedin-box-fill"></i></a>
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
              <span class="skill">HTML 5 - CSS 3 (Bootstrap)<i class="val">72%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript - ES6 (JQuery, React) <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MERISE - Methodologie d'Analyse <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Gestion de projet digital<i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
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
              <span class="skill">OS (Linux, Windows Serveur - Client) - Shell Bash <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python (Flask, Djanjo) - Librairie Data Science<i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">SGBD MySQL, SQLite, PostgreSQL <i class="val">68%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

@stop