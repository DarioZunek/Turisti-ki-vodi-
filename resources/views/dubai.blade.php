<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/city.css'); }}">
	<title>Dubai</title>
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
        <div id="saSlikom" style="background-image: url({{ URL::asset('images/dubai_panorama.jpeg'); }});">
            <div v-cloak id='zaNaslov'>
                <h1 class="h1"> @{{ title }} </h1>
            </div>
            <div id="gumbi">
                <button id="selektor" v-on:click="first">O gradu</button>
                <button id="selektor" v-on:click="second">Povijest</button>
                <button id="selektor" v-on:click="third">Događaji i aktivnosti</button>
            </div> 
            <div id="predstavljanje">
                <p>Dubai je najnaseljeniji grad u Ujedinjenim Arapskim Emiratima (UAE) i glavni grad Emirata Dubai, najnaseljenije od 7 monarhija koje zajedno čine Ujedinjene Arapske Emirate. Osnovan u 18. stoljeću kao malo ribarsko selo, grad je brzo rastao početkom 21. stoljeća s fokusom na turizam i luksuz, 
                    s drugim najvećim hotelima s pet zvjezdica na svijetu i najvišom zgradom na svijetu, Burj Khalifa, koji je visok preko pola milje.
                </p>
            </div>
        </div>
        <div id="lijevi">
                <div class="flightWidget">
                    <div class="hellowings-widget-wrap" data-hellowings-target="https://en.hellowings.com/widget-loader/search-widget?mode=col-mode"></div>
                    <script src="https://en.hellowings.com/widget-loader.js?v=20170706" ></script>
                </div>
                <div class="weather">
                    <a class="weatherwidget-io" href="https://forecast7.com/hr/25d2055d27/dubai/" data-label_1="DUBAI" data-label_2="VRIJEME" data-theme="original" >DUBAI VRIJEME</a>
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                    </script>
                </div>
        </div>
        <div id="desni">
            <div v-if="value1" class="tekstualniOkvir">
                <h3>O gradu</h3>
                <p>
                    U istočnom Arapskom poluotoku na obali Perzijskog zaljeva, također je glavno globalno prometno čvorište za putnike i teret. Prihodi od nafte pomogli su ubrzati razvoj grada, koji je već bio glavno trgovačko središte. Središte regionalne i međunarodne trgovine od ranog 20. stoljeća, gospodarstvo Dubaija oslanja se na prihode od trgovine, turizma, zrakoplovstva, nekretnina i financijskih usluga. 
                    Proizvodnja nafte doprinijela je manje od 1 posto BDP-a Emirata u 2018. Grad ima oko 3,4 milijuna stanovnika (od 2021.). Dubai se nalazi na obali Perzijskog zaljeva Ujedinjenih Arapskih Emirata i nalazi se otprilike na razini mora (16 m iznad). Emirat Dubai dijeli granicu s Abu Dhabijem na jugu, Sharjahom na sjeveroistoku i Sultanatom Oman na jugoistoku. Hatta, manja eksklava emirata, 
                    s tri je strane okružena Omanom i emiratima Ajman (na zapadu) i Ras Al Khaimah (na sjeveru). Perzijski zaljev graniči sa zapadnom obalom emirata. Dubai se nalazi na 25.2697°N 55.3095°E i pokriva područje od 4.110 km2, što predstavlja značajno proširenje izvan njegovih početnih 3.900 km2 zbog melioracije zemljišta iz mora.[potreban citat]
                    Dubai se nalazi izravno unutar arapske pustinje. Međutim, topografija Dubaija značajno se razlikuje od one u južnom dijelu UAE po tome što je veći dio krajolika Dubaija istaknut pješčanim pustinjskim uzorcima, dok šljunčane pustinje dominiraju većim dijelom južne regije zemlje. Pijesak se uglavnom sastoji od zdrobljenih školjaka i koralja te je fin, čist i bijel. Istočno od grada, 
                    obalne ravnice prekrivene solju, poznate kao sabkha, ustupaju mjesto liniji dina koja se proteže od sjevera prema jugu. Dalje prema istoku, dine rastu i obojane su crveno željeznim oksidom. Ravna pješčana pustinja ustupa mjesto zapadnim planinama Hajar, koje se protežu uz granicu Dubaija s Omanom u Hatti. Zapadni lanac Hajar ima suh, nazubljen i razrušen krajolik, čije se planine na nekim mjestima uzdižu do oko 1300 metara. 
                    Dubai nema prirodnih riječnih tokova ili oaza, međutim, Dubai ima prirodni zaljev, Dubai Creek, koji je izdubljen kako bi bio dovoljno dubok za prolazak velikih brodova. Dubai također ima više klanaca i vodotokova koji se nalaze u podnožju zapadnih planina Al Hajar.
                </p>
            </div>
            <div v-if="value2" class="tekstualniOkvir">
                <h3>Povijest</h3>
                <p>
                    Povijest ljudskih naselja na području koje sada definiraju Ujedinjeni Arapski Emirati bogata je i složena i ukazuje na opsežne trgovačke veze između civilizacija doline Inda i Mezopotamije, ali i sve do Levanta. Arheološki nalazi u emiratu Dubai, posebno u Al-Ashoosh, Al Sufouhu i posebno bogatom nalazištu iz Saruq Al Hadida pokazuju naseljavanje kroz razdoblja Ubaid i Hafit, razdoblja Umm Al Nar i Wadi Suq te tri željezna doba u UAE.
                    Područje je Sumeranima bilo poznato kao Magan i bilo je izvorište metalnih proizvoda, osobito bakra i bronce. Područje je bilo prekriveno pijeskom prije otprilike 5000 godina kada se obala povukla u unutrašnjost, postavši dio današnje obale grada. Pronađena je predislamska keramika iz 3. i 4. stoljeća. Prije uvođenja islama na ovo područje, ljudi u ovoj regiji obožavali su Bajir (ili Bajar). Nakon širenja islama u regiji, 
                    umajadski kalif istočnog islamskog svijeta napao je jugoistočnu Arabiju i protjerao Sasanide. Iskapanja Muzeja Dubaija u regiji Al-Jumayra (Jumeirah) pronašla su nekoliko artefakata iz razdoblja Umayyada. Dubai se prvi put spominje 1095. godine u Knjizi geografije andaluzijsko-arapskog geografa Abu Abdullaha al-Bakrija. Venecijanski trgovac biserima Gasparo Balbi posjetio je to područje 1580. i spomenuo Dubai (Dibei) zbog njegove industrije bisera.
                    Smatra se da je Dubai osnovan kao ribarsko selo početkom 18. stoljeća i da je do 1822. godine bio grad od nekih 700-800 pripadnika plemena Bani Yas i podložan vladavini šeika Tahnuna bin Shakhbuta iz Abu Dhabija. Godine 1833., nakon plemenskih sukoba, članovi plemena Al Bu Falasah odvojili su se od Abu Dhabija i nastanili se u Dubaiju. Egzodus iz Abu Dhabija vodili su Obeid bin Saeed i Maktoum bin Butti, koji su postali zajednički vođe Dubaija sve dok Ubaid nije umro 1836., 
                    ostavljajući Maktumu da uspostavi dinastiju Maktoum. Dubai je potpisao Opći pomorski ugovor iz 1820. s britanskom vladom zajedno s drugim Trucial državama, nakon britanske kampanje 1819. protiv Ras Al Khaimaha. To je dovelo do trajnog pomorskog primirja 1853.
                </p>
            </div>
            <div v-if="value3" class="tekstualniOkvir">
                <h3>Događaji i aktivnosti</h3>
                <p>
                    S 828 m visine Burj Khalifa jedna je od najviših zgrada na svijetu. Sadrži najvišu javnu platformu za promatranje na planetu, koja nudi neusporediv pogled na grad sa 148. kata. Tu se također nalazi prvi hotel Armani ikada. Neboder, koji je otvoren 2010., i dalje je jedna od gradskih atrakcija koje morate posjetiti. Smješten unutar jedne od najstarijih zgrada u gradu, tvrđave Al-Fahidi, Muzej Dubaija otvoren je 1970. i ostaje jedna od glavnih turističkih atrakcija Dubaija. 
                    Izložbe sežu od starog oružja i opreme za ronjenje bisera do impresivnog niza vojnih artefakata i komada uzetih iz 4000 godina starih grobova u Al-Ghusaisu. Jedna od najfotografiranijih građevina u gradu, džamija Jumeirah je impresivan primjer moderne islamske arhitekture. Izgrađen po srednjovjekovnim fatimidskim linijama, ima dva minareta i suptilno je osvijetljen noću. Nemuslimanima nije dopušten ulazak u džamije u Dubaiju, iako džamija Jumeirah dopušta nemuslimanima posjet putem organiziranog obilaska.
                    Dubai Creek od 14 km prirodna je uvala morske vode koja dijeli središnji Dubai na dva dijela: Deira i Bur Dubai. Unatoč brojnim neboderima, potok je zadržao šarm starog svijeta. U unutrašnjosti, utočište za divlje životinje dom je za više od 27 000 ptica, iako su butik hoteli i jahtaški klubovi također nižu obale. Kada je galerija B21 krenula s radom, bila je to pionirski pothvat u smislu izlaganja suvremene bliskoistočne umjetnosti u Dubaiju. Sada je galerija Isabelle van den Eynde preuzela baklju i najbolje je mjesto za vidjeti originalna i često izazovna djela umjetnika iz regije i šire.
                    Povijesna Bastakiya jedan je od rijetkih dijelova Dubaija s pedigreom nakon 1970-ih. Prošećite pokraj lokalnih kuća i dvorišta duž Dubai Creeka i razgledajte tradicionalne tornjeve za vjetar koji su se nekoć koristili za hlađenje domova. Ovdje se također nalazi skromni muzej, plus mnoštvo kafića, malih umjetničkih galerija i subotnje ulične tržnice. Jedan od najvećih vodenih parkova u Dubaiju, Aquaventure čini dio hotelskog kompleksa Atlantis i sadrži niz bazena, izdanaka i žlijebova - među kojima su Neptunov toranj od kojeg diže kosu i jednako zastrašujući Posejdonov toranj. 
                    Ako to nije dovoljno, tu su i zip-line i bazen s dupinima.
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.30120302504!2d54.947302238342786!3d25.076381466775672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20Ujedinjeni%20Arapski%20Emirati!5e0!3m2!1shr!2shr!4v1660698336027!5m2!1shr!2shr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br>
	<h2 class="hotelHeader">Pregledajte hotelski smještaj</h2>
    <hr class="potez"">
	<iframe id='hotelwidget' src='https://hatlastravel.com/widget/hotels?place=dubai&partner=1' style='height:500px;width:80%;margin:auto;padding:5px;display:block;overflow:hidden;border:none;position:relative' scrolling='no' loading='lazy'>></iframe>¸
    <hr class="potez"">
    <br>
    @php
        use App\Models\City;
        $city = City::find(4);
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