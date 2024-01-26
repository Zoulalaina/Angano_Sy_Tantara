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
                   <p>Ajouer des "Angano" ou histoire</p>
                    <form action="/ajouter" method= "post" >
                        @csrf 
                        <div class="mt-4">
                        <label for="mane">Nom</label>
        <input type="text" name ="name" id="name" placeholder="Nom" class="block mt-1 w-full" style = "color: black;">
                        </div>
        
        <label for="mane">Email</label>
        <input type="email" name ="email" id="email" placeholder="Email" class="block mt-1 w-full" style = "color: black;">
        <label for="mane">Titre</label>
        <input type="text" name ="titre" id="titre" placeholder="titre" class="block mt-1 w-full" style = "color: black;">
        <label for="mane">Texte</label>
        <textarea name="lettre" id="lettre" placeholder="Description" class="block mt-1 w-full" rows="10" style = "color: black;"></textarea>

        <button type ="submit" class="block mt-1 w-full" style="color:red;">Ajouter</button>
      </form>
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}

      </div>
      @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
