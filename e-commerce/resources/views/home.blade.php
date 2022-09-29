@extends('layouts.base')

@section('title')
    Accueil - @parent
@endsection

@section('content')
    <div class="space-y-5 w-full">
        <div class="text-center px-5 py-11 bg-zinc-300">
            <div class="mx-[200px]">
                <h1 class="text-4xl">E-Commerce</h1>

                <p class="text-lg font-extralight text-zinc-800">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum delectus ad quae cumque voluptates dolorum, neque eveniet, placeat obcaecati magnam vel fugit nulla autem, mollitia consequuntur praesentium sit? Veniam, facere.
                </p>
            </div>
        </div>

        {{-- COUP DE COEUR --}}
        <div class="mx-[200px] flex justify-around">

            <div class="w-[1000px] h-[400px] bg-blue-100">
                <p></p>
            </div>

            <div class="w-[300px] h-[50px] bg-blue-100">
                <div class="bg-green-500 p-2">Coup de coeur</div>

                <div class="bg-zinc-600 h-[200px]"></div>

                <div class="space-y-6">
                    <p class="text-center">Produit</p>
                    
                    <p class="px-5">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>

                    <div class="flex justify-center space-x-6">
                        <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>

                        <button type="button" class="bg-red-500 py-2 px-5 rounded">Voir</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- DERNIERS PRODUITS --}}
        <div class="mx-[250px] space-y-3">
            <div>
                <h2 class="bg-blue-500 text-white p-2 rounded-t">DERNIERS PRODUITS</h2>
            </div>

            <div class="flex justify-between">

                <div class="w-[300px] space-y-5">
                    <div class="w-[300px] h-[200px] bg-zinc-300">
                    </div>

                    <p class="text-blue-500 text-lg">Produit</p>

                    <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    <div class="flex justify-center space-x-6">
                        <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                        <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                    </div>
                </div>

                <div class="w-[300px] space-y-5">
                    <div class="w-[300px] h-[200px] bg-zinc-300">
                    </div>

                    <p class="text-blue-500 text-lg">Produit</p>

                    <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    <div class="flex justify-center space-x-6">
                        <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                        <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                    </div>
                </div>


                <div class="w-[300px] space-y-5">
                    <div class="w-[300px] h-[200px] bg-zinc-300">
                    </div>

                    <p class="text-blue-500 text-lg">Produit</p>

                    <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    <div class="flex justify-center space-x-6">
                        <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                        <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                    </div>
                </div>

                <div class="w-[300px] space-y-5">
                    <div class="w-[300px] h-[200px] bg-zinc-300">
                    </div>

                    <p class="text-blue-500 text-lg">Produit</p>

                    <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    <div class="flex justify-center space-x-6">
                        <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                        <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- MEILLEURS PRODUITS --}}
        <div class="mx-[250px] space-y-3">
            <div>
                <h2 class="bg-blue-500 text-white p-2 rounded-t">MEILLEURS PRODUITS</h2>
            </div>

            <div class="flex justify-between">

                <div class="w-[300px] space-y-5">
                    <div class="w-[300px] h-[200px] bg-zinc-300">
                    </div>

                    <p class="text-blue-500 text-lg">Produit</p>

                    <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    <div class="flex justify-center space-x-6">
                        <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                        <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                    </div>
                </div>

                <div class="w-[300px] space-y-5">
                    <div class="w-[300px] h-[200px] bg-zinc-300">
                    </div>

                    <p class="text-blue-500 text-lg">Produit</p>

                    <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    <div class="flex justify-center space-x-6">
                        <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                        <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                    </div>
                </div>


                <div class="w-[300px] space-y-5">
                    <div class="w-[300px] h-[200px] bg-zinc-300">
                    </div>

                    <p class="text-blue-500 text-lg">Produit</p>

                    <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    <div class="flex justify-center space-x-6">
                        <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                        <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                    </div>
                </div>

                <div class="w-[300px] space-y-5">
                    <div class="w-[300px] h-[200px] bg-zinc-300">
                    </div>

                    <p class="text-blue-500 text-lg">Produit</p>

                    <p class="text-center px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    <div class="flex justify-center space-x-6">
                        <button type="button" class="bg-green-500 py-2 px-5 rounded">99,00 €</button>
                        <button type="button" class="bg-red-500 py-2 px-5 rounded">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection