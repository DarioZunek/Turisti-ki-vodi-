<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/city.css'); }}">
	<title>London</title>
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
        <div id="saSlikom" style="background-image: url({{ URL::asset('images/london_panorama.jpg'); }});">
            <div v-cloak id='zaNaslov'>
                <h1 class="h1"> @{{ title }} </h1>
            </div>
            <div id="gumbi">
                <button id="selektor" v-on:click="first">O gradu</button>
                <button id="selektor" v-on:click="second">Povijest</button>
                <button id="selektor" v-on:click="third">Doga??aji i aktivnosti</button>
            </div> 
            <div id="predstavljanje">
                <p>Status Londona kao istinski globalnog grada je neizbrisiv. Novi posjetitelji obi??no se usredoto??uju na West End i njegova okolna podru??ja, uranjaju??i u klasi??ne ikone The Big Smoke; od crnih taksija i crvenih autobusa na kat do goti??kih tornjeva obli??njih zgrada Parlamenta. 
                Mogu??nosti kupnje odgovaraju svakom gradu, s vrhunskim trgovinama u ulici Oxford Street koje se uzdi??u poput svjetionika. </p>
            </div>
        </div>
        <div id="lijevi">
                <div class="flightWidget">
                    <div class="hellowings-widget-wrap" data-hellowings-target="https://en.hellowings.com/widget-loader/search-widget?mode=col-mode"></div>
                    <script src="https://en.hellowings.com/widget-loader.js?v=20170706" ></script>
                </div>
                <div class="weather">
                    <a class="weatherwidget-io" href="https://forecast7.com/hr/51d51n0d13/london/" data-label_1="LONDON" data-label_2="VRIJEME" data-theme="original" >LONDON VRIJEME</a>
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                    </script>
                </div>
        </div>
        <div id="desni">
            <div v-if="value1" class="tekstualniOkvir">
                <h3>O gradu</h3>
                <p>
                    London je glavni i najve??i grad Engleske i Ujedinjenog Kraljevstva, s ne??to vi??e od 9 milijuna stanovnika. Nalazi se na rijeci Temzi u jugoisto??noj Engleskoj na vrhu estuarija dugog 50 milja (80 km) do Sjevernog mora i bio je glavno naselje dva tisu??lje??a. Londonski City, njegovu drevnu jezgru i financijsko sredi??te, osnovali su Rimljani kao Londinium i zadr??ava granice bliske srednjovjekovnim.
                    Od 19. stolje??a, naziv "London" tako??er se odnosio na metropolu oko ove jezgre, povijesno podijeljenu izme??u okruga Middlesex , Essex , Surrey , Kent i Hertfordshire, koji uglavnom obuhva??a Veliki London, kojim upravlja Greater London Authority. Grad Westminster, zapadno od londonskog Cityja, stolje??ima je dr??ao nacionalnu vladu i parlament.
                    Kao jedan od najve??ih svjetskih globalnih gradova, London ima sna??an utjecaj na svoju umjetnost, zabavu, modu, trgovinu i financije, obrazovanje, zdravstvenu skrb, medije, znanost i tehnologiju, turizam te promet i komunikacije. Njegov BDP (801,66 milijardi eura u 2017.) ??ini ga najve??im urbanim gospodarstvom u Europi, i jedno je od glavnih financijskih sredi??ta u svijetu. 
                    Od 2021. London je imao najvi??e milijuna??a od svih gradova. S najve??om koncentracijom institucija visokog obrazovanja u Europi, uklju??uje Imperial College Londonu prirodnim i primijenjenim znanostima, London School of Economics u dru??tvenim znanostima i sveobuhvatni University College London. London ima najprometniji sustav gradskih zra??nih luka na svijetu, a londonska podzemna ??eljeznica je najstariji brzi tranzitni sustav na svijetu. 
                    London je jedan od najposje??enijih gradova na svijetu i dom je najvi??e hotela s 5 zvjezdica u bilo kojem gradu. Raznolike kulture Londona obuhva??aju vi??e od 300 jezika. Sredinom 2018. populacija ??ireg Londona od oko 9 milijuna u??inila ga je tre??im najnaseljenijim gradom u Europi, ??ine??i 13,4% stanovni??tva Ujedinjenog Kraljevstva i preko 16% stanovni??tva stanovni??tvo Engleske. 
                    Izgra??eno podru??je ??ireg Londona ??etvrto je po broju stanovnika u Europi, nakon Istanbula, Moskve i Pariza, s oko 9,8 milijuna stanovnika prema popisu iz 2011. godine. 
                    Londonsko metropolitansko podru??je tre??e je po broju stanovnikau Europi nakon Istanbula i Moskve, s oko 14 milijuna stanovnika 2016.
                </p>
            </div>
            <div v-if="value2" class="tekstualniOkvir">
                <h3>Povijest</h3>
                <p>
                    Unato?? dokazima o ra??trkanim britonskim naseljima na tom podru??ju, prvo ve??e naselje osnovali su Rimljani oko ??etiri godine nakon invazije 43. godine. To je trajalo samo do oko 61. godine poslije Krista, kada je pleme Iceni predvo??eno kraljicom Boudicom napalo i spalilo ga do temelja. Sljede??a planirana inkarnacija Londiniuma je napredovala, zamijeniv??i Colchester kao glavni grad rimske provincije Britannije 100. godine. 
                    Na svom vrhuncu u 2. stolje??u, rimski London imao je oko 60.000 stanovnika. S padom rimske vladavine u ranom 5. stolje??u, London je prestao biti prijestolnica, a zidinama opasan grad Londinium je zapravo napu??ten, iako se rimska civilizacija nastavila oko St Martin-in-the-Fields do oko 450. Od oko 500., anglosaksonsko naselje poznato kao Lundenwic razvilo se ne??to zapadnije od starog rimskog grada. 
                    Oko 680. grad je ponovno postao velika luka, ali malo je dokaza o velikoj proizvodnji. Od 820-ih ponovljeni vikin??ki napadi donijeli su pad. Zabilje??ena su tri; one iz 851. i 886. su uspjele, dok je posljednja, iz 994. godine, odbijena. Lancastrianska opsada Londona 1471. napadnuta je od strane Yorkista. 
                    Vikinzi su primijenili Danelaw na ve??i dio isto??ne i sjeverne Engleske, a granica je tekla otprilike od Londona do Chestera kao podru??ja politi??ke i geografske kontrole nametnute vikin??kim upadima s kojima su se formalno dogovorili danski vojskovo??a Guthrum i zapadnosaksonski kralj Alfred Veliki godine. 886. 
                    Anglosaksonska kronika bilje??i da je Alfred "ponovno utemeljio" London 886. Arheolo??ka istra??ivanja pokazuju da je to uklju??ivalo napu??tanje Lundenwica i o??ivljavanje ??ivota i trgovine unutar starih rimskih zidina. London je tada polako rastao sve do dramati??nog porasta oko 950. godine.
                    Do 11. stolje??a London je o??ito bio najve??i grad u Engleskoj. Westminsterska opatija , koju je u romani??kom stilu obnovio kralj Edward Ispovjednik , bila je jedna od najve??ih crkava u Europi. Winchester je bio glavni grad anglosaksonske Engleske , ali je od tog vremena London postao glavni forum za strane trgovce i baza za obranu u vrijeme rata.
                </p>
            </div>
            <div v-if="value3" class="tekstualniOkvir">
                <h3>Doga??aji i aktivnosti</h3>
                <p>
                    Gongovi Big Bena nedvojbeno su najprepoznatljiviji zvukovi Londona, a uz njega se nalazi Westminsterska pala??a u kojoj zasjedaju Donji dom i Dom lordova. Najstariji dio mjesta star je vi??e od 900 godina, a izleti - uklju??uju??i popodnevni ??aj, ako to ??elite - mogu se rezervirati tijekom cijele godine.
                    Kralji??in dom u Londonu ikona je i vrijedi tempirati svoj posjet kako biste uhvatili ceremoniju smjene stra??e, koja se odr??ava svakoga dana u 11:30 od travnja do srpnja i na druge dane ostatak godine. Od kraja srpnja do rujna tako??er mo??ete obi??i unutarnje Dr??avne sobe dok kraljica odlazi u ??kotsku na svoj ljetni odmor.
                    Ovu zloglasnu kraljevsku tvr??avu na Tower Hillu zapo??eo je graditi William Osvaja?? 1078. i ostala je kraljevska rezidencija do sredine 16. stolje??a. Danas se u njemu nalaze neprocjenjivi krunski dragulji, kolekcija Kraljevske oru??arnice i njezini poznati gavranovi za koje legenda ka??e da bi - ako ikada napuste toranj - potaknuli pad britanske krune.
                    Kupola katedrale svetog Pavla jedno je od najistaknutijih obilje??ja horizonta Londona. Sada??nja zgrada, koju je projektirao Sir Christopher Wren, dovr??ena je 1710. na mjestu izvorne katedrale koja je uni??tena u Velikom po??aru u Londonu 1666. Unutra??njost kupole, nazvana Whispering Gallery zbog svoje nevjerojatne akustike, nudi krupni plan freski iz ??ivota svetog Pavla.
                    Milijuni posjetitelja svake godine pro??u kroz vrata Britanskog muzeja kako bi se divili njegovoj golemoj zbirci antikviteta, umjetnosti i skulptura. Ima najopse??niju zbirku egipatskih antikviteta na svijetu izvan Kaira. Neprocjenjive zbirke uklju??uju poznati kamen iz Rosette i 5000 godina staru mumiju osu??enu u pijesku. Ulaz je besplatan.
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810784922!2d-0.24168043751141846!3d51.52877184053823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20Ujedinjeno%20Kraljevstvo!5e0!3m2!1shr!2shr!4v1660172830485!5m2!1shr!2shr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br>
	<h2 class="hotelHeader">Pregledajte hotelski smje??taj</h2>
    <hr class="potez"">
	<iframe id='hotelwidget' src='https://hatlastravel.com/widget/hotels?place=london&partner=1' style='height:500px;width:80%;margin:auto;padding:5px;display:block;overflow:hidden;border:none;position:relative' scrolling='no' loading='lazy'>></iframe>??
    <hr class="potez"">
    <br>
    @php
        use App\Models\City;
        $city = City::find(1);
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
                                <br>
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