@extends('layouts.base')

@section('title')
    Contact - @parent
@endsection

@section('content')
    <div class="space-y-6">

        <div class="w-full">

            <div class="text-center px-5 py-11 bg-zinc-300">
                <div class="mx-[200px]">
                    <h1 class="text-4xl">Contact</h1>

                    <p class="text-lg font-extralight text-zinc-800">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, veniam, eius aliquam quidem rem sunt nam quaerat facilis ex error placeat ipsa illo sed inventore soluta ipsum cumque atque ea?
                    </p>
                </div>
            </div>
        </div>

        <div class="mx-[300px]">
            <div>
                <a href="{{ route('home') }}" class="text-blue-500">Accueil</a>
                / Contact
            </div>
        </div>
    </div>
    
    <div class="mx-auto w-[1000px] flex space-x-6">
            <div class="w-[800px] border space-y-6">
                <h1 class="bg-blue-500 text-white p-2 rounded-t">Contactez-nous</h1>

                <form action="" method="post" class="space-y-6">
                    @csrf

                    <div class="mx-auto w-[350px] grid">
                        <label for="message">Nom</label>
                        <input type="text" name="name" id="name" placeholder="Votre nom" class="border w-[300px] p-1">
                    </div>

                    <div class="mx-auto w-[350px] grid">
                        <label for="message">E-mail</label>
                        <input type="text" name="email" id="email" placeholder="Votre E-mail" class="border w-[300px] p-1">
                    </div>

                    <div class="mx-auto w-[300px] grid">
                        <label for="message">Message</label>
                        <textarea type="text" id="message" rows="3" class="border"></textarea>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded">Envoyer</button>
                    </div>
                </form>
            </div>

            <div class="w-[300px]">
                <h1 class="bg-green-500 text-white p-2 rounded-t">ADRESSE</h1>

                <div class="border py-5 px-1 bg-zinc-200 rounded">
                    <p>3 rue des Champs Elysées</p>
                    <p>75008 PARIS</p>
                    <p>France</p>
                    <p>Email : email@example.com</p>
                    <p>Tel. +33 12 56 11 51 84</p>
                </div>
            </div>
        </div>
    </div>
@endsection