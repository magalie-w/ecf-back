@extends('layouts.base')

@section('title')
    Téléphone - @parent
@endsection

@section('content')

    <div class="space-y-6">

        <div class="w-full">

            <div class="text-center px-5 py-11 bg-zinc-300">
                <div class="mx-[200px]">
                    <h1 class="text-4xl">Produits</h1>

                    <p class="text-lg font-extralight text-zinc-800">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, veniam, eius aliquam quidem rem sunt nam quaerat facilis ex error placeat ipsa illo sed inventore soluta ipsum cumque atque ea?
                    </p>
                </div>
            </div>
        </div>

        <div class="mx-[300px]">
            <div>
                <a href="{{ route('home') }}" class="text-blue-500">Accueil</a>
                / Produits
            </div>

            <div class="flex space-x-6">
                {{-- FILTRE --}}
                <div class="w-[400px] space-y-6">
                    <div>
                        <h2 class="bg-blue-500 text-white p-2 rounded-t">FILTRES</h2>

                        <form class="space-y-3 p-2 border">
                            <div>
                                <input type="checkbox" name="bleu" value="bleu" id="bleu">
                                <label for="bleu">Bleu</label>
                            </div>

                            <div>
                                <input type="checkbox" name="rouge" value="rouge" id="rouge">
                                <label for="rouge">Rouge</label>
                            </div>

                            <div>
                                <input type="checkbox" name="vert" value="vert" id="vert">
                                <label for="vert">Vert</label>
                            </div>

                            <button class="bg-blue-500 text-white py-1 w-[200px] flex justify-center mx-auto rounded">Filtrer</button>
                        </form>
                    </div>

                    {{-- CATEGORIES --}}
                    <div>
                        <h2 class="bg-blue-500 text-white p-2 rounded-t">CATEGORIES</h2>

                        <ul class="border">
                            <li class="p-2 border">Cras justo odio</li>
                            <li class="p-2 border">Dapibus ac facilisis in</li>
                            <li class="p-2 border">Morbi leo risus</li>
                            <li class="p-2 border">Porta ac consectetur ac</li>
                            <li class="p-2 border">Vestibulum at eros</li>
                        </ul>
                    </div>

                    {{-- DERNIER PRODUIT --}}
                    <div class="w-[300px]">
                        <div>
                            <h2 class="bg-green-500 text-white p-2 rounded-t">DERNIER PRODUIT</h2>
                        </div>

                        <div class="w-[300px] h-[200px] bg-zinc-300">
                        
                        </div>

                        <div class="space-y-6 border">

                            <p class="text-blue-500 text-lg">Produit</p>

                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                            <div class="flex justify-center space-x-6">
                                <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                                <button type="button" class="bg-red-500 py-2 px-5 rounded">Voir</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between flex-wrap">

                    {{-- TELEPHONES --}}
                    @foreach ($products as $product)
                    {{-- @foreach ($categories as $category) --}}

                        <div class="w-[300px]">
                            <div class="w-[280px] h-[200px] bg-zinc-300">
                            
                            </div>
                            
                            <p class="text-blue-500 text-lg">{{ $product->title }}</p>

                            {{-- <p class="text-center px-3">{{ $category->$slug }}</p> --}}

                            <div class="flex justify-center space-x-6">
                                <button type="button" class="bg-green-500 py-2 px-5 rounded">{{ $product->price }} €</button>
                                <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                            </div>
                        </div>
                    {{-- @endforeach --}}
                    @endforeach

                    {{-- <div class="w-[300px]">
                        <div class="w-[280px] h-[200px] bg-zinc-300">
                        </div>

                        <p class="text-blue-500 text-lg">Produit</p>

                        <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                        <div class="flex justify-center space-x-6">
                            <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                            <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                        </div>
                    </div>


                    <div class="w-[300px]">
                        <div class="w-[280px] h-[200px] bg-zinc-300">
                        </div>

                        <p class="text-blue-500 text-lg">Produit</p>

                        <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                        <div class="flex justify-center space-x-6">
                            <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                            <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                        </div>
                    </div>

                    <div class="w-[300px]">
                        <div class="w-[280px] h-[200px] bg-zinc-300">
                        </div>

                        <p class="text-blue-500 text-lg">Produit</p>

                        <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                        <div class="flex justify-center space-x-6">
                            <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                            <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
@endsection