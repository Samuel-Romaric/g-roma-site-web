    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Service</h2>
          <p>Mes services offerts</p>
        </div>

        <div class="row">
          <div class="col-md-6" id="developpement">
            <div class="icon-box">
              <i class="icofont-code"></i> 
              <h4><a href="{{ route('services') }}#developpement">Analyse - Conception - Déploiement de solution Applicatif</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  Le langage informatique est l'élément le plus puissant de la technologie, c'est en lui que tout nos équipements trouvent leur utilité. Notre mission est d'analyser, concevoir et deployer des solutions simples et adaptées à vos besoins. 
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="analyse-risque">
            <div class="icon-box">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="{{ route('services') }}#analyse-risque">Analyse - Gestion des Risques des Système d'Information</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  Confidentialité, Integrité et Disponibilité, sont les essences de la sécurité des données. Il devient imperatif de pouvoir évaluer le niveau de risque auxquels sont exposés vos actifs afin de mieux les gérer en definssant de bonne politique de sécurité.
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="a">
            <div class="icon-box">
              <!-- <i class="icofont-image"></i> -->
              <i class="icofont-database"></i>
              <h4><a href="{{ route('services') }}#a">Bases de données Rélationnelles</a></h4>
              <p>
                @if(Route::is('services'))
                  Les Systèmes de Gestion de Base de Données Rélationnelles MySQL, SQLite, PostgreSQL et Oracle sont des composants indispenssables à la gestion et au traitement des informations générées lors de nos activités.
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="architecture">
            <div class="icon-box">
              <!-- <i class="icofont-settings"></i> -->
              <!-- <i class="icofont-server"></i> -->
              <i class="icofont-architecture-alt"></i>
              <h4><a href="{{ route('services') }}#architecture">Architecture des Sytèmes d'Information</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  Un architecte est depositair d'une methode et d'une vision. La mise en place d'une bonne architecture garantie la bonne exploitation de toutes vos applications metiers.
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="formation">
            <div class="icon-box">
              <i class="icofont-earth"></i>
              <h4><a href="{{ route('services') }}#formation">Formation - Renforcement de capacité</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  Aucune productivité n'est possible sans une bonne formation personnel. Cette mission vise à vous offrir de bonnes formations en informatique dans le domaine des certification internationnalles.
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="g-projet">
            <div class="icon-box">
              <i class="icofont-network"></i>
              <h4><a href="{{ route('services') }}#g-projet">Réseau - Système Client / Serveur</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  L'integration de solution en matière de technologie se résume en la connaissance des environements de travail tel que Windows (client/Server) et Linux (debian, Ubuntu, Red Hat). 
                @endif
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
