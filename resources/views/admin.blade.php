<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin.css'); }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
	<title>Admin panel</title>
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
            <a href="{{ route('admin') }}" id="panel"><img src="{{ URL::asset('images/settings.png'); }}" alt="settings"></a>
        @endauth
            
        @guest
            <a href="{{ route('login') }}">Prijava</a>
            <a href="{{ route('register') }}">Registracija</a>
        @endguest
    </div>
    <h1 class="h1">Ovlasti administratora</h1>
    <br>
    <br>
    <h2 class="h2">Upravljanje korisnicima</h2>
    <br>
    @php( $users = DB::table('users')->get() )
    <div class="zaTablicu">
        <table id="korisnici">
            <thead>
                <th>Ključ</th>
                <th>Korisničko ime</th>
                <th>E-mail</th>
                <th>Razina prava (1-korisnik, 2-admin)</th>
                <th>Povećaj prava</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->type }} </td>
                    <td> 
                        @if($user->type==1)
                            <a href="{{route('promjeniovlasti', ['id' => $user->id])}}"> Promjeni ovlasti </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready( function () {
            $('#korisnici').DataTable();
        });
    </script>
    <br><br>
    <h2 class="h2">Upravljanje temom početne stranice</h2>
    <br>
    <div id="teme">
        Proljeće:<a href="{{route('promjenitemu', ['id' => 1])}}"> odaberi </a><br>
        Ljeto:<a href="{{route('promjenitemu', ['id' => 2])}}"> odaberi </a><br>
        Jesen:<a href="{{route('promjenitemu', ['id' => 3])}}"> odaberi </a><br>
        Zima:<a href="{{route('promjenitemu', ['id' => 4])}}"> odaberi </a><br>
        Nova godina:<a href="{{route('promjenitemu', ['id' => 5])}}"> odaberi </a><br>
        Uskrs:<a href="{{route('promjenitemu', ['id' => 6])}}"> odaberi </a><br>
        Božić:<a href="{{route('promjenitemu', ['id' => 7])}}"> odaberi </a><br>
    </div>
</body>
</html>