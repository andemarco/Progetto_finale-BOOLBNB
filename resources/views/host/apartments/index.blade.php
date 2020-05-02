@extends('layouts.app')

@section('content')

    @if (session('delete'))
        <div class="alert alert-danger">
          You deleted the apartment: {{session('delete')->id}}
        </div>
    @endif
  <div class="jumbo" style="background-image: url('https://st3.idealista.it/news/archivie/2019-08/casa_malaga_fachada.jpg?sv=dFqJvXT7');">
    <section id='city-search'>
      <div class="content">
        <div class="form" id="form-copy">
          <div class="container-title">
            <h1>Monitora, modifica e sponsorizza i tuoi appartamenti.</h1>
          </div>
        </div>
      </div>
    </section>
  </div>
  @if ($apartments->isEmpty())
  <section id="announce" style="background-image: url('storage/images/ImmagineAnnuncio1.jpg');">
    <div class="container-announce">
      <div class="announce-title">
        <h2>Non sei ancora un host? <br>Pubblica il tuo annuncio ed entra a far parte del mondo BoolBnb</h2>
      </div>
      <div class="btn btn-info button-announce">Pubblica!
      </div>
    </div>
  </section>
  @else
  <div class="container">
    <section id="host_apartments">
      <h2>I tuoi annunci</h2>
      <div class="container_apartments">
        @foreach ($apartments as $apartment)
          <div class="single_apartment">
            <div class="single_apartment_title">
              <h5>{{$apartment->title}}</h5>
            </div>
            <div class="single_apartment_image">
              <img src="https://images-1.casa.it/360x265/listing/3d8c6961724b6692931a5efd8ab5c0dd" alt="">
            </div>
            <div class="single_apartment_buttons">
              <a href="apartments/{{$apartment->id}}">Anteprima</a>
              <a href="apartments/{{$apartment->id}}/sponsor">Sponsorizza</a>
              <a href="apartments/{{$apartment->id}}/edit">Modifica</a>
              <a href="">Elimina</a>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </div>
  <section id="announce" style="background-image: url('https://www.welcomekado.com/wp-content/uploads/2018/10/affittare-casa-vacanza.jpg');">
    <div class="container-announce">
      <div class="announce-title">
        <h2>Guarda le statistiche dei tuoi appartamenti</h2>
      </div>
      <div class="btn btn-info button-announce" id="chart_button">Guarda!
      </div>
    </div>
  </section>
  <div class="chart-container" style="position:fixed; background-color: white; z-index:999999;">
    <canvas id="canvas"></canvas>
    <a id="close_chart">X</a>
  </div>
  @endif
  <hr class="hr-create">
  <div class="steps-text">
    <h1>Domande frequenti</h1>
  </div>
  <div class="box-question">
    <div class="question">
      <div class="box-faq">
        <h5 class="faq">Chi può diventare un host di Boolbnb?</h5>
        <p class="ask">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus amet possimus labore facilis, iure illo molestias sint nam doloribus excepturi sapiente officia! Consequuntur eveniet quis beatae, cumque nemo fugit voluptas! <i class="far fa-times-circle"></i></p>
      </div>
      <div class="box-faq">
        <h5 class="faq">Su quale protezione posso contare per i danni all'alloggio?</h5>
        <p class="ask">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus amet possimus labore facilis, iure illo molestias sint nam doloribus excepturi sapiente officia! Consequuntur eveniet quis beatae, cumque nemo fugit voluptas! <i class="far fa-times-circle"></i></p>
      </div>
    </div>
    <div class="question">
      <div class="box-faq">
        <h5 class="faq">Che cosa viene richiesto agli ospiti prima di prenotare?</h5>
        <p class="ask">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus amet possimus labore facilis, iure illo molestias sint nam doloribus excepturi sapiente officia! Consequuntur eveniet quis beatae, cumque nemo fugit voluptas! <i class="far fa-times-circle"></i></p>
      </div>
      <div class="box-faq">
        <h5 class="faq">Come dovrei scegliere il prezzo per il mio alloggio?</h5>
        <p class="ask">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus amet possimus labore facilis, iure illo molestias sint nam doloribus excepturi sapiente officia! Consequuntur eveniet quis beatae, cumque nemo fugit voluptas! <i class="far fa-times-circle"></i></p>
      </div>
    </div>
    <div class="question">
      <div class="box-faq">
        <h5 class="faq">Quanto cosa pubblicare un annuncio?</h5>
        <p class="ask">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus amet possimus labore facilis, iure illo molestias sint nam doloribus excepturi sapiente officia! Consequuntur eveniet quis beatae, cumque nemo fugit voluptas! <i class="far fa-times-circle"></i></p>
      </div>
      <div class="box-faq">
        <h5 class="faq">In che modo Boolbnb mi aiuta nell'impostazione dei prezzi?</h5>
        <p class="ask">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus amet possimus labore facilis, iure illo molestias sint nam doloribus excepturi sapiente officia! Consequuntur eveniet quis beatae, cumque nemo fugit voluptas! <i class="far fa-times-circle"></i></p>
      </div>
    </div>
  </div>
    <footer class="footer">
      <div class="footer-copyright text-center py-3">© 2020 Copyright
        <a href="https://mdbootstrap.com/education/bootstrap/"> BoolBnB</a>
      </div>
    </footer>
    <script src="{{asset('js/toggle.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
@endsection