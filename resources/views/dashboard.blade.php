
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Angano angano arirarira') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            

                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1>Bienvenue sur "Angana sy Tantara"</h1> 
                <p>Lire et ajouter des Angano et Tantara Malagasy </p>
                <img src="{{ asset('image/img.jfif') }}" alt="Logo de mon site">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
