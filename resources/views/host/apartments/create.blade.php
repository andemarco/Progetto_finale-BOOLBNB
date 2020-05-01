@extends('layouts.app')
@section('content')
{{-- fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js" integrity="sha256-NP9NujdEzS5m4ZxvNqkcbxyHB0dTRy9hG13RwTVBGwo=" crossorigin="anonymous"></script>
    <div class="jumbo-create">
      <div class="box-jumbo-create">
        <div class="border-text">
          <h1>DIventa un host Boolbnb e inizia a guadagnare</h1>
        </div>
      </div>
    </div>
    <div class="box-rent">
      <div class="rent">
        <h3>Perchè affittare su Boolbnb?</h3>
        <p>Indipendentemente dal tipo di alloggio o stanza che vuoi condividere, Boolbnb rende semplice e sicuro ospitare dei viaggiatori. Spetta a te il controllo completo della disponibilità, dei prezzi, delle regole della casa e della modalità di interazione con gli ospiti.</p>
      </div>
      <div class="rent">
        <h3>Perchè affittare su Boolbnb?</h3>
        <p>Indipendentemente dal tipo di alloggio o stanza che vuoi condividere, Boolbnb rende semplice e sicuro ospitare dei viaggiatori. Spetta a te il controllo completo della disponibilità, dei prezzi, delle regole della casa e della modalità di interazione con gli ospiti.</p>
      </div>
    </div>
    <hr>
    <div class="steps-text">
      <h1>Ospitare in 3 passaggi</h1>
    </div>
    <div class="box-steps">
      <div class="box-check">
        <div class="icon-box">
          <i class="far fa-check-circle"></i>
        </div>
        <h3>Pubblica il tuo annuncio gratuitamente</h3>
        <p>Pubblica qualsiasi alloggio senza addebiti di registrazione, da un salotto condiviso a una seconda casa e a tutto quello che c'è nel mezzo.</p>
      </div>
      <div class="box-check">
        <div class="icon-box">
          <i class="far fa-check-circle"></i>
        </div>
        <h3>Pubblica il tuo annuncio gratuitamente</h3>
        <p>Pubblica qualsiasi alloggio senza addebiti di registrazione, da un salotto condiviso a una seconda casa e a tutto quello che c'è nel mezzo.</p>
      </div>
      <div class="box-check">
        <div class="icon-box">
          <i class="far fa-check-circle"></i>
        </div>
        <h3>Pubblica il tuo annuncio gratuitamente</h3>
        <p>Pubblica qualsiasi alloggio senza addebiti di registrazione, da un salotto condiviso a una seconda casa e a tutto quello che c'è nel mezzo.</p>
      </div>
    </div>
    <div class="container box-create-edit">
    <div class="row">
      <form action="{{route('host.apartments.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input class="form-control @error('title') is-invalid @enderror" type="text" name="title">
            @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="description">Descrizione</label>
          <input class="form-control @error('description') is-invalid @enderror" type="text" name="description">
          @error('description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        {{-- FLEX SERVICE --}}
      <div class="services-box-create">
        <div class="form-group flex-column">
          <label for="number_of_rooms">Numeri di stanze</label>
          <input class="form-control input-text  @error('number_of_rooms') is-invalid @enderror" type="text" name="number_of_rooms" min="1" value="1">
          @error('number_of_rooms')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group flex-column">
          <label for="number_of_bath">Numeri di bagni</label>
          <input class="form-control input-text @error('number_of_bath') is-invalid @enderror" type="text" name="number_of_bath" min="1" value="1">
          @error('number_of_bath')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group flex-column">
          <label for="number_of_beds">Numeri di letti</label>
          <input class="form-control input-text @error('number_of_beds') is-invalid @enderror" type="text" name="number_of_beds" min="1" value="1">
          @error('number_of_beds')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group flex-column">
          <label for="meters">Metri</label>
          <input class="form-control input-text @error('meters') is-invalid @enderror" type="text" name="meters">
          @error('meters')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>
        <div class="form-group">
          <label for="address">Via</label>
          <input id="address" class="form-control @error('address') is-invalid @enderror" type="text" name="address">
          @error('address')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="search-box">
            <ul id="address-list">
            </ul>
            <button class="btn btn-primary mt-2 btn-search" type="button">Search</button>
          </div>
        </div>
        <div class="form-group">
          <input id="latitude" class="form-control" type="text" name="latitude" hidden>
        </div>
        <div class="form-group">
          <input id="longitude" class="form-control" type="text" name="longitude" hidden>
        </div>
        <div class="form-group">
          <label for="price_for_night">Prezzo per notte</label>
          <input class="form-control @error('price_for_night') is-invalid @enderror" type="text" name="price_for_night">
          @error('price_for_night')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="published">Options</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="published">
            <option selected>Scegli</option>
            <option value="0">Non Pubblicato</option>
            <option value="1">Pubblica</option>
          </select>
        </div>
        {{-- SERVICES --}}
        <div class="form-group box-services">
          <label for="services">Servizi</label>
          <div class="all-services">
            @foreach ($services as $service)
            <div class="checkbox-services">
              <span>{{$service->name}}</span>
              <input type="checkbox" name="services[]" value="{{$service->id}}">
            </div>
            @endforeach
          </div>
        </div>
        <div class="form-group">
           <label for="images">Immagine</label>
           <input type="file" class="@error('image_path') is-invalid @enderror" name="image_path" accept="image/*">
            @error('image_path')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Salva</button>
      </form>
    </div>
  </div>
@endsection
<script src="{{asset('js/app.js')}}"></script>











