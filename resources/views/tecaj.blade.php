<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/tecaj.css'); }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

	<title>Tečajna lista</title>
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
    <br>
    <a id="gumb" href="https://cors-anywhere.herokuapp.com/"> Otključaj </a>

    <?php 
    date_default_timezone_set("Europe/Zagreb");
    ?>
	<h1>Tečajna lista na dan {{ date('d/m/Y H:i:s') }} prema HRK</h1>

    <div id="tablica">
        <table id="tecajnaLista" class="display" width="100%"></table>
    </div>
    <script>
        var dataJSON;
        fetch('https://cors-anywhere.herokuapp.com/api.hnb.hr/tecajn/v1')
        .then((response) => response.json())
        .then((data) => Ucitaj(data));

        function Ucitaj(podaci) {
        
        var tablica = $("#tecajnaLista")

        tablica.DataTable ({
            "data" : podaci,
            "columns" : [
                { "data" : "Broj tečajnice", "title" : "Broj tečajnice" },
                { "data" : "Datum primjene", "title" : "Datum primjene" },
                { "data" : "Država", "title" : "Država" },
                { "data" : "Šifra valute", "title" : "Šifra valute" },
                { "data" : "Valuta", "title" : "Valuta" },
                { "data" : "Jedinica", "title" : "Jedinica" },
                { "data" : "Kupovni za devize", "title" : "Kupovni za devize" },
                { "data" : "Srednji za devize", "title" : "Srednji za devize" },
                { "data" : "Prodajni za devize", "title" : "Prodajni za devize" }
            ],
        });
        }
    </script>
    <br><br><br>
    <div id="slika">
        <img src="{{ URL::asset('images/foreign-exchange.jpg'); }}" alt="novac">
    </div>
</body>
</html>