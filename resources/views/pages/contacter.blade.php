@extends('/layouts/app', ['title' => 'Me Contacter'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Contact', 'page' => 'Contact'])

@stop

@section('content')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <!-- Location by google Mapp -->
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254236.50960242172!2d-4.119753928796737!3d5.348776065776789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan!5e0!3m2!1sfr!2sci!4v1606840168856!5m2!1sfr!2sci" width="600" height="450" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div><!-- End location by google Mapp -->

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Locatisation:</h4>
                <p>Yopougon toit-rouge, Abidjan, Côte d'Ivoire</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>samuelromaric2015@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Téléphone:</h4>
                <p>+225 77 934 561</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ route('contact') }}" method="POST" role="form" class="">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group {{ $errors->has('name') ?? 'has-error'}}">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom & Prenom"   value="{{ old('name') }}" required="" /> 
                  <div class="validate">
                    {!! $errors->first('name', '<p>:message</p>') !!}
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse e-mail" value="{{ old('email') }}" required="" />
                  <div class="validate">
                    {!! $errors->first('email', '<p>:message</p>') !!}
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" value="{{ old('subject') }}" required />
                <div class="validate">
                  {!! $errors->first('subject', '<p>:message</p>') !!}
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5"  placeholder="Message" required="">{{ old('message') }}</textarea>
                <div class="validate">
                  {!! $errors->first('message', '<p>:message</p>') !!}
                </div>
              </div>
              @if(isset($result))
                <div class="text-center text-primary">
                  {{ $result }}
                </div>
              @endif
              <div class="text-center">
                <button type="submit" class="btn btn-lg btn-danger" formnovalidate="">
                  <i class="icofont-tick-mark"></i> Soumettre le Message &raquo;
                </button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@stop