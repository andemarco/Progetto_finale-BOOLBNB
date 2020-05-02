@extends('layouts.app')
@section('content')
<section id="announce" style="background-image: url('https://www.esitur.com/images/Restyle/imageResized1920x1080/Val-di-fassa-viaggio-in-pullman-dalle-marche.jpg');">
  <div class="container-announce" id="sponsor-container">
    @if (session('no_insert'))
        <div class="alert alert-danger">
         Seleziona un piano per l'appartamento {{session('no_insert')->title}}
        </div>
    @endif
    @if (session('already_insert'))
        <div class="alert alert-danger">
         Appartamento {{session('already_insert')->title}} già sponsorizzato
        </div>
    @endif
    <div class="announce-title">
      <h2>Sponsorizza il tuo appartamento e triplica le prenotazioni!</h2>
    </div>
    <form id="payment-form" class="" action="{{route('host.apartments.sponsorstore', $apartment->id)}}" method="post">
      @csrf
      @method('POST')
      <div class="form-group">
        <select name="sponsors" class="form-control" id="subscription-plan">
          <option value="">Seleziona il tuo piano di sponsorizzazione</option>
        @foreach ($sponsors as $sponsor)
          <option value="{{$sponsor->id}}">{{$sponsor->name}} - {{$sponsor->price}}</option>
        @endforeach
        </select>
      </div>
      <section class="payment-form" hidden>
        <div class="payment-form-info">
          <p class="payment-form-info-paragraph">
            Sponsorizzando il tuo appartmento, il tuo annuncio sarà presente in homepage per la durata della promo scelta.
          </p>
        </div>
        <div class="bt-drop-in-wrapper">
        <div id="bt-dropin">
        </div>
        </div>
        <input id="nonce" name="payment_method_nonce" type="hidden" value="">
        <input id="token" name="token" type="hidden" value="{{$token}}">
        <button class="button" type="submit">Paga Sponsorizzazione</button>
      </section>
    </form>
  </div>
</section>
<footer class="footer">
  <div class="footer-copyright text-center py-3">© 2020 Copyright
    <a href="https://mdbootstrap.com/education/bootstrap/"> BoolBnB</a>
  </div>
</footer>
<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
<script src="{{asset('js/app_payment.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
@endsection