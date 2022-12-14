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
                <button id="selektor" v-on:click="third">Doga??aji i aktivnosti</button>
            </div> 
            <div id="predstavljanje">
                <p>Pariz je glavni i najnaseljeniji grad Francuske, s procijenjenom populacijom od 2.165.423 stanovnika u 2019. na podru??ju ve??em od 105 km??, ??to ??ini to je 34. najgu????e naseljen grad na svijetu 2020. 
                    Od 17. stolje??a Pariz je jedno od glavnih svjetskih sredi??ta financija, diplomacije, trgovine, mode, gastronomije, znanosti i umjetnosti, a ponekad se naziva i glavnim gradom svijeta ili "Gradom svjetlosti".</p>
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
                    Grad Pariz je sredi??te regije i pokrajine ??le-de-France, ili pari??ke regije, s procijenjenim brojem stanovnika od 12.262.544 u 2019., ili oko 19% stanovni??tva Francuske. Pari??ka regija imala je BDP od 739 milijardi eura u 2019., ??to je najvi??e u Europi. 
                    Prema svjetskoj anketi o tro??kovima ??ivota Economist Intelligence Unit, Pariz je 2021. bio grad s drugim najve??im tro??kovima ??ivota na svijetu, izjedna??en sa Singapurom, a nakon Tel Aviv-a. Pariz je glavno ??eljezni??ko, autocestovno i zra??no prometno ??vori??te
                     koje opslu??uju dvije me??unarodne zra??ne luke: Paris-Charles de Gaulle(druga najprometnija zra??na luka u Europi) i Paris-Orly. Otvoren 1900., gradski sustav podzemne ??eljeznice, pari??ki metro , opslu??uje 5,23 milijuna putnika dnevno i to je drugi najprometniji 
                     metro sustav u Europi nakon Moskovskog metroa. Gare du Nord je 24. najprometnija ??eljezni??ka postaja na svijetu i najprometnija smje??tena izvan Japana, s 262 milijuna putnika u 2015. Pariz je posebno poznat po svojim muzejima i arhitektonskim znamenitostima 
                     na primjer Louvre je primio 2,8 milijuna posjetitelja 2021. Mus??e d'Orsay, Mus??e Marmottan Monet i Mus??e de l'Orangerie poznati su po svojim zbirkama francuske impresionisti??ke umjetnosti. Pompidou Centre Mus??e National d'Art Moderne ima najve??u zbirku moderne 
                     i suvremene umjetnosti u Europi. Mus??e Rodin i Mus??e Picasso izla??u djela dvojice poznatih Pari??ana. Povijesna ??etvrt uz Seinu u sredi??tu grada je klasificirana kao UNESCO Svjetska ba??tina od 1991. a tamo??nje popularne znamenitosti uklju??uju katedralu Notre Dame 
                     de Paris na ??le de la Cit??, koja je sada zatvorena zbog obnove nakon po??ara 15. travnja 2019. Druga popularna turisti??ka mjesta uklju??uju goti??ku kraljevsku kapelu Sainte-Chapelle, tako??er na ??le de la Cit??, Eiffelov toranj, izgra??en za Sveop??u izlo??bu u Parizu 1889.,
                      Grand Palais i Petit Palais, izgra??eni za Sveop??u izlo??bu u Parizu 1900.
                </p>
            </div>
            <div v-if="value2" class="tekstualniOkvir">
                <h3>Povijest</h3>
                <p>
                    Do kraja 12. stolje??a Pariz je postao politi??ka, gospodarska, vjerska i kulturna prijestolnica Francuske. Palais de la Cit??, kraljevska rezidencija, nalazila se na zapadnom kraju ??le de la Cit??. Godine 1163., za vrijeme vladavine Luja VII ., Maurice de Sully, pari??ki biskup, 
                    poduzeo je izgradnju katedrale Notre Dame na njenom isto??nom kraju. Nakon ??to je mo??varno podru??je izme??u rijeke Seine i njezinog sporijeg 'mrtvog rukavca' na njenom sjeveru zatrpano oko 10. stolje??a, kulturni centar Pariza po??eo se seliti na desnu obalu. Godine 1137. nova 
                    gradska tr??nica(dana??nji Les Halles) zamijenila je dvije manje na ??le de la Cit?? i Place de Gr??ve(Place de l'H??tel de Ville). Na potonjoj lokaciji nalazilo se sjedi??te Pari??ke rije??ne trgova??ke korporacije, organizacije koja je kasnije postala, neslu??beno (iako formalno u kasnijim godinama), 
                    prva gradska vlada Pariza. U kasnom 12. stolje??u Filip August je pro??irio tvr??avu Louvre kako bi obranio grad od rije??nih invazija sa zapada, dao mu prve zidine izme??u 1190. i 1215., obnovio njegove mostove s obje strane sredi??njeg otoka i poplo??ao njegove glavne prometnice. Godine 1190. 
                    transformirao je biv??u pari??ku katedralnu ??kolu u studentsko-nastavni??ku korporaciju koja ??e postati Sveu??ili??te u Parizu i privu??i studente iz cijele Europe. Tijekom Stogodi??njeg rata, Pariz su okupirale Engleskoj prijateljski nastrojene burgundske snage od 1418., prije nego ??to su 
                    ga potpuno okupirali Englezi kada je Henry V. od Engleske u??ao u glavni grad Francuske 1420., usprkos naporima Ivane Orleanske 1429. da oslobodi grad, on ??e ostati pod engleskom okupacijom do 1436. godine. Pariz je bio sredi??te eksplozije filozofske i znanstvene aktivnosti poznate kao 
                    doba prosvjetiteljstva. Diderot i d'Alembert objavili su svoju Encyclop??die 1751., a bra??a Montgolfier lansirala su prvi let balonom s ljudskom posadom 21. studenoga 1783. iz vrtova Ch??teau de la Muette. Pariz je bio financijska prijestolnica kontinentalne Europe, primarno europsko sredi??te 
                    izdava??tva knjiga i mode te proizvodnje finog namje??taja i luksuzne robe. U ljeto 1789. Pariz je postao sredi??nja pozornica Francuske revolucije . Dana 14. srpnja rulja je zauzela arsenal u Domu invalida , nabaviv??i tisu??e pu??aka i upala u Bastillu , simbol kraljevske vlasti. 
                    Prva nezavisna Pari??ka komuna ili gradsko vije??e sastalo se u H??tel de Ville i 15. srpnja izabralo gradona??elnika , astronoma Jeana Sylvaina Baillyja.
                </p>
            </div>
            <div v-if="value3" class="tekstualniOkvir">
                <h3>Doga??aji i aktivnosti</h3>
                <p>
                    Emblematski Eiffelov toranj nadvisuje Champ de Mars u elegantnom 7. arondismanu, a njegov tre??i kat nudi ??iroku panoramu Pariza. Neposredno ispod je fascinantan pogled na delikatne ??eljezne konstrukcije koje je konstruirao Gustave Eiffel, koji je 1889. godine dobio narud??bu za izgradnju tornja 
                    za Exposition Universelle. Duga??ak je put uz stepenice, ali potrebno je manje vremena nego ??ekanje u redu za dizala. Niz stepenica vodi do bijele kupole Basilique du Sacr??-Coeur, koja dominira Montmartreom. Ova je crkva izgra??ena izme??u 1875. i 1914. kako bi se ispunio zavjet dat tijekom 
                    francusko-pruskog rata. Unutra??njost je prekrasna s neobizantskim mozaicima, a toranj s kupolom pru??a spektakularan pogled na Pariz. Kripta sadr??i zanimljivu zbirku vjerskih relikvija i dijaprojekciju o izgradnji bazilike. Izgra??en kao tvr??ava u srednjem vijeku, a obnovljen u 16. stolje??u 
                    kao kraljevska pala??a, Louvre je tek 1793. postao muzej. Danas je to dom nekih od svjetski najpoznatijih umjetni??kih djela, uklju??uju??i Mona Lisu i Veneru de Milo. Stalna zbirka tako??er uklju??uje gr??ke, etru????anske, rimske, egipatske i isto??nja??ke antikvitete, kao i skulpture, umjetni??ke 
                    predmete, grafike i crte??e. Ova zbirka djela Pabla Picassa smje??tena je u zadivljuju??oj vili iz 17. stolje??a u Maraisu. Zastupljene su sve faze njegove umjetnosti, s pripremnim skicama i slikama koje pokrivaju Plavo razdoblje, Razdoblje ru??a, kubizam, klasicizam i nadrealizam, te skulpture 
                    u rasponu od goleme gipsane glave do male ma??ke. Nezaboravna djela uklju??uju autoportret Paola kao Harlekina, nadrealni Veliki akt u crvenom naslonja??u i dirljive slike Marie-Therese, njegove ljubavnice i muze.
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.76457543198!2d2.276995541486795!3d48.858946580710985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sPariz%2C%20Francuska!5e0!3m2!1shr!2shr!4v1660608357802!5m2!1shr!2shr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br>
	<h2 class="hotelHeader">Pregledajte hotelski smje??taj</h2>
    <hr class="potez"">
	<iframe id='hotelwidget' src='https://hatlastravel.com/widget/hotels?place=paris&partner=1' style='height:500px;width:100%;margin:auto;padding:5px;display:block;overflow:hidden;border:none;position:relative' scrolling='no' loading='lazy'>></iframe>??
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