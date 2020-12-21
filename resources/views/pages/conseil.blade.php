@extends('/layouts/app', ['title' => 'Le monde des SI'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Le monde des SI', 'page' => 'Le monde des Systèmes d\'Information'])

@stop


@section('content')

  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-10 offset-lg-1 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="assets/img/internet.jpg" alt="" class="img-fluid img-internet">
              </div>

              <h2 class="entry-title">
                <a href="#">Decouvrons ensemble le monde des Systèmes d'Information</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('apropos') }}">Romaric G.</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">Dec. 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-earth"></i> <a href="#">Abidjan, Côte d'Ivoire</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Les systèmes d'information prennent une place de plus en plus importante dans nos vies. Des applications que nous utilisons tous les jours, aux objets connectés qui deviennent de plus en plus la norme (GPS, montre connectée, etc.), les informations sont produites en grand nombre et toujours plus rapidement. Les systèmes d'information doivent répondre chaque jour à de nouveaux challenges et améliorer constamment leur performance.
                  <br><br>
                  Je vous propose dans ce article d'en apprendre plus sur le monde des systèmes d'information. Vous découvrirez les fonctions d'un SI au sein d'une entreprise, les différents interlocuteurs qui évoluent dans cet écosystème et les missions qui y sont rattachées. Enfin, je vous parlerai des grands enjeux futurs que les SI seront amenés à rencontrer.
                </p>

                <p>
                  Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                </p>

                <blockquote>
                  <i class="icofont-quote-left quote-left"></i>
                  <p>
                    L'évolution technologique du monde rest basé sur le développement des systèmes d'information y compris le IOT.
                  </p>
                  <i class="las la-quote-right quote-right"></i>
                  <i class="icofont-quote-right quote-right"></i>
                </blockquote>

                <h3>Définissez ce qu'est un Système d'Information</h3>

                <p>
                  Si on regarde de plus près, le terme de système d’information (j’utiliserai dans la suite de ce cours le terme SI) a tendance à nous faire croire qu’il s’agit d’un système unique, généralement un logiciel.
                  <br><br>
                  En réalité, cette vision simpliste est erronée. Un SI est un environnement bien plus complexe. En effet, il faut le voir comme un ensemble de ressources, à la fois humaines, matérielles et immatérielles dont le rôle est de collecter, stocker, traiter et distribuer de l’information.
                </p>

                <p>
                  Prenons un exemple. <br>
                  Vous connaissez tous le service de cartographie de Google appelé Google Maps. Pour simplifier, c’est un site de cartographie en ligne qui vous permet de rechercher un lieu, n’importe où dans le monde, depuis la barre de recherche sur le site.
                </p>

                <img src="assets/img/google-map.jpg" class="img-fluid" alt="google-map"> <br>

                <p>
                  Eh bien en plus d’être un service de Google, Google Maps est un système d’information à part entière.
                </p>

                <h5>Mais qu'est-ce qui fait de ce service un SI ?.</h5>
                <p>
                  Parce que tout d’abord, il permet de :
                  <ul>
                    <li>collecter et stocker les données cartographiques prises par les satellites ;</li>
                    <li>les traiter en les combinant à vos recherches sur le site ;</li>
                    <li>et les distribuer, c’est-à-dire vous les afficher sur le site lors de vos recherches ;</li>
                  </ul>
                  Mais c’est aussi un système d’information parce que Google Maps est un ensemble de ressources humaines, matérielles et immatérielles :
                  <ul>
                    <li>des ressources <b>humaines</b>, car Google Maps c’est une équipe de développeurs, de cartographes, de géomètres, mais aussi les chauffeurs des voitures Google qui prennent les rues en photos et encore bien d’autres personnes !
                    </li>
                    <li>des ressources <b>matérielles</b>, car des ordinateurs, serveurs, caméras, satellites sont utilisés pour acquérir et stocker les données cartographiques.</li>
                    <li>enfin, des ressources <b>immatérielles</b> car Google Maps c’est aussi des photos satellites, des cartes, mais aussi des brevets créés et exploités par Google pour mettre en œuvre ce service.</li>
                  </ul>
                  <br>
                  La prochaine fois que vous utiliserez Google Maps pour retrouver votre chemin, vous saurez que vous utilisez un système d’information :)
                </p>

                <h3>Le rôle du système d'information.</h3>
                <p>
                  L’apparition d’Internet a eu un impact fort sur l’évolution technique des systèmes d´informations et de ses enjeux pour les entreprises. Aujourd'hui, le SI permet d'automatiser et de dématérialiser quasiment toutes les opérations incluses dans les activités ou procédures de notre vie quotidienne personnelle ou professionnelle.
                  <br><br>
                  Si je vous demande de m’expliquer ce qu’est un véhicule, il y a de fortes chances que vous me disiez que c’est un moyen de transport permettant d’aller d’un point A à un point B.
                  <br><br>
                  Vous avez parfaitement raison et sans le savoir, vous venez de me donner le rôle du système d’information.
                  <b>
                    Le SI est le véhicule des différents services d’une entreprise. En structurant les échanges, il les coordonne ainsi que les activités de l’organisation. Il lui permet ainsi d'atteindre ses objectifs stratégiques.
                  </b>
                  <br><br>
                  Comme nous venons de le voir, un SI est formé de l'ensemble de ressources (les personnes, les matériels, les logiciels, les procédures) permettant de mener les actions suivantes sur l'information : <br>
                  <b>(1) COLLECTER => (2) STOCKER => (3) TRAITER => (4) DIFFUSER</b>
                </p>
                <p>
                  Quel que soit son rôle et ce pourquoi il a était conçu, un SI est toujours construit sur la base des processus métiers d’une organisation. En clair, on se base sur la réalité, c’est-à-dire comment fonctionnent et travaillent les équipes de l’entreprise pour dire au SI ce qu’il doit faire et comment il doit le faire.
                </p>
                <p>
                  Il n’est pas rare qu’un SI soit en contact avec d’autres SI. Par exemple, lorsque les entreprises françaises ont pour obligation de faire tous les mois la Déclaration Sociale Nominative (DSN), les entreprises ne communiquent pas les données de leurs employés manuellement à l’administration. Leur logiciel de paie transmet directement ces données à l’administration en utilisant une API.
                </p>
                <p>
                  Dans ce cas, les SI en question doivent être capables de communiquer ensemble. On parle alors d’interopérabilité. Cette interopérabilité est possible grâce aux API.
                </p>

                <h5>Une API, c’est quoi ?</h5>
                <p>
                  API, est l’acronyme de « Application Programming Interface ». C’est une relation entre deux systèmes informatiques qui leur permettent de communiquer et d’échanger des informations.
                </p>
                <p>
                  Faisons une métaphore : une lampe a besoin d'électricité. Pour cela, le constructeur de la lampe utilise la prise électrique pour récupérer l’électricité. Il en est de même pour les API.
                </p>

                <h3>Les logiciels composant le système d'information</h3>
                <p>
                  Un SI est composé de différents logiciels en fonction des domaines d’activités de l’entreprise (commercial, ressources humaines, juridiques…). Ces logiciels servent à piloter le fonctionnement de l’organisation. On parle généralement d’application métier. C’est une application complète qui permet d’effectuer plusieurs tâches bien spécifiques à un domaine d’activité. On trouve par exemple des applications qui s’adressent aux professionnels de la santé ou encore aux distributeurs de pièces automobiles.
                </p>

                <h3>Résumons</h3>
                <p>
                  <ul>
                    <li>Le SI est un ensemble de ressources :</li>
                    <ol>
                      <li>humaines, car ce sont les Hommes qui conçoivent et font évoluer le SI ;</li>
                      <li>matérielles, car les informations collectées et produites par le SI doivent être stockées et accessibles de manière durable et stable ;</li>
                      <li>immatérielles, car le SI est composé de différents logiciels et programmes pour fonctionner.</li>
                    </ol>
                    <li>Le SI permet de collecter, stocker, traiter et diffuser l'information ;</li>
                    <li>Le SI est le véhicule des différents services d’une organisation. Il structure, coordonne les échanges et les activités d’une organisation ;</li>
                    <li>Il existe 3 types de logiciels : ERP, progiciel métier et progiciels spécifiques ;</li>
                    <li>Il est aligné sur la stratégie de l'organisation afin d’être utile.</li>
                  </ul>
                </p>
                
              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">
                  <i class="icofont-folder"></i>
                  <ul class="cats">
                    <li><a href="#">Business</a></li>
                  </ul>

                  <i class="icofont-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div>

                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div>

            </article><!-- End blog entry -->

            <div class="blog-author clearfix">
              <img src="assets/img/roma.jpg" class="rounded-circle float-left img-roma-article" alt="Romaric">
              <h4>Romaric G.</h4>
              <div class="social-links">
                <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
                <a href="https://instagram.com/#"><i class="icofont-linkedin"></i></a>
              </div>
              <p>
                C'est un réel plaisir pour moi de partager cet article avec vous, sur ce fabuleux monde des systèmes d'information afin que vous ayez une vision plus ou moins claire de celui-ci.
              </p>
            </div><!-- End blog author bio -->

            
          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Section -->


@stop