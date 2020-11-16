<!-- Debut de la barre de navigation horizontal -->
<header class="navbar-fixed-top">

  <div class="haut-nav">
    <img src="{{ asset('/images/barre.png') }}" style="width: 10%; height: 60px">
    <div class="pull-right">
      <a class="btn btn-default btn-rond" href="{{ route('home') }}">Bouton 1</a>
      <a class="btn btn-warning btn-rond" href="{{ route('home') }}">Bouton 2</a>
      <a class="btn btn-default btn-rond" href="{{ route('home') }}">Bouton 3</a>
    </div>
  </div>

  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">Samuel</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{ activeUrl('home')}}"> <a href="{{ route('home') }}">Accueil</a> </li>
        <li class="{{ activeUrl('formation')}}"> <a href="{{ route('formation') }}">Formation</a> </li>
        <li class="{{ activeUrl('competence')}}"> <a href="{{ route('competence') }}">Competences</a> </li>
        <li class="{{ activeUrl('experience')}}"> <a href="{{ route('experience') }}">Experiences</a> </li>
        <li class="{{ activeUrl('contacter')}}"> <a href="{{ route('contacter') }}">Me Contacter</a> </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li role="presentation" class="dropdown-header">Techologies</li>
            <li><a href="#">Sécurité des SI</a></li>
            <li><a href="#">Archithecture des SI</a></li>
            <li><a href="#">Dévéloppement</a></li>
            <li class="divider"></li>
            <li role="presentation" class="dropdown-header">Managment</li>
            <li><a href="#">Managment quotidien</a></li>
            <li><a href="#">Gouvernance SI</a></li>
            <li><a href="#">Gestion de Projet digital</a></li>
            <li><a href="#">DevOps</a></li>
            <li class="divider"></li>
            <li><a href="#">Réalisation</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="input-group">
          <input type="text" style="width:150px" class="input-sm form-control" placeholder="Recherche">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-primary btn-sm">
              <span class="glyphicon glyphicon-eye-open"></span>Chercher
            </button>
          </span>
        </div>
      </form>
    </div>
  </nav>
  
</header>
<!-- Fin de la barre de navigation horizontal -->