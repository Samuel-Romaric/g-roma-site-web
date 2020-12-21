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
              <h4><a href="{{ route('services') }}#developpement">Analyse - Conception - Déploiement de solution Applicatif.</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  Le langage informatique est l'élément le plus puissant de la technologie, c'est en lui que tout nos équipements trouvent leurs utilités. Notre mission est d'analyser, concevoir et deployer des solutions simples et adaptées à vos besoins afin que vous soyez plus competitif. 
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="analyse-risque">
            <div class="icon-box">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="{{ route('services') }}#analyse-risque">Analyse - Managment des Risques des Systèmes d'Information.</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  Confidentialité, Integrité et Disponibilité, sont les essences de la sécurité des données. Il devient imperatif de pouvoir évaluer le niveau de risque auxquels sont exposés vos actifs en vue de mieux les gérer en definssant de bonne politique de sécurité.
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="a">
            <div class="icon-box">
              <i class="icofont-database"></i>
              <h4><a href="{{ route('services') }}#a">Bases de données Rélationnelles.</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  Les Systèmes de Gestion de Base de Données Rélationnelles MySQL, SQLite, PostgreSQL et Oracle sont des composants indispenssables à la gestion et au traitement des informations générées lors de nos activités.
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="architecture">
            <div class="icon-box">
              <i class="icofont-architecture-alt"></i>
              <h4><a href="{{ route('services') }}#architecture">Architecture des Sytèmes d'Information.</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  Un architecte est depositair d'une methode et d'une vision. La mise en place d'une bonne architecture garantie la bonne exploitation de toutes vos applications metiers.
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="formation">
            <div class="icon-box">
              <i class="icofont-learn"></i>
              <h4><a href="{{ route('services') }}#formation">Formation - Renforcement de capacité</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  <strong>"Qui veut aller loin, menage sa monture".</strong> Pour être plus competitif, plusieurs formations vous sont offertent en informatique tel que: Dévéloppemet d'Application (PHP, MySQL, Python, Laravel, Django, etc), L'analyse des données (Python pour Data-Science) et des certifications internationnales (CSCU, CCNA, Microsoft, Linux, etc).
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0" id="web">
            <div class="icon-box">
              <i class="icofont-web"></i>
              <h4><a href="{{ route('services') }}#web">SEO - Marketing Digital - SEM</a></h4>
              <p class="text-justify">
                @if(Route::is('services'))
                  La SEO (Search Engin Optimization), et/ou la SEM (Search Engin Marketing) est un ensemble de technique qui permet d'améliorer la visibilité de votre site web ou activités sur le web. Toute notre expertise est à votre disposition dans ce domaines afin de réaliser vos plus belles ventes en développant votre présence en ligne. 
                @endif
              </p>
            </div>
          </div>          

        </div>

      </div>
    </section><!-- End Services Section -->
