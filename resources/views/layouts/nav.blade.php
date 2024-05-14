<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fav Pet</title>
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased font-concert_one">
    <nav class="bg-teal-950 h-20 shadow-lg flex items-center justify-between">
        <div class="flex items-center gap-2 px-10">
            <svg fill="#f97316" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                viewBox="0 0 228.804 228.804" xml:space="preserve">
            <g>
                <path d="M184.475,161.189c-2.368-3.731-19.724-30.767-34.558-45.068c-12.376-11.883-30.9-12.227-33-12.227
                    c-0.191,0.001-0.383,0.008-0.571,0.023h-4.491c-1.984,0-19.761,0.338-32.763,12.042C63.05,130.416,45.3,159.575,44.058,161.63
                    c-9.403,14.867-15.166,24.536-15.166,35.286c0,19.371,14.193,31.888,36.158,31.888h98.711c21.959,0,36.148-12.529,36.148-31.92
                    c0-10.845-5.777-20.5-15.205-35.353C184.63,161.415,184.554,161.3,184.475,161.189z M163.761,213.804H65.05
                    c-7.902,0-21.158-2.194-21.158-16.888c0-6.279,4.126-13.489,12.885-27.334c0.029-0.046,0.058-0.093,0.087-0.14
                    c0.175-0.29,17.631-29.146,32.267-42.336c8.925-8.034,22.597-8.187,22.73-8.188h5.08c0.143,0,0.284-0.004,0.426-0.012
                    c2.441,0.092,14.739,0.907,22.152,8.024c14.283,13.772,32.324,42.347,32.505,42.634c0.081,0.129,0.165,0.254,0.253,0.376
                    c9.316,14.698,12.633,21.018,12.633,26.942C184.909,210.868,173.408,213.804,163.761,213.804z"/>
                <path d="M78.198,85.731c16.929,0,30.189-18.831,30.189-42.87C108.388,18.827,95.127,0,78.198,0
                    C61.271,0,48.011,18.827,48.011,42.861C48.011,66.901,61.271,85.731,78.198,85.731z M78.198,15
                    c7.184,0,15.189,11.442,15.189,27.861c0,16.424-8.006,27.87-15.189,27.87s-15.188-11.446-15.188-27.87
                    C63.011,26.442,71.015,15,78.198,15z"/>
                <path d="M38.664,137.296c2.951,0,5.77-0.607,8.413-1.82c13.162-6.12,16.827-25.327,8.34-43.731
                    C48.832,77.493,36.65,67.918,25.101,67.918c-2.954,0-5.777,0.609-8.401,1.817C3.52,75.834-0.157,95.045,8.332,113.481
                    c6.585,14.244,18.774,23.814,30.33,23.815H38.664z M21.952,107.197c-5.076-11.024-3.635-21.683,1.033-23.842
                    c0.639-0.294,1.33-0.437,2.115-0.437c4.71,0,12.162,5.298,16.697,15.113c5.076,11.008,3.635,21.668-1.011,23.828
                    c-0.642,0.294-1.336,0.438-2.123,0.438C33.947,122.296,26.486,117,21.952,107.197z"/>
                <path d="M150.591,85.731c16.923,0,30.18-18.831,30.18-42.87C180.771,18.827,167.514,0,150.591,0
                    c-16.939,0-30.207,18.827-30.207,42.861C120.384,66.901,133.652,85.731,150.591,85.731z M150.591,15
                    c7.18,0,15.18,11.442,15.18,27.861c0,16.424-8,27.87-15.18,27.87c-7.192,0-15.207-11.446-15.207-27.87
                    C135.384,26.442,143.399,15,150.591,15z"/>
                <path d="M212.104,69.737c-2.617-1.212-5.447-1.827-8.411-1.827c-11.532,0-23.71,9.578-30.299,23.827
                    c-8.525,18.396-4.863,37.61,8.368,43.756c2.609,1.197,5.429,1.804,8.38,1.804c11.559,0,23.745-9.572,30.324-23.822
                    C228.962,95.052,225.287,75.839,212.104,69.737z M206.846,107.19c-4.53,9.812-11.987,15.106-16.704,15.106
                    c-0.788,0-1.482-0.143-2.093-0.423c-4.696-2.181-6.141-12.835-1.043-23.835c4.544-9.827,11.988-15.129,16.687-15.129
                    c0.781,0,1.47,0.143,2.107,0.438C210.484,85.517,211.926,96.175,206.846,107.19z"/>
            </g>
            </svg>
            <p class="text-white text-3xl ">Fav<span class="text-orange-500">Pet</span></p>
        </div>
        <div class="hidden md:flex items-center justify-center">
            <a href="#" class="text-white text-md px-3 hover:underline hover:text-orange-500">Home</a>
            <div class="relative">
                <button id="pets_toggle" type="button" class="px-3 flex items-center text-white text-md hover:underline hover:text-orange-500 focus:outline-none">
                    Pets
                    <svg class="w-4 ml-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
        
                <div id="pets_menu" class="absolute z-10 hidden bg-gray-100 shadow-md rounded-sm px-3 py-1">
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Dogs</a>
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Cats</a>
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Fish</a>
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Birds</a>
                </div>
            </div>
            <div class="relative">
                <button id="products_toggle" type="button" class="px-3 flex items-center text-white text-md hover:underline hover:text-orange-500 focus:outline-none">
                    Products
                    <svg class="w-4 ml-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
        
                <div id="products_menu" class="absolute z-10 hidden bg-gray-100 shadow-md  rounded-sm px-3 py-1">
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Food</a>
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Toys</a>
                </div>
            </div>
            <div class="relative">
                <button id="services_toggle" type="button" class="px-3 flex items-center text-white text-md hover:underline hover:text-orange-500 focus:outline-none">
                    Services
                    <svg class="w-4 ml-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
        
                <div id="services_menu" class="absolute z-10 hidden bg-gray-100 shadow-md rounded-sm px-3 py-1">
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">DayCare</a>
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Dog walking</a>
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Grooming</a>
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Boarding</a>
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Training</a>
                    <a class="block py-1 px-3 text-sm text-gray-800 hover:underline hover:text-orange-500" href="#">Veterinary Care</a>
                </div>
            </div>
            <a href="#" class="text-white text-md px-3 hover:underline hover:text-orange-500">About</a>
            <a href="#" class="text-white text-md px-3 hover:underline hover:text-orange-500">Contact</a>
        </div>
        
        
        </div>
        
        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="hidden md:flex items-center px-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-md text-white border-2 border-orange-500 px-4 py-1 hover:text-orange-500 rounded-lg">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-md border-2 border-orange-500 px-4 py-1 text-white hover:text-orange-500 rounded-lg">Login</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-1 border-2 border-orange-500 px-4 py-1 text-md text-white hover:text-orange-500 rounded-lg">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <button id="mobile-menu-toggle" class="md:hidden text-white text-md px-3 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="30" height="30">
                    <path fill="currentColor" d="M2 6h20v2H2zm0 5h20v2H2zm0 5h20v2H2z"/>
                </svg>
            </button>
        </div>
    </nav>
    <div id="mobile-menu" class="md:hidden hidden text-center bg-teal-950 text-white py-2 px-4">
        <a href="#" class="block text-lg py-1 hover:underline hover:text-orange-500">Home</a>
        <div class=" flex flex-col items-center justify-center">
            <div x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" class="block text-lg py-1 hover:underline hover:text-orange-500 focus:outline-none">Pets</button>
                <div x-show="isOpen" @click.away="isOpen = false" class="text-center">
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Dogs</a>
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Cats</a>
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Fish</a>
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Birds</a>
                </div>
            </div>
            <div x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" class="block text-lg py-1 hover:underline hover:text-orange-500 focus:outline-none">Products</button>
                <div x-show="isOpen" @click.away="isOpen = false" class="text-center">
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Food</a>
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Toys</a>
                </div>
            </div>
            <div x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" class="block text-lg py-1 hover:underline hover:text-orange-500 focus:outline-none">Services</button>
                <div x-show="isOpen" @click.away="isOpen = false" class="text-center">
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">DayCare</a>
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Dog walking</a>
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Grooming</a>
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Boarding</a>
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Training</a>
                    <a href="#" class="block text-sm py-1 hover:underline hover:text-orange-500">Veterinary Care</a>
                </div>
            </div>  
        </div>
        <a href="#" class="block text-lg py-1 hover:underline hover:text-orange-500">About</a>
        <a href="#" class="block text-lg py-1 hover:underline hover:text-orange-500">Contact</a>
        @if (Route::has('login'))
        <div class="flex flex-col text-lg">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-lg py-1 text-white hover:text-orange-500 hover:underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-lg py-1 text-white hover:text-orange-500 hover:underline">Login</a>
    
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class=" py-1 text-lg text-white hover:text-orange-500 hover:underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
    
    @yield('content')


    <script>
        // Dropdown Toggle Script
        // for pets 
        const pets_toggle = document.getElementById('pets_toggle');
        const pets_menu = document.getElementById('pets_menu');
    
        pets_toggle.addEventListener('click', () => {
            pets_menu.classList.toggle('hidden');
        });
        // for products
        const products_toggle = document.getElementById('products_toggle');
        const products_menu = document.getElementById('products_menu');
    
        products_toggle.addEventListener('click', () => {
            products_menu.classList.toggle('hidden');
        });
        // for services
        const services_toggle = document.getElementById('services_toggle');
        const services_menu = document.getElementById('services_menu');
    
        services_toggle.addEventListener('click', () => {
            services_menu.classList.toggle('hidden');
        });
    
        // Mobile Menu Toggle Script
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/alpine.min.js" defer></script>
</body>
</html>