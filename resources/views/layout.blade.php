<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
        

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('us')
                                <img src="{{asset('img/us.png')}}"> English
                                @break
                                @case('ger')
                                <img src="{{asset('img/ger.png')}}"> German
                                @break
                                @case('in')
                                <img src="{{asset('img/in.png')}}"> Hindi
                                @break
                                @case('fr')
                                <img src="{{asset('img/fr.png')}}"> French
                                @break
                                @case('es')
                                <img src="{{asset('img/es.png')}}"> Spanish
                                @break
                                @case('ch')
                                <img src="{{asset('img/ch.png')}}"> Chinese
                                @break
                                @default
                                <img src="{{asset('img/us.png')}}"> English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="lang/en"><img src="{{asset('img/us.png')}}"> English</a>
                            <a class="dropdown-item" href="lang/ger"><img src="{{asset('img/ger.png')}}"> German</a>
                            <a class="dropdown-item" href="lang/in"><img src="{{asset('img/in.png')}}"> Hindi</a>
                            <a class="dropdown-item" href="lang/fr"><img src="{{asset('img/fr.png')}}"> French</a>
                            <a class="dropdown-item" href="lang/es"><img src="{{asset('img/es.png')}}"> Spanish</a>
                            <a class="dropdown-item" href="lang/ch"><img src="{{asset('img/ch.png')}}"> Chinese</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</html>
