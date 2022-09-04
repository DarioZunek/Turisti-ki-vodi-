<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css'); }}">
	<title>Početna stranica</title>
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

    <div class="saSlikom" style="background-image: url({{ URL::asset('images/betacover.jpg'); }});">
        <h1 class="h1"><span> Dobrodošli na turistički vodič </span></h1>
        <h2 class="h2"><span> Svijetom </span></h2>
        <div id="gumbi">
            <a id="selektor" href="{{ route('london') }}"> London </a>
            <a id="selektor" href="{{ route('pariz') }}"> Pariz </a>
            <a id="selektor" href="{{ route('newyork') }}"> New York </a>
            <a id="selektor" href="{{ route('dubai') }}"> Dubai </a>
            <a id="selektor" href="{{ route('tecaj') }}"> Tečajevi </a>
        </div>
        <br>
        <br>
        <p class="dobrodosli">
            Dobrodošli na stranice turističkog vodiča <em>Svijetom</em>! Ovdje možete pregledati destinacije i saznati sve što vas zanima o vašem potencijalnom putovanju. Pripremili smo
            vam alate koji vam mogu olakšati organizaciju putovanja. Saznajte kakvo je vrijeme u odabranom gradu, naručite let, rezervirajte smiještaj ili jednostavno utažite radoznalost i pogledajte 
            na karti gdje se destinacija nalazi. Ako vas brine koliko deviza trebate kupiti pogledajte na stranici tečaj trenutnu vrijednost. Pripremili smo vam opis lokacije, njenu povijest 
            i neka mjesta koja se često tamo posječuju.
        </p> 
    </div>
    <h2> Destinacije </h2>
    <br>
    <div id="tema">
        @php( $tema = DB::table('theme')->get()->last() )
        @if ($tema->active==1)
            <img src="{{ URL::asset('images/spring.jpg'); }}" alt="spring">
        @elseif ($tema->active==2)
            <img src="{{ URL::asset('images/summer.jpg'); }}" alt="summer">
        @elseif ($tema->active==3)
            <img src="{{ URL::asset('images/autumn.jpg'); }}" alt="autumn">
        @elseif ($tema->active==4)
            <img src="{{ URL::asset('images/winter.jpg'); }}" alt="winter">
        @elseif ($tema->active==5)
            <img src="{{ URL::asset('images/newyear.jpg'); }}" alt="newyear">
        @elseif ($tema->active==6)
            <img src="{{ URL::asset('images/easter.jpg'); }}" alt="easter">
        @elseif ($tema->active==7)
            <img src="{{ URL::asset('images/christmas.jpg'); }}" alt="christmas"> 
        @endif
    </div>
    <div id="oba">
        <div class="prvi">
            <h3>London</h3>
            <div class="okvir">
                <img src="{{ URL::asset('images/london.jpg'); }}" alt="london">
            </div>
        </div>
        <div class="drugi">
            <h3>Pariz</h3>
            <div class="okvir">
                <img src="{{ URL::asset('images/paris.jpg'); }}" alt="london">
            </div>
        </div>
        <br><br>
        <div class="prvi">
            <h3>New York</h3>
            <div class="okvir">
                <img src="{{ URL::asset('images/newyork.jpg'); }}" alt="london">
            </div>
        </div>
        <div class="drugi">
            <h3>Dubai</h3>
            <div class="okvir">
                <img src="{{ URL::asset('images/dubai.jpg'); }}" alt="london">
            </div>
        </div>
    </div>
</body>
</html>