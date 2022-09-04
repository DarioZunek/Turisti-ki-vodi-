<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/city.css'); }}">
	<title>Pariz</title>
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
        <div id="saSlikom" style="background-image: url({{ URL::asset('images/paris_panorama.jpg'); }});">
            <div v-cloak id='zaNaslov'>
                <h1 class="h1"> @{{ title }} </h1>
            </div>
            <div id="gumbi">
                <button id="selektor" v-on:click="first">O gradu</button>
                <button id="selektor" v-on:click="second">Povijest</button>
                <button id="selektor" v-on:click="third">Događaji i aktivnosti</button>
            </div> 
            <div id="predstavljanje">
                <p>Pariz je glavni i najnaseljeniji grad Francuske, s procijenjenom populacijom od 2.165.423 stanovnika u 2019. na području većem od 105 km², što čini to je 34. najgušće naseljen grad na svijetu 2020. 
                    Od 17. stoljeća Pariz je jedno od glavnih svjetskih središta financija, diplomacije, trgovine, mode, gastronomije, znanosti i umjetnosti, a ponekad se naziva i glavnim gradom svijeta ili "Gradom svjetlosti".</p>
            </div>
        </div>
        <div id="lijevi">
                <div class="flightWidget">
                  <div class="hellowings-widget-wrap" data-hellowings-target="https://en.hellowings.com/widget-loader/search-widget?mode=col-mode"></div>
                  <script src="https://en.hellowings.com/widget-loader.js?v=20170706"></script>
                </div>
                <div class="weather">
                  <a class="weatherwidget-io" href="https://forecast7.com/hr/48d862d35/paris/" data-label_1="PARIZ" data-label_2="VRIJEME" data-theme="original" >PARIZ VRIJEME</a>
                  <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                  </script>
                </div>
        </div>
        <div id="desni">
            <div v-if="value1" class="tekstualniOkvir">
                <h3>O gradu</h3>
                <p>
                    Grad Pariz je središte regije i pokrajine Île-de-France, ili pariške regije, s procijenjenim brojem stanovnika od 12.262.544 u 2019., ili oko 19% stanovništva Francuske. Pariška regija imala je BDP od 739 milijardi eura u 2019., što je najviše u Europi. 
                    Prema svjetskoj anketi o troškovima života Economist Intelligence Unit, Pariz je 2021. bio grad s drugim najvećim troškovima života na svijetu, izjednačen sa Singapurom, a nakon Tel Aviv-a. Pariz je glavno željezničko, autocestovno i zračno prometno čvorište
                     koje opslužuju dvije međunarodne zračne luke: Paris-Charles de Gaulle(druga najprometnija zračna luka u Europi) i Paris-Orly. Otvoren 1900., gradski sustav podzemne željeznice, pariški metro , opslužuje 5,23 milijuna putnika dnevno i to je drugi najprometniji 
                     metro sustav u Europi nakon Moskovskog metroa. Gare du Nord je 24. najprometnija željeznička postaja na svijetu i najprometnija smještena izvan Japana, s 262 milijuna putnika u 2015. Pariz je posebno poznat po svojim muzejima i arhitektonskim znamenitostima 
                     na primjer Louvre je primio 2,8 milijuna posjetitelja 2021. Musée d'Orsay, Musée Marmottan Monet i Musée de l'Orangerie poznati su po svojim zbirkama francuske impresionističke umjetnosti. Pompidou Centre Musée National d'Art Moderne ima najveću zbirku moderne 
                     i suvremene umjetnosti u Europi. Musée Rodin i Musée Picasso izlažu djela dvojice poznatih Parižana. Povijesna četvrt uz Seinu u središtu grada je klasificirana kao UNESCO Svjetska baština od 1991. a tamošnje popularne znamenitosti uključuju katedralu Notre Dame 
                     de Paris na Île de la Cité, koja je sada zatvorena zbog obnove nakon požara 15. travnja 2019. Druga popularna turistička mjesta uključuju gotičku kraljevsku kapelu Sainte-Chapelle, također na Île de la Cité, Eiffelov toranj, izgrađen za Sveopću izložbu u Parizu 1889.,
                      Grand Palais i Petit Palais, izgrađeni za Sveopću izložbu u Parizu 1900.
                </p>
            </div>
            <div v-if="value2" class="tekstualniOkvir">
                <h3>Povijest</h3>
                <p>
                    Do kraja 12. stoljeća Pariz je postao politička, gospodarska, vjerska i kulturna prijestolnica Francuske. Palais de la Cité, kraljevska rezidencija, nalazila se na zapadnom kraju Île de la Cité. Godine 1163., za vrijeme vladavine Luja VII ., Maurice de Sully, pariški biskup, 
                    poduzeo je izgradnju katedrale Notre Dame na njenom istočnom kraju. Nakon što je močvarno područje između rijeke Seine i njezinog sporijeg 'mrtvog rukavca' na njenom sjeveru zatrpano oko 10. stoljeća, kulturni centar Pariza počeo se seliti na desnu obalu. Godine 1137. nova 
                    gradska tržnica(današnji Les Halles) zamijenila je dvije manje na Île de la Cité i Place de Grève(Place de l'Hôtel de Ville). Na potonjoj lokaciji nalazilo se sjedište Pariške riječne trgovačke korporacije, organizacije koja je kasnije postala, neslužbeno (iako formalno u kasnijim godinama), 
                    prva gradska vlada Pariza. U kasnom 12. stoljeću Filip August je proširio tvrđavu Louvre kako bi obranio grad od riječnih invazija sa zapada, dao mu prve zidine između 1190. i 1215., obnovio njegove mostove s obje strane središnjeg otoka i popločao njegove glavne prometnice. Godine 1190. 
                    transformirao je bivšu parišku katedralnu školu u studentsko-nastavničku korporaciju koja će postati Sveučilište u Parizu i privući studente iz cijele Europe. Tijekom Stogodišnjeg rata, Pariz su okupirale Engleskoj prijateljski nastrojene burgundske snage od 1418., prije nego što su 
                    ga potpuno okupirali Englezi kada je Henry V. od Engleske ušao u glavni grad Francuske 1420., usprkos naporima Ivane Orleanske 1429. da oslobodi grad, on će ostati pod engleskom okupacijom do 1436. godine. Pariz je bio središte eksplozije filozofske i znanstvene aktivnosti poznate kao 
                    doba prosvjetiteljstva. Diderot i d'Alembert objavili su svoju Encyclopédie 1751., a braća Montgolfier lansirala su prvi let balonom s ljudskom posadom 21. studenoga 1783. iz vrtova Château de la Muette. Pariz je bio financijska prijestolnica kontinentalne Europe, primarno europsko središte 
                    izdavaštva knjiga i mode te proizvodnje finog namještaja i luksuzne robe. U ljeto 1789. Pariz je postao središnja pozornica Francuske revolucije . Dana 14. srpnja rulja je zauzela arsenal u Domu invalida , nabavivši tisuće pušaka i upala u Bastillu , simbol kraljevske vlasti. 
                    Prva nezavisna Pariška komuna ili gradsko vijeće sastalo se u Hôtel de Ville i 15. srpnja izabralo gradonačelnika , astronoma Jeana Sylvaina Baillyja.
                </p>
            </div>
            <div v-if="value3" class="tekstualniOkvir">
                <h3>Događaji i aktivnosti</h3>
                <p>
                    Emblematski Eiffelov toranj nadvisuje Champ de Mars u elegantnom 7. arondismanu, a njegov treći kat nudi široku panoramu Pariza. Neposredno ispod je fascinantan pogled na delikatne željezne konstrukcije koje je konstruirao Gustave Eiffel, koji je 1889. godine dobio narudžbu za izgradnju tornja 
                    za Exposition Universelle. Dugačak je put uz stepenice, ali potrebno je manje vremena nego čekanje u redu za dizala. Niz stepenica vodi do bijele kupole Basilique du Sacré-Coeur, koja dominira Montmartreom. Ova je crkva izgrađena između 1875. i 1914. kako bi se ispunio zavjet dat tijekom 
                    francusko-pruskog rata. Unutrašnjost je prekrasna s neobizantskim mozaicima, a toranj s kupolom pruža spektakularan pogled na Pariz. Kripta sadrži zanimljivu zbirku vjerskih relikvija i dijaprojekciju o izgradnji bazilike. Izgrađen kao tvrđava u srednjem vijeku, a obnovljen u 16. stoljeću 
                    kao kraljevska palača, Louvre je tek 1793. postao muzej. Danas je to dom nekih od svjetski najpoznatijih umjetničkih djela, uključujući Mona Lisu i Veneru de Milo. Stalna zbirka također uključuje grčke, etruščanske, rimske, egipatske i istočnjačke antikvitete, kao i skulpture, umjetničke 
                    predmete, grafike i crteže. Ova zbirka djela Pabla Picassa smještena je u zadivljujućoj vili iz 17. stoljeća u Maraisu. Zastupljene su sve faze njegove umjetnosti, s pripremnim skicama i slikama koje pokrivaju Plavo razdoblje, Razdoblje ruža, kubizam, klasicizam i nadrealizam, te skulpture 
                    u rasponu od goleme gipsane glave do male mačke. Nezaboravna djela uključuju autoportret Paola kao Harlekina, nadrealni Veliki akt u crvenom naslonjaču i dirljive slike Marie-Therese, njegove ljubavnice i muze.
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.76457543198!2d2.276995541486795!3d48.858946580710985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sPariz%2C%20Francuska!5e0!3m2!1shr!2shr!4v1660608357802!5m2!1shr!2shr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br>
	<h2 class="hotelHeader">Pregledajte hotelski smještaj</h2>
    <hr class="potez"">
	<iframe id='hotelwidget' src='https://hatlastravel.com/widget/hotels?place=paris&partner=1' style='height:500px;width:100%;margin:auto;padding:5px;display:block;overflow:hidden;border:none;position:relative' scrolling='no' loading='lazy'>></iframe>¸
    <hr class="potez"">
    <br>
    @php
        use App\Models\City;
        $city = City::find(2);
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