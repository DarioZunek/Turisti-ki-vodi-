<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/city.css'); }}">
	<title>New York</title>
</head>
<body>
    <div class="logins">
        <div id="logo">
            <a href="{{ route('homepage') }}"><img src="{{ URL::asset('images/logo.JPG'); }}" alt="logo"></a>
          </div>
        @auth
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Odjava</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <span>{{ Auth::user()->name }}</span>
            @if(Auth::user()->type>=2)
                <a href="{{ route('admin') }}" id="panel"><img src="{{ URL::asset('images/settings.png'); }}" alt="settings"></a>
            @endif
        @endauth
            
        @guest
            <a href="{{ route('login') }}">Prijava</a>
            <a href="{{ route('register') }}">Registracija</a>
        @endguest
    </div>
     
    <div id="oba">
        <div id="saSlikom" style="background-image: url({{ URL::asset('images/newyork_panorama.jpg'); }});">
            <div v-cloak id='zaNaslov'>
                <h1 class="h1"> @{{ title }} </h1>
            </div>
            <div id="gumbi">
                <button id="selektor" v-on:click="first">O gradu</button>
                <button id="selektor" v-on:click="second">Povijest</button>
                <button id="selektor" v-on:click="third">Događaji i aktivnosti</button>
            </div> 
            <div id="predstavljanje">
                <p>Kapacitet New Yorka da iznenadi i oduševi nikada ne posustaje - ovo je metropola koja se neprestano iznova izmišlja, postavljajući trendove koje svaki drugi svjetski grad želi slijediti. Manhattan ostaje živahno središte, prvo među pet općina. Prošećite njegovim dugim, beskrajnim avenijama i vidjet ćete presjek globusa: frenetično zujanje Kineske četvrti, knjišku tišinu oko Sveučilišta New York i 
                    Washington Square Parka, epicentra afroameričke kulture u Harlemu.
                </p>
            </div>
        </div>
        <div id="lijevi">
                <div class="flightWidget">
                    <div class="hellowings-widget-wrap" data-hellowings-target="https://en.hellowings.com/widget-loader/search-widget?mode=col-mode"></div>
                    <script src="https://en.hellowings.com/widget-loader.js?v=20170706" ></script>
                </div>
                <div class="weather">
                    <a class="weatherwidget-io" href="https://forecast7.com/hr/40d71n74d01/new-york/" data-label_1="NEW YORK" data-label_2="VRIJEME" data-theme="original" >NEW YORK VRIJEME</a>
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                    </script>
                </div>
        </div>
        <div id="desni">
            <div v-if="value1" class="tekstualniOkvir">
                <h3>O gradu</h3>
                <p>
                    Označiti svaki kulturni vrhunac u gradu gotovo je nemoguće. Oni koji se prvi put pojavljuju trebali bi krenuti prema onima koji su uspjeli: Kip slobode, MoMA, Empire State Building. Za one koji se vraćaju, vanjske gradske četvrti i zelene površine su obavezni. Brooklynski zapanjujući Prospect Park i Inwood Hill Park (potonji jedini nerazvijeni dio Manhattana) izvrsni su načini da provedete poslijepodne.
                    Gurmani će biti preplavljeni opcijama. Četvrt Astoria u Queensu odličan je izbor za one koji žele jesti jeftino i dobro, s grupom grčkih, talijanskih, egipatskih i kineskih restorana. Ovo je najstvarniji New York, daleko od blještave Pete avenije i brzih gentrifikacijskih područja Brooklyna.
                    Ako ste više zainteresirani za kupovinu nego za jelo, onda je New York to pokrio. Ljubitelji glazbe blagoslovljeni su prvorazrednom scenom za kupovinu ploča, koju predvode Rough Trade NYC i South Slopeov as Permanent Records, dok je tjedni Brooklyn Flea Market (koji se održava na raznim lokacijama tijekom cijele godine) izvrstan za jedinstvena blaga i jednokratnu modu.
                    New York, koji se često naziva New York City (NYC) kako bi se razlikovao od države New York, najnaseljeniji je grad u Sjedinjenim Državama. 2020. s populacijom od 8.804.190 raspoređenih na 300,46 kvadratnih milja (778,2 km2), New York je također najgušće naseljen veliki grad u Sjedinjenim Državama. Smješten na južnom dijelu države New York, grad je središte metropolitanskog područja New Yorka, najvećeg 
                    gradskog područja na svijetu po urbanoj površini. S više od 20,1 milijuna ljudi u svom metropolitanskom statističkom područjui 23,5 milijuna u svom kombiniranom statističkom području od 2020., New York je jedan od najmnogoljudnijih megagradova na svijetu. New York City je globalno kulturno, financijsko i medijsko središte sa značajnim utjecajem na trgovinu, zabavu, istraživanje, tehnologiju, obrazovanje, 
                    politiku, turizam, gastronomiju, umjetnost, modu i sport. New York je najfotografiraniji grad na svijetu. Dom sjedišta Ujedinjenih naroda, New York je važno središte zameđunarodna diplomacija, uspostavljeno sigurno utočište za globalne investitore, a ponekad se opisuje i kao glavni grad svijeta.
                </p>
            </div>
            <div v-if="value2" class="tekstualniOkvir">
                <h3>Povijest</h3>
                <p>
                    U pretkolumbovskoj eri , područje današnjeg New Yorka bilo je naseljeno Algonquian Indijancima, uključujući Lenape . Njihova domovina, poznata kao Lenapehoking , uključivala je Staten Island , Manhattan, Bronx , zapadni dio Long Islanda (uključujući područja koja će kasnije postati četvrti Brooklyn i Queens ) i dolinu Lower Hudson.
                    Prvi dokumentirani posjet europljanina luci New York bio je 1524. godine od strane Talijana Giovannija da Verrazzana, istraživača iz Firence u službi francuske krune. Zauzeo je to područje za Francusku i nazvao ga Nouvelle Angoulême (Novi Angoulême). Španjolska ekspedicija, koju je vodio portugalski kapetan Estêvão Gomes, ploveći za cara Karla V.  stigla je u luku New York u siječnju 1525. i ucrtala ušće 
                    rijeke Hudson, koje je on nazvao Río de San Antonio ('Rijeka Svetog Antuna'). Padrón Real iz 1527., prva znanstvena karta koja kontinuirano prikazujeistočnu obalu Sjeverne Amerike, nastala je na temelju informacija Gomesove ekspedicije i označila je sjeveroistok Sjedinjenih Država kao Tierra de Esteban Gómez u njegovu čast.
                    Stalna europska prisutnost u blizini njujorške luke započela je 1624. godine—čime je New York postao 12. najstarije kontinuirano naseljeno naselje u kontinentalnim Sjedinjenim Državama osnivanjem nizozemskog naselja za trgovinu krznom na Governors Islandu. Godine 1625. započela je izgradnja citadele i tvrđave Amsterdam, kasnije nazvane Nieuw Amsterdam (Novi Amsterdam), na današnjem otoku Manhattan. 
                    Kolonija Novi Amsterdam bila je usredotočena na ono što će u konačnici biti poznato kao Donji Manhattan. Protezao se od južnog vrha Manhattana do današnjeg Wall Streeta, gdje je 1653. godine izgrađena drvena ograde od 12 stopa za zaštitu od indijanskih i britanskih napada. Godine 1664., nesposoban prizvati značajniji otpor, Stuyvesant je predao Novi Amsterdam engleskim trupama, koje je predvodio pukovnik 
                    Richard Nicolls, bez krvoprolića. Uvjeti predaje dopuštali su nizozemskim stanovnicima da ostanu u koloniji i dopuštali vjersku slobodu. Godine 1667., tijekom pregovora koji su doveli do Ugovora iz Brede nakon Drugog anglo-nizozemskog rata, Nizozemci su odlučili zadržati koloniju plantaža u nastajanju onoga što je sada Surinam a zauzvrat su Englezi zadržali Novi Amsterdam. 
                </p>
            </div>
            <div v-if="value3" class="tekstualniOkvir">
                <h3>Događaji i aktivnosti</h3>
                <p>
                    Krajnji simbol američkog sna, Lady Liberty veličanstveno stoji nad njujorškom lukom i vjerojatno je najpoznatija znamenitost u Americi. Narod Francuske donirao je kip 1886. u znak sjećanja na savezništvo tijekom Američke revolucije. Bio je to prvi pogled na Novi svijet koji je vidjelo 12 milijuna imigranata koji su prošli kroz Ellis Island početkom i sredinom 20. stoljeća. 
                    Ograničene karte za posjet kruni dostupne su uz prethodnu rezervaciju. Muzej moderne umjetnosti (MoMA) sadrži najvažniju zbirku moderne umjetnosti u SAD-u, koja pokriva različite medije od kasnog 19. i 20. stoljeća do danas, te s impresivnim putujućim izložbama. Neke od najistaknutijih značajki uključuju predvorje koje povezuje 53. i 54. ulicu; atrij koji se uzdiže 33,5 m 
                    (110 stopa) iznad razine ulice i inovativne staklene zavjese koje pružaju pogled na vrt skulptura Abby Aldrich Rockefeller. Cijenjena njujorška institucija, The Met dom je više od dva milijuna umjetničkih djela. Otvoren je 1870. sa skromnom zbirkom od 174 europske slike i izrastao je u najveći muzej umjetnosti na zapadnoj hemisferi. Sada njegova sabrana djela obuhvaćaju 
                    5000 godina kulture, a muzej je dom za oko 2500 najboljih slika, uključujući Vermeersa, Rembrandta, impresionista i postimpresionista, kao i renesansnu, afričku, azijsku i islamsku umjetnost. Muzej također ima dodatke u Breueru (suvremena umjetnost) i Cloisters (srednjovjekovna umjetnost i arhitektura). Frederick Law Olmsted i Calvert Vaux dizajnirali su ovo veličanstveno 
                    gradsko svetište smješteno u središtu Manhattana. Otvoren je 1876. godine i danas nudi brojne rekreacijske i kulturne sadržaje. Dvorac Belvedere (kameni dvorac izgrađen na stijeni Vista Rock usred parka na poprečnoj strani 79. ulice) pruža izvrstan pogled, dok Shakespeareov vrt, zapadno od dvorca, sadrži cvijeće i bilje koje se spominje u Bardovim dramama. Tu su i kazalište 
                    i sportski objekti uz slavni Central Park Zoo. Jedan od najupečatljivijih spomenika u New Yorku otvoren je 11. rujna 2011., 10 godina nakon terorističkog napada koji je uništio Svjetski trgovački centar i odnio gotovo 3000 života. Imena svih ubijenih toga dana okružuju dva brončana reflektirajuća bazena postavljena unutar otisaka tornjeva blizanaca. 
                </p>
            </div>
        </div>
    </div>
    <br>
    <br>
    
    <script type="importmap">
        {
          "imports": {
            "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
          }
        }
      </script>
    <div v-cloak id="nazovi">
        <h2>Pronađite @{{ title }} na karti</h2>
    </div>
    <script type="module">
        import { createApp } from 'vue'
        
        const app1 = createApp({
          data() {
            return {
              title: document.title
            }
          }
        })
        app1.mount('#nazovi')
        
        const app2 = createApp({
          data() {
            return {
              title: document.title
            }
          }
        })
        app2.mount('#zaNaslov')

        const app3 = createApp({
          data() {
            return {
                value1: true,
                value2: false,
                value3: false
            }
          },
          methods:{
            first:function(){
                this.value1=true,
                this.value2=false,
                this.value3=false
            },
            second:function(){
                this.value1=false,
                this.value2=true,
                this.value3=false
            },
            third:function(){
                this.value1=false,
                this.value2=false,
                this.value3=true
            },
          },
        })
        app3.mount('#oba')
    </script>
    
    <div class="karta">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20Sjedinjene%20Ameri%C4%8Dke%20Dr%C5%BEave!5e0!3m2!1shr!2shr!4v1660685771494!5m2!1shr!2shr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br>
	<h2 class="hotelHeader">Pregledajte hotelski smještaj</h2>
    <hr class="potez"">
	<iframe id='hotelwidget' src='https://hatlastravel.com/widget/hotels?place=newyork&partner=1' style='height:500px;width:80%;margin:auto;padding:5px;display:block;overflow:hidden;border:none;position:relative' scrolling='no' loading='lazy'>></iframe>¸
    <hr class="potez"">
    <br>
    @php
        use App\Models\City;
        $city = City::find(3);
    @endphp

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4>Komentari korisnika</h4>
      
                        <hr />
                        @include('city.commentsDisplay', ['comments' => $city->comments, 'city_id' => $city->id])
       
                        @auth
                        <h4>Dodaj komentar</h4>
                        <form method="post" action="{{ route('comments.store') }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="body"></textarea>
                                <input type="hidden" name="city_id" value="{{ $city->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Dodaj komentar" />
                            </div>
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>