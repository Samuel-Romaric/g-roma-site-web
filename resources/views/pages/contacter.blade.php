@extends('/layouts/app', ['title' => 'Me Contacter'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Contact', 'page' => 'Contact'])

@stop

@section('content')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254236.50960242172!2d-4.119753928796737!3d5.348776065776789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan!5e0!3m2!1sfr!2sci!4v1606840168856!5m2!1sfr!2sci" width="600" height="450" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

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

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nome & Prenom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse e-mail" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Soumettre le Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@stop