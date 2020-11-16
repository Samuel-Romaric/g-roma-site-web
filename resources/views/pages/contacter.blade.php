@extends('/layouts/app')

@section('content')

<br><br><br>
  
  <center><h1><span class="label label-default">Me Contacter</span></h1></center>

  <a href="#" id="pop" class="btn btn-info" data-toggle="popover" data-content="C'est tout simple à faire !" title="Test du Popover">
    Cliquez sur moi pour le popover
  </a>

<!-- 
  <canvas id="dessin" width="500" height="200" style="canvas {outline: 1px solid green}"></canvas>
  <script>
    var draw = document.getElementById("dessin");
    var context = draw.getContext("2d");
    context.fillStyle = "#0000ff";
    context.arc(0,0,200,0,Math.PI*2,true);
    context.shadowBlur = 50;
    context.shadowColor = "black";
    context.fill();
    context.lineWidth = 12;
    context.strokeStyle = "white";
    context.stroke();
  </script> 
-->

<br><br>

<div class="col-md-offset-3">
  
  <form class="horizontal-form" role="form">
    
    <div class="row">
      <div class="col-md-4 form-group">

        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
          <input type="text" name="" class="form-control" placeholder="Nom prenom" autofocus="">
        </div>
        
      </div>

      <div class="col-md-4 form-group">
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
          <input type="tel" name="" class="form-control" placeholder="+225 99 000 000">
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-8 form-group">
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
          <input type="text" name="" class="form-control" placeholder="adresse_email@exemple.com">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 form-group">
        <label class="control-label">Fixer un RDV</label>
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          <input type="date" class="form-control text-center">
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 form-group">
        <textarea class="form-control" placeholder="Saisisez votre préocupation ici svp!" rows="8"></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <button class="btn btn-primary btn-block"><span class="glyphicon glyphicon-send"> Envoyer</button>
      </div>
    </div>

  </form>

</div>

@stop