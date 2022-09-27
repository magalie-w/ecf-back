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
    <header>
        <div class="bg-zinc-800 text-white flex justify-around">
            <div>
                <ul class="flex space-x-5">
                    <li>
                        <a href="{{ route('home') }}">E-commerce</a>
                    </li>
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

            <div>
                <ul class="flex space-x-5">
                    <li>
                        <a href="{{ route('connexion') }}">Connexion</a>
                    </li>

                    <li>
                        <a href="{{ route('inscription') }}">Inscription</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    
    @yield('content')

    <footer>
        <div>
            <div>
                <li>A propos</li>
                <p>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                </p>
            </div>

            <div>
                <li>Informations</li>

                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
                <li>Link 4</li>
            </div>

            <div>
                <li>Others Links</li>

                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
                <li>Link 4</li>
            </div>

            <div>
                <li>Contact</li>

                <li>My Company</li>
                <li>email@example.com</li>
                <li>03 12 23 45 56</li>
                <li>06 56 56 48 58</li>
            </div>
        </div>
    </footer>
</body>
</html>