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
              <a href="">Anteprima</a>
              <a href="">Sponsorizza</a>
              <a href="">Modifica</a>
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
    <footer class="footer">
      <div class="footer-copyright text-center py-3">© 2020 Copyright
        <a href="https://mdbootstrap.com/education/bootstrap/"> BoolBnB</a>
      </div>
    </footer>
@endsection