@extends('layouts.app')
@section('content')

<div class="jumbo" style="background-image: url('storage/images/ImmagineBack.jpg');">
  <section id='city-search'>
    <div class="content">
      <div class="form" id="form-welcome">
        <div class="container-title">
          <h1>Cerca appartamenti in tutto il Mondo</h1>
        </div>
        <div class="form-group city-search">
          <input class="form-control-landing" type="text" name="address" id="city" placeholder="Inserisci la città di destinazione" city-data="">
          <a class="btn btn-warning" id="btn-search"><i class="fas fa-search"></i></a>
        </div>
        <div class="form-group">
          <input id="latitude" class="form-control" type="text" name="latitude"  hidden>
        </div>
        <div class="form-group">
          <input id="longitude" class="form-control" type="text" name="longitude" hidden>
        </div>
      </div>
    </div>
  </section>
</div>

<section id='sponsored-apt'>
<div class="apt-container pt-5">
  <h2 class="sponsor-title text-center">I nostri appartamenti in evidenza</h2>
  <div class="box-apt">
    <div class="box-container">
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <i class="fas fa-angle-left"></i>
      </a>

      {{-- BOX APARTMENTS SPONSORED --}}
      <div class="row">
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-none d-lg-block">
                <div class="slide-box">
                  <div class="single-apt" id="apt1">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider1.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider2.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt3">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider3.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt4">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider4.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-none d-md-block d-lg-none">
                <div class="slide-box">
                  <div class="single-apt" id="apt1">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider1.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider2.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt3">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider3.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-none d-sm-block d-md-none">
                <div class="slide-box">
                  <div class="single-apt" id="apt1">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider1.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider2.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-block d-sm-none">
                <div class="single-apt" id="apt1">
                  <div class="apt-image">
                    <img class="house-image" src="{{asset('storage/images/slider1.jpeg')}}" alt="">
                  </div>
                  <div class="apt-info p-3">
                    <h5>App Title</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                  </div> 
                </div>
              </div>  
            </div>
            <div class="carousel-item">
              <div class="d-none d-lg-block">
                <div class="slide-box">
                  <div class="single-apt" id="apt1">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider4.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider5.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt3">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider6.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt4">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider7.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-none d-md-block d-lg-none">
                <div class="slide-box">
                  <div class="single-apt" id="apt1">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider4.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider5.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt3">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider6.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-none d-sm-block d-md-none">
                <div class="slide-box">
                  <div class="single-apt" id="apt1">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider4.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/slider5.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-block d-sm-none">
                <div class="single-apt" id="apt1">
                  <div class="apt-image">
                    <img class="house-image" src="{{asset('storage/images/slider4.jpeg')}}" alt="">
                  </div>
                  <div class="apt-info p-3">
                    <h5>App Title</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                  </div> 
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <i class="fas fa-angle-right"></i>
      </a>
    </div>
  </div>  
</div>
</section>
<section id="details">
  <div class="container">
      <h2 class="sponsor-title text-center">I nostri punti di forza</h2>
    <ul class="details">
      <div class="row">
        <li class="col-lg-4 col-md-6 col-sm-6">
          <i class="details-icon fas fa-user-lock"></i>
          <div class="details-text">
          <h4>Prenotazioni Sicure</h4>
          <p>Con la formula prenotazione sicura avrai un supporto dedicato a tua disposizone in ogni momento.</p>
          </div>
        </li>
        <li class="col-lg-4 col-md-6 col-sm-6">
          <i class="details-icon fas fa-mug-hot"></i>
          <div class="details-text">
          <h4>Come a casa tua</h4>
          <p>Tutti i servizi che vuoi... Wi-Fi, climatizzatore, piscina, giardino, visuale panorama e altro ancora.</p>
          </div>
        </li>
        <li class="col-lg-4 col-md-12 col-sm-12">
          <i class="details-icon fas fa-coins"></i>
          <div class="details-text">
          <h4>Sponsor fai da te</h4>
          <p>Sei un host? Con il programma "Sponsor-APT", puoi proporre la tua esperienza con un click.</p>
          </div>
        </li>
      </div>
    </ul>
  </div>
</section>
<section id="announce" style="background-image: url('storage/images/ImmagineAnnuncio1.jpg');">
  <div class="container-announce">
    <div class="announce-title">
      <h2>Pubblica il tuo annuncio ed entra a far parte del mondo BoolBnb</h2>
    </div>
    <div class="btn button-announce">Pubblica!
      <a href="apartments/create"></a>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="footer-copyright text-center py-3">© 2020 Copyright
    <a href="https://mdbootstrap.com/education/bootstrap/"> BoolBnB</a>
  </div>
</footer>
      <script src="{{asset('js/app_search.js')}}"></script>
      <script src="{{asset('js/app.js')}}"></script>
@endsection




