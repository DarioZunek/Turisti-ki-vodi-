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
                <button id="selektor" v-on:click="third">Doga??aji i aktivnosti</button>
            </div> 
            <div id="predstavljanje">
                <p>Kapacitet New Yorka da iznenadi i odu??evi nikada ne posustaje - ovo je metropola koja se neprestano iznova izmi??lja, postavljaju??i trendove koje svaki drugi svjetski grad ??eli slijediti. Manhattan ostaje ??ivahno sredi??te, prvo me??u pet op??ina. Pro??e??ite njegovim dugim, beskrajnim avenijama i vidjet ??ete presjek globusa: freneti??no zujanje Kineske ??etvrti, knji??ku ti??inu oko Sveu??ili??ta New York i 
                    Washington Square Parka, epicentra afroameri??ke kulture u Harlemu.
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
                    Ozna??iti svaki kulturni vrhunac u gradu gotovo je nemogu??e. Oni koji se prvi put pojavljuju trebali bi krenuti prema onima koji su uspjeli: Kip slobode, MoMA, Empire State Building. Za one koji se vra??aju, vanjske gradske ??etvrti i zelene povr??ine su obavezni. Brooklynski zapanjuju??i Prospect Park i Inwood Hill Park (potonji jedini nerazvijeni dio Manhattana) izvrsni su na??ini da provedete poslijepodne.
                    Gurmani ??e biti preplavljeni opcijama. ??etvrt Astoria u Queensu odli??an je izbor za one koji ??ele jesti jeftino i dobro, s grupom gr??kih, talijanskih, egipatskih i kineskih restorana. Ovo je najstvarniji New York, daleko od blje??tave Pete avenije i brzih gentrifikacijskih podru??ja Brooklyna.
                    Ako ste vi??e zainteresirani za kupovinu nego za jelo, onda je New York to pokrio. Ljubitelji glazbe blagoslovljeni su prvorazrednom scenom za kupovinu plo??a, koju predvode Rough Trade NYC i South Slopeov as Permanent Records, dok je tjedni Brooklyn Flea Market (koji se odr??ava na raznim lokacijama tijekom cijele godine) izvrstan za jedinstvena blaga i jednokratnu modu.
                    New York, koji se ??esto naziva New York City (NYC) kako bi se razlikovao od dr??ave New York, najnaseljeniji je grad u Sjedinjenim Dr??avama. 2020. s populacijom od 8.804.190 raspore??enih na 300,46 kvadratnih milja (778,2 km2), New York je tako??er najgu????e naseljen veliki grad u Sjedinjenim Dr??avama. Smje??ten na ju??nom dijelu dr??ave New York, grad je sredi??te metropolitanskog podru??ja New Yorka, najve??eg 
                    gradskog podru??ja na svijetu po urbanoj povr??ini. S vi??e od 20,1 milijuna ljudi u svom metropolitanskom statisti??kom podru??jui 23,5 milijuna u svom kombiniranom statisti??kom podru??ju od 2020., New York je jedan od najmnogoljudnijih megagradova na svijetu. New York City je globalno kulturno, financijsko i medijsko sredi??te sa zna??ajnim utjecajem na trgovinu, zabavu, istra??ivanje, tehnologiju, obrazovanje, 
                    politiku, turizam, gastronomiju, umjetnost, modu i sport. New York je najfotografiraniji grad na svijetu. Dom sjedi??ta Ujedinjenih naroda, New York je va??no sredi??te zame??unarodna diplomacija, uspostavljeno sigurno uto??i??te za globalne investitore, a ponekad se opisuje i kao glavni grad svijeta.
                </p>
            </div>
            <div v-if="value2" class="tekstualniOkvir">
                <h3>Povijest</h3>
                <p>
                    U pretkolumbovskoj eri , podru??je dana??njeg New Yorka bilo je naseljeno Algonquian Indijancima, uklju??uju??i Lenape . Njihova domovina, poznata kao Lenapehoking , uklju??ivala je Staten Island , Manhattan, Bronx , zapadni dio Long Islanda (uklju??uju??i podru??ja koja ??e kasnije postati ??etvrti Brooklyn i Queens ) i dolinu Lower Hudson.
                    Prvi dokumentirani posjet europljanina luci New York bio je 1524. godine od strane Talijana Giovannija da Verrazzana, istra??iva??a iz Firence u slu??bi francuske krune. Zauzeo je to podru??je za Francusku i nazvao ga Nouvelle Angoul??me (Novi Angoul??me). ??panjolska ekspedicija, koju je vodio portugalski kapetan Est??v??o Gomes, plove??i za cara Karla V.  stigla je u luku New York u sije??nju 1525. i ucrtala u????e 
                    rijeke Hudson, koje je on nazvao R??o de San Antonio ('Rijeka Svetog Antuna'). Padr??n Real iz 1527., prva znanstvena karta koja kontinuirano prikazujeisto??nu obalu Sjeverne Amerike, nastala je na temelju informacija Gomesove ekspedicije i ozna??ila je sjeveroistok Sjedinjenih Dr??ava kao Tierra de Esteban G??mez u njegovu ??ast.
                    Stalna europska prisutnost u blizini njujor??ke luke zapo??ela je 1624. godine?????ime je New York postao 12. najstarije kontinuirano naseljeno naselje u kontinentalnim Sjedinjenim Dr??avama osnivanjem nizozemskog naselja za trgovinu krznom na Governors Islandu. Godine 1625. zapo??ela je izgradnja citadele i tvr??ave Amsterdam, kasnije nazvane Nieuw Amsterdam (Novi Amsterdam), na dana??njem otoku Manhattan. 
                    Kolonija Novi Amsterdam bila je usredoto??ena na ono ??to ??e u kona??nici biti poznato kao Donji Manhattan. Protezao se od ju??nog vrha Manhattana do dana??njeg Wall Streeta, gdje je 1653. godine izgra??ena drvena ograde od 12 stopa za za??titu od indijanskih i britanskih napada. Godine 1664., nesposoban prizvati zna??ajniji otpor, Stuyvesant je predao Novi Amsterdam engleskim trupama, koje je predvodio pukovnik 
                    Richard Nicolls, bez krvoproli??a. Uvjeti predaje dopu??tali su nizozemskim stanovnicima da ostanu u koloniji i dopu??tali vjersku slobodu. Godine 1667., tijekom pregovora koji su doveli do Ugovora iz Brede nakon Drugog anglo-nizozemskog rata, Nizozemci su odlu??ili zadr??ati koloniju planta??a u nastajanju onoga ??to je sada Surinam a zauzvrat su Englezi zadr??ali Novi Amsterdam. 
                </p>
            </div>
            <div v-if="value3" class="tekstualniOkvir">
                <h3>Doga??aji i aktivnosti</h3>
                <p>
                    Krajnji simbol ameri??kog sna, Lady Liberty veli??anstveno stoji nad njujor??kom lukom i vjerojatno je najpoznatija znamenitost u Americi. Narod Francuske donirao je kip 1886. u znak sje??anja na savezni??tvo tijekom Ameri??ke revolucije. Bio je to prvi pogled na Novi svijet koji je vidjelo 12 milijuna imigranata koji su pro??li kroz Ellis Island po??etkom i sredinom 20. stolje??a. 
                    Ograni??ene karte za posjet kruni dostupne su uz prethodnu rezervaciju. Muzej moderne umjetnosti (MoMA) sadr??i najva??niju zbirku moderne umjetnosti u SAD-u, koja pokriva razli??ite medije od kasnog 19. i 20. stolje??a do danas, te s impresivnim putuju??im izlo??bama. Neke od najistaknutijih zna??ajki uklju??uju predvorje koje povezuje 53. i 54. ulicu; atrij koji se uzdi??e 33,5 m 
                    (110 stopa) iznad razine ulice i inovativne staklene zavjese koje pru??aju pogled na vrt skulptura Abby Aldrich Rockefeller. Cijenjena njujor??ka institucija, The Met dom je vi??e od dva milijuna umjetni??kih djela. Otvoren je 1870. sa skromnom zbirkom od 174 europske slike i izrastao je u najve??i muzej umjetnosti na zapadnoj hemisferi. Sada njegova sabrana djela obuhva??aju 
                    5000 godina kulture, a muzej je dom za oko 2500 najboljih slika, uklju??uju??i Vermeersa, Rembrandta, impresionista i postimpresionista, kao i renesansnu, afri??ku, azijsku i islamsku umjetnost. Muzej tako??er ima dodatke u Breueru (suvremena umjetnost) i Cloisters (srednjovjekovna umjetnost i arhitektura). Frederick Law Olmsted i Calvert Vaux dizajnirali su ovo veli??anstveno 
                    gradsko sveti??te smje??teno u sredi??tu Manhattana. Otvoren je 1876. godine i danas nudi brojne rekreacijske i kulturne sadr??aje. Dvorac Belvedere (kameni dvorac izgra??en na stijeni Vista Rock usred parka na popre??noj strani 79. ulice) pru??a izvrstan pogled, dok Shakespeareov vrt, zapadno od dvorca, sadr??i cvije??e i bilje koje se spominje u Bardovim dramama. Tu su i kazali??te 
                    i sportski objekti uz slavni Central Park Zoo. Jedan od najupe??atljivijih spomenika u New Yorku otvoren je 11. rujna 2011., 10 godina nakon teroristi??kog napada koji je uni??tio Svjetski trgova??ki centar i odnio gotovo 3000 ??ivota. Imena svih ubijenih toga dana okru??uju dva bron??ana reflektiraju??a bazena postavljena unutar otisaka tornjeva blizanaca. 
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
        <h2>Prona??ite @{{ title }} na karti</h2>
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
	<h2 class="hotelHeader">Pregledajte hotelski smje??taj</h2>
    <hr class="potez"">
	<iframe id='hotelwidget' src='https://hatlastravel.com/widget/hotels?place=newyork&partner=1' style='height:500px;width:80%;margin:auto;padding:5px;display:block;overflow:hidden;border:none;position:relative' scrolling='no' loading='lazy'>></iframe>??
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