@extends('layouts.app')
@section('content')
  @if ($apartments->isEmpty())
  <section id="announce" style="background-image: url('storage/images/ImmagineBack.jpg');">
    <div class="container-announce">
      <div class="announce-title">
        <h2>Non sei ancora un host? <br>Pubblica il tuo annuncio ed entra a far parte del mondo BoolBnb</h2>
      </div>
      <div class="btn btn-info button-announce"><a href="{{route('host.apartments.create')}}">Pubblica!</a>
      </div>
    </div>
  </section>
  @else
  <div class="jumbotron index-jumbo" style="background-image: url('storage/images/ImmagineBack.jpg'); background-position: center">
    <section id='city-search'>
      <div class="content">
        <div class="form" id="form-copy">
          <div class="container-title-host">
            <h1>Monitora, modifica e sponsorizza i tuoi appartamenti</h1>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="">
    <section id="host_apartments">
      <h2>I tuoi annunci</h2>
      <div class="container_apartments">
        @if (session('delete'))
              <div class="alert alert-danger">
                Hai cancellato l'appartamento.
              </div>
          @endif
        @foreach ($apartments as $apartment)
          <div class="single_apartment">
            <div class="single_apartment_insert">
              <div class="single_apartment_image">
                <img src="{{asset('storage/' . $apartment->image_path)}}" alt="">
              </div>
              <div class="single_apartment_details">
                <h3>{{$apartment->title}}</h3>
                <h6><strong>Indirizzo: </strong>{{$apartment->address}}</h6>
                <p><strong>Prezzo:</strong> €{{$apartment->price_for_night}}/notte</p>
                <small><strong>Visualizzazioni:</strong> {{$apartment->views}}</small><br>
                @if (!$apartment->messages->isEmpty())
                  <small><strong>Messaggi ricevuti: </strong>{{$apartment->messages->count()}}</small><br>
                @else
                  <small><strong>Messaggi ricevuti: </strong>0</small><br>
                @endif
                <small><strong>Inserito il:</strong> {{$apartment->created_at}}</small>
              </div>
              <div class="single_apartment_action">
                <div class="dropleft">
                  <button class="action-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Azioni
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('host.apartments.show', $apartment->id)}}">Dettagli</a>
                    <a class="dropdown-item" href="{{route('host.apartments.sponsor', $apartment->id)}}">Sponsorizza</a>
                    <a class="dropdown-item" href="{{route('host.apartments.edit', $apartment->id)}}">Modifica</a>
                    <form action="{{route('host.apartments.destroy', $apartment)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <div class="dropdown-divider"></div>
                        <button class="dropdown-item" type="submit">Elimina</button>
                    </form>
                  </div>
                </div>
              </div>
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
        <p class="ask">Nella maggior parte delle aree geografiche è facile diventare host di Boolbnb, e la creazione di un annuncio è sempre gratuita. Case e appartamenti interi, stanze private, case sull'albero e castelli sono solo alcuni dei tipi di alloggi che gli host hanno condiviso su Boolbnb.
          Per ulteriori informazioni su cosa ci si aspetta dagli host, consulta gli standard della community di Boolbnb relativi a sicurezza, affidabilità e standard di ospitalità, che aiutano gli host a ricevere recensioni grandiose dagli ospiti.</p>
      </div>
      <div class="box-faq">
        <h5 class="faq">Su quale protezione posso contare per i danni all'alloggio?</h5>
        <p class="ask">La Garanzia Host di Boolbnb fornisce all'host una protezione fino a un massimo di 1.000.000 USD per danni all'alloggio tutelato nel raro caso in cui l'ospite provochi dei danni superiori al deposito cauzionale o quando quest'ultimo non è stato previsto.
        Il programma Garanzia Host non copre contanti, titoli, oggetti da collezione, opere d'arte rare, gioielli, animali domestici o responsabilità civile. Consigliamo agli host di conservare gli oggetti preziosi in un posto sicuro o rimuoverli del tutto quando affittano la propria abitazione. Il programma inoltre non copre le perdite o i danni all'alloggio dovuti all'usura.</p>
      </div>
    </div>
    <div class="question">
      <div class="box-faq">
        <h5 class="faq">Che cosa viene richiesto agli ospiti prima di prenotare?</h5>
        <p class="ask">Gli ospiti devono fornire alcune informazioni prima di poter inviare una richiesta di prenotazione tramite la nostra piattaforma. La comunicazione di tali dati è obbligatoria per questo scopo. Queste informazioni ci aiutano ad assicurarci che tu sappia chi ospiterai e come contattarlo.
        I requisiti degli ospiti di Boolbnb includono: • nome completo • indirizzo email • numero di telefono confermato • messaggio di presentazione • accettazione delle tue regole della casa • informazioni di pagamento
        Chiediamo agli ospiti di caricare una foto del profilo, ma questa procedura non è obbligatoria. Puoi inoltre richiedere che gli ospiti forniscano un documento d'identità per prenotare il tuo spazio.</p>
      </div>
      <div class="box-faq">
        <h5 class="faq">Come dovrei scegliere il prezzo per il mio alloggio?</h5>
        <p class="ask">Spetta a te stabilire il prezzo del tuo annuncio. Per aiutarti a decidere, puoi cercare annunci simili nella tua città o quartiere per farti un'idea dei prezzi di mercato. Costi aggiuntivi > - Spese di pulizia: puoi includere le spese di pulizia nel tuo prezzo giornaliero oppure aggiungerle nelle tue impostazioni di prezzo. > - Altri costi: per addebitare dei costi extra non inclusi nelle tue tariffe (come ad esempio per il check-in tardivo o per accogliere animali domestici), per prima cosa devi comunicare questi potenziali addebiti agli ospiti prima che prenotino; quindi utilizzerai il nostro Centro Soluzioni per richiedere un pagamento sicuro degli stessi.</p>
      </div>
    </div>
    <div class="question">
      <div class="box-faq">
        <h5 class="faq">Quanto cosa pubblicare un annuncio?</h5>
        <p class="ask">Registrarsi su Boolbnb e pubblicare il tuo annuncio è completamente gratuito.
        Una volta ricevuta una prenotazione, ti addebitiamo i costi del servizio per gli host di Boolbnb, che generalmente ammontano al 3% del totale, per coprire i costi di funzionamento della nostra attività. </p>
      </div>
      <div class="box-faq">
        <h5 class="faq">In che modo Boolbnb mi aiuta nell'impostazione dei prezzi?</h5>
        <p class="ask">Lo strumento Prezzi smart di Boolbnb consente di alzare o abbassare i tuoi prezzi automaticamente in base alla variazione della domanda per annunci come il tuo.
        Spetta sempre a te la responsabilità di stabilire i tuoi prezzi, perciò i Prezzi smart vengono controllati da altre impostazioni dei prezzi scelte da te, e puoi comunque modificare i prezzi giornalieri in qualsiasi momento.
        I Prezzi smart si basano sulla tipologia e sulla posizione dell'alloggio, sulla stagionalità, sulla domanda e su altri fattori (come ad esempio degli eventi che si tengono nella tua zona). </p>
      </div>
    </div>
  </div>
    <footer class="footer">
      <div class="footer-copyright text-center py-3">© 2020 Copyright
        <a href="https://mdbootstrap.com/education/bootstrap/"> BoolBnB</a>
      </div>
    </footer>
    {{-- <script src="{{asset('js/app.js')}}"></script>     --}}
    <script src="{{asset('js/toggle.js')}}"></script>
@endsection
