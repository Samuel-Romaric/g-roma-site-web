@extends('/layouts.app', ['title' => 'Mes Services'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Services', 'page' => 'Services'])

@stop

@section('content')

	<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Service</h2>
          <p>Mes Services</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="icofont-computer"></i>
              <h4><a href="#">Programmation</a></h4>
              <p>Le langage informatique (Python, PHP, Java, etc) est l'élément le plus puissant en matière de technologie. C'est en lui que se definie toute la valeur de tout nos terminaux, qu'ils soient fixe ou mobile</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="#">Analyse - Conception - Deploiement</a></h4>
              <p>La conception d'un système d'information ne peut être possible sans une bonne definition et analyse du domaine d'étude. Ansi, MERSIE, UML, IDA réalisent le plan de conception</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-image"></i>
              <h4><a href="#">Infographie - Web Desing</a></h4>
              <p>Que serait l'apparance du web sans le Design, sans la participation des graphistes au service du beau? Toute la beauté d'un site repose sur les épaules d'une bonne inspiration</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-settings"></i>
              <h4><a href="#">Architecture de SI</a></h4>
              <p>Un architecte, c’est avant tout le dépositaire d’une méthode et d’une vision. <!-- ***** --></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-earth"></i>
              <h4><a href="#">Securité - Administration système et réseau</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-tasks-alt"></i>
              <h4><a href="#">Gestion de projet digital</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

@stop