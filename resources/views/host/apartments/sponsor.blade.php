@extends('layouts.app')
@section('content')
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
  <div class="container">
    <h1>Stai sponsorizzando {{$apartment->title}}</h1>
  </div>
  <div class="container">
    Scegli tra le nostre soluzioni:
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
        <h2 class="payment-form-text">Riepilogo della sponsorizzazione</h3>
        <div class="payment-form-info">
          <p class="payment-form-info-paragraph">
            La sponsorizzazione permetter&agrave; al tuo appartamento di avere la massima visibilit&agrave; e nelle ricerche verr&agrave; posizionato tra le prime proposte
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
  <script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
  <script src="{{asset('js/app_payment.js')}}"></script>
@endsection