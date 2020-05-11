<h1 align="center">BOOLBNB - Progetto Finale</h1>
<h2 align="center">Progetto finale ispirato ad AirBnb che permette di registrarsi al sito, ricercare appartamenti, inserire appartamenti, filtrare i risultati e sponsorizzare gli annunci</h2>


### HomePage - Inserimento località.

<img width="1280" alt="HomePage" src="https://user-images.githubusercontent.com/57673747/81567712-fa324080-939c-11ea-9db0-b949b7e20b46.png">

### Risultati - Filtro ricerca.

<img width="1280" alt="Ricerca e Filtra" src="https://user-images.githubusercontent.com/57673747/81567723-00c0b800-939d-11ea-911c-d2e561e029ad.png">

### Inserisci appartamento

<img width="1280" alt="Inserisci" src="https://user-images.githubusercontent.com/57673747/81567761-133af180-939d-11ea-9b92-0201004600fb.png">

### Modifica appartamento

<img width="1280" alt="Modifica" src="https://user-images.githubusercontent.com/57673747/81567729-04ecd580-939d-11ea-9a84-f6b6e07406bb.png">

### Sponsorizza appartamento

<img width="1279" alt="sponsorizza" src="https://user-images.githubusercontent.com/57673747/81567744-09b18980-939d-11ea-96d0-8be6eb111b7b.png">


Il progetto è il risutato di un percorso di studi, partito da zero, con Boolean Careers tramite cui è stato possibile mettere in pratica le seguenti tecnologie: 
- HTML
- SCSS/SASS
- JAVASCRIPT/JQUERY
- PHP
- MYSQL
- LARAVEL 7

<hr>

# Documento di progetto

## Introduzione

BoolBnB è una applicazione per trovare e gestire l’affitto di appartamenti.
Attraverso BoolBnB i proprietari di appartamento possono inserire le informazioni degli appartamenti che vogliono affittare per cercare utenti interessati.
Gli utenti che vogliono mettere in affitto un appartamento devono registrarsi alla piattaforma; una volta registrati hanno la possibilità di inserire uno o più appartamenti.
Gli utenti interessati ad un appartamento, utilizzando i filtri di una apposita pagina di ricerca, vedono una lista di possibili appartamenti e cliccando su ognuno possono vedere una pagina di dettaglio.
Una volta trovata l’appartamento desiderato, l’utente interessato può contattare l’utente proprietario per fare domande.

Inoltre, i proprietari di un appartamento possono decidere di pagare per sponsorizzare l’annuncio del proprio appartamento per fare in modo che il loro annuncio sia maggiormente in evidenza rispetto a quelli non sponsorizzati.
Tipi di Utenti
Definiamo i seguenti tipi di utente che possono utilizzare BoolBnB:
Utente proprietario registrato (UPR): un utente proprietario che ha effettuato la registrazione
Utente proprietario registrato con appartamento (UPRA): un utente che ha effettuato la registrazione e ha inserito nel sistema almeno una appartamento
Utente interessato (UI): un qualsiasi utente del sito, non registrato

## Requisiti Visivi

L’aspetto estetico di BoolBnB deve essere ispirato al sito www.airbnb.com
Non deve essere una copia ma una fonte di ispirazione da cui prendere spunto per quanto riguarda colori, font, elementi di interazione etc
Lista delle pagine minime
La seguente lista è una lista non completa delle pagine necessarie al funzionamento dell’applicazione con i relativi mockup.
I mockup rappresentano una possibile presentazione dei dati e non sono l’unico modo con cui possono essere rappresentati.
Qui il link: https://docs.google.com/presentation/d/19ox-mnz_KIZS9P1K7MPbEoVrnjH6FnLH0-oH0NRgzN0/edit#slide=id.g27fb29ff30898801_127

Homepage(Mockup1): offre la possibilità di ricercare appartamenti nel database. Inoltre permette un accesso veloce alle pagine dettaglio degli appartamenti in evidenza
Pagina di Ricerca(Mockup2): permette di visualizzare i risultati di ricerca, ogni risultato permetterà l’accesso alla pagina di dettaglio di dell’appartamento. Inoltre è possibile raffinare la ricerca modificando tutti i parametri di ricerca
Pagine Dettaglio Appartamento(Mockup3): permette di visualizzare tutti i dettagli disponibili per un appartamento. Inoltre è possibile scrivere un messaggio al proprietario dell’appartamento
Pagina Statistiche Appartamento(Mockup4): permette di visualizzare le statistiche sugli appartamenti messi in affitto, una pagina per appartamento.
Pagine Sponsorizzazione(Mockup5): tramite questo pannello è possibile sponsorizzare un singolo appartamento, selezionando la promozione e inserendo i dettagli della carta di credito.

## Requisiti Tecnici

(RT1) Client-side Validation: tutti gli input inseriti dell’utente devono essere controllati client-side (oltre che server-side) per un controllo di veridicità (es. un numero di stanze deve essere positivo)
(RT2) Salvataggio informazioni di geografiche: i dati riguardanti l’ubicazione degli appartamenti devono essere salvati sul database con latitudine e longitudine. Per ottenere latitudine e longitudine a partire da un indirizzo e allo stesso modo visualizzare il punto sulla mappa, utilizzare tomtom: https://developer.tomtom.com/
(RT3) Sistema di Pagamento: il sistema di pagamento da utilizzare è braintree (https://www.braintreepayments.com/ ). Il sistema permette di simulare pagamenti senza essere approvati formalmente e senza utilizzare vere carte di credito.
(RT4) Il sito deve essere responsive: il sito deve essere correttamente visibile da desktop e da smartphone.

## Requisiti Funzionali
Nel dettaglio, la piattaforma deve soddisfare i seguenti requisiti funzionali (RF) che vengono dettagliati nelle pagine successive:

### (RF1) Permettere ai proprietari di appartamento di registrarti alla piattaforma.
### (RF2) Permettere ai proprietari di appartamento registrati di aggiungere un appartamento alla piattaforma
### (RF3) Permette ai visitatori di ricercare una appartamento
### (RF4) Permettere ai visitatori di vedere i dettagli di un appartamento
### (RF5) Permettere ai visitatori di scrivere al proprietario di un appartamento per chiedere informazioni
### (RF6) Permettere ai proprietari di appartamento registrati di vedere le richieste ricevute
### (RF7) Permettere ai proprietari di appartamento registrati di vedere statistiche riguardo gli annunci dei propri appartamenti
### (RF8) Permettere ai proprietari di appartamento registrati di sponsorizzare il propria appartamento



