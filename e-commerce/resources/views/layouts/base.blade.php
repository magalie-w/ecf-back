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
    <header class="mx-auto w-full bg-zinc-800">
        <div class="text-white flex justify-around p-5 items-center">
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

            {{-- RECHERCHE --}}
            <div class="flex items-center space-x-5">
                <form>
                    <div class="flex">
                        <input type="text" placeholder="Recherche.." class="rounded-l pl-1">
                        <button class="bg-zinc-500 p-1 rounded-r" type="button">
                            <img src="img/search.svg" alt="" width="25">
                        </button>
                    </div>
                </form>

                {{-- PANIER --}}
                <div class="bg-green-500 p-2 rounded">
                    <p>Panier</p>
                </div>


                {{-- CONNEXION / INSCRIPTION --}}
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

    <footer class="bg-zinc-800 text-white p-5">
        <div class="mx-auto container flex justify-around">
            <div class="w-[300px] space-y-5">
                <h5>A propos</h5>

                <hr>

                <p>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                </p>
            </div>

            <div class="space-y-5">
                <h5>Informations</h5>

                <hr>

                <ul class="list-none">
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                    <li>Link 4</li>
                </ul>
            </div>

            <div class="space-y-5">
                <h5>Others Links</h5>

                <hr>

                <ul class="list-none">
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                    <li>Link 4</li>
                </ul>
            </div>

            <div class="space-y-5">
                <h5>Contact</h5>

                <hr>

                <ul class="list-none">
                    <li>My Company</li>
                    <li>email@example.com</li>
                    <li>03 12 23 45 56</li>
                    <li>06 56 56 48 58</li>
                </ul>
            </div>
        </div>

        <div class="mx-auto container">
            <a href="#">Back to top</a>
        </div>
    </footer>
</body>
</html>