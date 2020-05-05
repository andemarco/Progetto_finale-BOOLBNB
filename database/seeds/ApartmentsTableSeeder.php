<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Apartment;

use Faker\Generator as Faker;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            $newApartment = new Apartment;
            $newApartment->user_id = 1;
            $newApartment->title = 'Residence Cima';
            $newApartment->description = 'Se quando immagini la tua vacanza al mare in Romagna non riesci a pensare ad altro che a tranquillità, relax e comodità, allora gli appartamenti del Residence Cima a Viserbella di Rimini sono la soluzione ottimale!';
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 3;
            $newApartment->meters = 4;
            $newApartment->address = 'Viale Giovanni Zambianchi, 47811 Rimini RN, Italia';
            $newApartment->latitude = 44.0979171;
            $newApartment->longitude = 12.5223566;
            $newApartment->price_for_night = 70;
            $newApartment->image_path = 'images/slider1.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 1;
            $newApartment->title = 'La Santa Cruz';
            $newApartment->description = "Questo delizioso e aperto appartamento ti metterà nel mezzo dei tre siti più importanti del centro di Siviglia: il punto di riferimento Setas, il quartiere di Santa Cruz (dove si trovano tutti i monumenti) e Alameda, il quartiere emergente del locale con grande mangia e tanto fascino. Essendo a cinque minuti a piedi da tutti questi posti, la posizione non potrebbe andare meglio!L'appartamento è moderno, luminoso, spazioso e progettato in modo intuitivo all'interno di una storica 'Casa Palacio' risalente al periodo coloniale.";
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 3;
            $newApartment->meters = 80;
            $newApartment->address = 'Calle Rodrigo Caro, 2, 41004 Siviglia, Spagna';
            $newApartment->latitude = 37.385926299721675;
            $newApartment->longitude = -5.990889979593192;
            $newApartment->price_for_night = 100;
            $newApartment->image_path = 'images/slider2.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 2;
            $newApartment->title = 'La casa di papel';
            $newApartment->description = "La sistemazione è adatta a persone singole e a chi viaggia per lavoro. L'appartamento è al 2° piano del condominio.";
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 1;
            $newApartment->meters = 90;
            $newApartment->address = 'Piazza del Popolo, 35, 48018 Faenza Unione della Romagna Faentina, Italia';
            $newApartment->latitude = 44.2855555;
            $newApartment->longitude = 11.8832055;
            $newApartment->price_for_night = 50;
            $newApartment->image_path = 'images/slider3.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 2;
            $newApartment->title = 'Hotel Geppetto';
            $newApartment->description = "Situato a 50 m dal mare, l'Hotel Geppetto sorge sul lungomare principale di Rimini. Situato in una posizione strategica, l'hotel offre ottimi servizi, tra cui un'area fitness e un centro benessere.";
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 2;
            $newApartment->number_of_beds = 2;
            $newApartment->meters = 90;
            $newApartment->address = 'Viale Piave, 5, 47921 Rimini RN, Italia';
            $newApartment->latitude = 44.0774;
            $newApartment->longitude = 12.551;
            $newApartment->price_for_night = 80;
            $newApartment->image_path = 'images/slider4.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 3;
            $newApartment->title = 'Casa al mare con piscina privata a Rapallo';
            $newApartment->description = 'Liguria,Golfo del Tigullio, a Rapallo di fronte ai giardini del Porto Carlo Riva, a pochi passi dal centro storico,dalla promenade e dal mare, passa le tue vacanze in un appartamento di 110 mq, ubicato in un elegante palazzo.';
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 4;
            $newApartment->meters = 65;
            $newApartment->address = 'Corso Cristoforo Colombo, 2 16035 Rapallo';
            $newApartment->latitude = 44.346894;
            $newApartment->longitude = 9.2271393;
            $newApartment->price_for_night = 85;
            $newApartment->image_path = 'images/slider9.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 3;
            $newApartment->title = 'A 200 mt dal mare a due passi dal centro a Trani';
            $newApartment->description = 'Situato in una palazzina nel centro storico, dista 10 min dal porto turistico e dalla spiaggia.
            A pochi passi pizzerie e ristoranti dove poter gustare la cucina mediterranea ed il mercato ortofrutticolo ed ittico, dal quale acquistare i prodotti a km.0 per cucinare piatti gustosi.
            A 5 min dal centro della città.';
            $newApartment->number_of_rooms = 1;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 2;
            $newApartment->meters = 40;
            $newApartment->address = 'Via Goffredo da Trani, 5 76125 Trani';
            $newApartment->latitude = 41.276441;
            $newApartment->longitude = 16.4235749;
            $newApartment->price_for_night = 45;
            $newApartment->image_path = 'images/slider10.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 4;
            $newApartment->title = 'Villetta a Marina di Sibari!';
            $newApartment->description = 'a tua vacanza a Marina di Sibari ridente località della costa ionica cosentina. Affittasi appartamento al primo piano composto da un soggiorno e sala da pranzo, 2 camere da letto (una matrimoniale e una tripla), bagno e cucina.';
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 5;
            $newApartment->meters = 70;
            $newApartment->address = 'Via Roma, 10 87011 Marina di Sibari';
            $newApartment->latitude = 39.748478;
            $newApartment->longitude = 16.4834228;
            $newApartment->price_for_night = 66;
            $newApartment->image_path = 'images/slider8.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 4;
            $newApartment->title = 'Appartamento su due piani a Polignano a Mare';
            $newApartment->description = 'Si tratta di un appartamento dallo stile moderno, inserito in un complesso di recente costruzione. E disposto su due piani collegati da un elegante scala a chiocciola, per una superficie totale di 110 metri qudrati e può ospitare fino a un massimo di 5 persone.';
            $newApartment->number_of_rooms = 3;
            $newApartment->number_of_bath = 2;
            $newApartment->number_of_beds = 5;
            $newApartment->meters = 110;
            $newApartment->address = 'Via Narciso, 59 70044 Polignano a mare';
            $newApartment->latitude = 40.995957;
            $newApartment->longitude = 17.221224;
            $newApartment->price_for_night = 72;
            $newApartment->image_path = 'images/slider7.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 5;
            $newApartment->title = 'Casa De Berlinen';
            $newApartment->description = "Offro un appartamento per 2 persone - molto centrale. Cammini solo per strada per trovare i caffè e le boutique più alla moda e i ristoranti alla moda. Ma anche se potresti fare un pisolino perché le camere da letto non sono sulla strada. Dalla tua camera guardi in un ampio cortile. L'appartamento e l'edificio sono molto tipici di Berlino. È spazioso e leggero. La cucina è molto piccola ma sufficiente per un breve soggiorno.";
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 3;
            $newApartment->meters = 80;
            $newApartment->address = 'Unter den Linden 39, 10117 Berlino, Germania';
            $newApartment->latitude = 37.385926299721675;
            $newApartment->longitude = -5.990889979593192;
            $newApartment->price_for_night = 100;
            $newApartment->image_path = 'images/slider5.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 5;
            $newApartment->title = 'La Meravigliosa, Lagoon Side';
            $newApartment->description = "Il tuo studio di sicurezza privato con le tue chiavi climatizzate in una delle due camere da letto, cucina privata con frigorifero, fornello a gas, forno a microonde bagno privato e servizi igienici. Molto centrale e sulla laguna di fronte al tramonto";
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 3;
            $newApartment->meters = 80;
            $newApartment->address = 'Route de Ceinture, 98730 Bora-Bora, Francia';
            $newApartment->latitude = -16.515642;
            $newApartment->longitude = -151.74367;
            $newApartment->price_for_night = 200;
            $newApartment->image_path = 'images/slider6.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 6;
            $newApartment->title = 'Casa Amarela';
            $newApartment->description = "Affittiamo la nostra casa vacanza a Portimao, situata in una zona tranquilla, nella parte vecchia della città, non lontano dal porto, dal centro città, dai negozi di alimentari, dai ristoranti / caffè e dal mercato locale con prodotti regionali (frutta, verdura, ecc.) Molte spiagge vicine sono raggiungibili in autobus o in auto (10 minuti), mentre la città può essere scoperta a piedi. La casa non è lussuosa, ma è spaziosa e molto confortevole. Il posto perfetto per rilassarsi.";
            $newApartment->number_of_rooms = 3;
            $newApartment->number_of_bath = 2;
            $newApartment->number_of_beds = 4;
            $newApartment->meters = 70;
            $newApartment->address = 'Avenida Engenheiro Francisco Bivar, 8500-810 Portimão, Portogallo';
            $newApartment->latitude = 37.12331960686062;
            $newApartment->longitude = -8.54069069474059;
            $newApartment->price_for_night = 150;
            $newApartment->image_path = 'images/slider8.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 6;
            $newApartment->title = 'Complesso Residenziale Ottiolu Marina';
            $newApartment->description = "Il complesso residenziale Ottiolu Marina si trova nel piccolo borgo di Ottiolu, distante circa 4 km da San Teodoro e Budoni.
            Tutte le attività di Ottiolu si svolgono intorno alla graziosa piazzetta del Porto: piano bar sulla Marina, bar con musica dal vivo, pub, ristoranti e pizzerie, oltre che essere il luogo della passeggiata serale.
            La spiaggia bianchissima, il mare blu cobalto e un porto turistico tra i più gettonati in Sardegna fanno di Ottiolu la meta ideale per le vacanze per la famiglia o con gli amici.";
            $newApartment->number_of_rooms = 3;
            $newApartment->number_of_bath = 2;
            $newApartment->number_of_beds = 6;
            $newApartment->meters = 100;
            $newApartment->address = 'Via dei Tulipani, 243, 08020 Budoni SS, Italia';
            $newApartment->latitude = 40.74021;
            $newApartment->longitude = 9.710509;
            $newApartment->price_for_night = 100;
            $newApartment->image_path = 'images/slider6.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 7;
            $newApartment->title = 'Appartamento vecchio a Foggia';
            $newApartment->description = 'Si tratta di un appartamento dallo stile antico, inserito in un complesso di vecchia costruzione. E disposto su due piani sorretti da un soppalco. Fugg da Fogg.';
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 4;
            $newApartment->meters = 26;
            $newApartment->address = 'Viale Giuseppe Mazzini, 20 71121 Foggia';
            $newApartment->latitude = 41.4564457;
            $newApartment->longitude =  15.5458711;
            $newApartment->price_for_night = 70;
            $newApartment->image_path = 'images/slider5.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 7;
            $newApartment->title = 'Casa di Gino a Cerignola';
            $newApartment->description = 'Appartamento unico nel suo genere in cui ogni dettaglio non è minimamente curato. Posizionato in una zona malfamata, garantirà ai nostri ospiti un perenne senso di pericolo.';
            $newApartment->number_of_rooms = 1;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 8;
            $newApartment->meters = 76;
            $newApartment->address = 'Via Roma, 40 71042 Cerignola ';
            $newApartment->latitude = 41.3958;
            $newApartment->longitude = 15.8605;
            $newApartment->price_for_night = 25;
            $newApartment->image_path = 'images/slider2.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 8;
            $newApartment->title = 'Algarve Beach House';
            $newApartment->description = "A circa 2 minuti a piedi dalla spiaggia. Burgau è un piccolo villaggio di pescatori vicino a Lagos, al confine con il parco naturale della Costa Vicentina. Composto da una camera da letto matrimoniale a terra e un altro letto matrimoniale nel sottotetto convertito. Bagno, balcone, hall d'ingresso, soggiorno con cucina e sala da pranzo. Completamente arredato, (lavatrice, lavastoviglie, internet, TV via cavo). Stile locale rustico. Burgau ha un'atmosfera amichevole. Vecchi pescatori si radunano intorno alla spiaggia riparando le loro reti. Camminare sulla spiaggia o salire sulla scogliera è un'esperienza molto piacevole, ma ci sono molte attività possibili nella zona come surf, birdwatching, golf, equitazione, turismo subacqueo, attività per bambini, SPA, lezioni di arte e yoga tra gli altri. Ci sono bar e ristoranti disponibili dove puoi provare diversi gusti come inglese, portoghese, italiano, indiano, tra gli altri. Frutti di mare, pesce fresco e verdure sono disponibili nei mercati locali oltre ai supermercati. C'è una copertura di emergenza 24 ore al giorno.Una grande varietà di spiagge lungo la costa. Piscine e palestra disponibili vicino al villaggio.";
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 3;
            $newApartment->meters = 75;
            $newApartment->address = 'Largo 1° de Maio, 8650-060 Budens, Portogallo';
            $newApartment->latitude = 37.0735081096003;
            $newApartment->longitude = -8.84087842373063;
            $newApartment->price_for_night = 100;
            $newApartment->image_path = 'images/slider3.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 8;
            $newApartment->title = 'Golden Loft';
            $newApartment->description = "Nello storico e caratteristico quartiere di Stampace, ho il piacere di presentarvi il Golden Loft. Questo piccolo loft, è frutto di un accurato studio architettonico e di design. E' stato studiato ogni singolo elemento, per rendere la Vostra esperienza a Cagliari indimenticabile. Il Golden Loft è stato realizzato all'interno di un edificio storico risalente al 1910, interamente realizzato con la roccia tipica del luogo.";
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 3;
            $newApartment->meters = 60;
            $newApartment->address = 'Via Goffredo Mameli, 41, 09123 Cagliari CA, Italia';
            $newApartment->latitude = 39.217945;
            $newApartment->longitude = 9.11025;
            $newApartment->price_for_night = 100;
            $newApartment->image_path = 'images/slider6.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 10;
            $newApartment->title = 'Hotel la perla';
            $newApartment->description = "Situata a Pescara, a 1,6 km dalla Casa di Gabriele D'Annunzio e a 1,8 km dalla stazione degli autobus della città, la Casa Gaia offre la vista sulla città e la connessione WiFi gratuita";
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 1;
            $newApartment->meters = 90;
            $newApartment->address = 'Pescara, Italia';
            $newApartment->latitude = 42.3102619;
            $newApartment->longitude = 13.9575901;
            $newApartment->price_for_night = 40;
            $newApartment->image_path = 'storage/images8.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

            $newApartment = new Apartment;
            $newApartment->user_id = 9;
            $newApartment->title = 'Loft in zona centrale a Minervino Murge';
            $newApartment->description = 'Situato in zona centrale, nel bel mezzo della campagna murgiana, in questo loft di nuovissima costruzione potrete ritrovare la vostra pace interiore ed una sensazione di rustico che mai nella vita';
            $newApartment->number_of_rooms = 4;
            $newApartment->number_of_bath = 2;
            $newApartment->number_of_beds = 8;
            $newApartment->meters = 87;
            $newApartment->address = 'Via Palmiero Togliatti, 48 76013 Minervino Murge';
            $newApartment->latitude = 41.08264;
            $newApartment->longitude = 16.07861;
            $newApartment->price_for_night = 47;
            $newApartment->image_path = 'images/slider4.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();
            
            $newApartment = new Apartment;
            $newApartment->user_id = 9;
            $newApartment->title = 'Appartamento vista mare a Cagliari';
            $newApartment->description = 'Eja!Nel nostro appartamento avrete la possibilità di vivere tra le pecore, i pecorari e di degustare degli ottimi primosale e della sana birra Ichnusa. Potrete svegliarvi e puzzare di formaggio in maniera importante.';
            $newApartment->number_of_rooms = 4;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 4;
            $newApartment->meters = 96;
            $newApartment->address = 'Piazza Giuseppe Garibaldi, 4 09127 Cagliari ';
            $newApartment->latitude = 39.2189392;
            $newApartment->longitude = 9.1219448;
            $newApartment->price_for_night = 76;
            $newApartment->image_path = 'images/slider4.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();


            $newApartment = new Apartment;
            $newApartment->user_id = 10;
            $newApartment->title = 'Polignano Loft';
            $newApartment->description = "Il mio alloggio è vicino a splendide viste panoramiche, spiaggia, attività per la famiglia, ristoranti, vita notturna, bellezze naturali, turismo, natura.. Ti piacerà il mio alloggio per questi motivi: il quartiere, la luce, la comodità, la cucina, l'intimità, il design, lo stile, la posizione, l'originalità, l'uso dei servizi.. Il mio alloggio è adatto a coppie, avventurieri solitari, chi viaggia per lavoro, famiglie (con bambini), grandi gruppi e amici pelosi (animali domestici).";
            $newApartment->number_of_rooms = 2;
            $newApartment->number_of_bath = 1;
            $newApartment->number_of_beds = 3;
            $newApartment->meters = 70;
            $newApartment->address = 'Grottone, Lungomare Domenico Modugno, 70044 Polignano a Mare BA, Italia';
            $newApartment->latitude = 40.998688;
            $newApartment->longitude = 17.215418;
            $newApartment->price_for_night = 100;
            $newApartment->image_path = 'images/slider4.jpg';
            $newApartment->published = 1;
            $newApartment->views = 0;
            $newApartment->save();

        
    }
}
