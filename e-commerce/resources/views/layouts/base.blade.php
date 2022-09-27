<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title') {{ config('app.name') }} @show
    </title>
</head>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <div>

        <h1>E-commerce</h1>

        <ul>
            <li>
                <a href="{{ route('home') }}">Accueil</a>
            </li>

            <li>
                <a href="{{ route('phone') }}">Téléphone</a>
            </li>

            <li>
                <a href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </div>
    
    @yield('content')
</body>
</html>