@extends('layouts.app')
@section('content')



<div class="jumbo" style="background-image: url('storage/images/ImmagineBack.jpg');">
  <section id='city-search'>
    <div class="content">
      <div class="form" id="form-copy">
        <div class="container-title">
          <h1>Cerca appartamenti in tutto il Mondo</h1>
        </div>
        <div class="form-group city-search">
          <input class="form-control" type="text" name="address" id="city" placeholder="Inserisci la città di destinazione" city-data="">
          {{-- <button class="btn btn-warning" type="submit" id="btn-search">invia</button> --}}
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
  <h2 class="sponsor-title text-center p-2">I nostri appartamenti in evidenza</h2>
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
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt3">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt4">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
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
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt3">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
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
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
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
                    <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
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
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt3">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt4">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
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
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="single-apt" id="apt3">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
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
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
                    </div>
                    <div class="apt-info p-3">
                      <h5>App Title</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div> 
                  </div>
                  <div class="single-apt" id="apt2">
                    <div class="apt-image">
                      <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
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
                    <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
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
        {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span> --}}
      </a>
    </div>
  </div>

  <h2 class="sponsor-title text-center p-2">I nostri punti di forza</h2>
  <div class="box-container">
    {{-- BOX APARTMENTS STATIC --}}
    <div class="single-apt">
      <div class="apt-image">
        <img class="house-image" class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
      </div>
      <div class="apt-info p-3">
        <h5>App Title</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
      </div> 
    </div>
    <div class="single-apt">
      <div class="apt-image">
        <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
      </div>
      <div class="apt-info p-3">
        <h5>App Title</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
    <div class="single-apt">
      <div class="apt-image">
        <img class="house-image" src="{{asset('storage/images/CASAPROVA.jpeg')}}" alt="">
      </div>
      <div class="apt-info p-3">
        <h5>App Title</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<section id="announce" style="background-image: url('storage/images/ImmagineAnnuncio1.jpg');">
  <div class="container-announce">
    <div class="announce-title">
      <h2>Publlica il tuo annuncio ed entra a far parte del mondo BoolBnb</h2>
    </div>
    <div class="btn btn-info button-announce">Pubblica il tuo annuncio!
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
