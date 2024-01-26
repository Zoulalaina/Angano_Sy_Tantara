

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

                @if(session('success'))
      <div class="alert alert-success" style="color:red;">
        {{ session('success') }}

      </div>
      @endif
                @foreach($anganos as $angano)
                <h1>{{ $angano->titre }}</h1>
                   <p>{{ $angano->email }}</p>
                   <textarea name="letrre" id="" cols="150" rows="10" style="color:black;">{{ $angano->lettre }}</textarea>
               <form action="{{ route('angano.destroy',$angano->id) }}" method = "post">
               @csrf
               @method('delete')
               <button type="submit" style="color:red;">Supprimer</button>
             </form>
            
                   @endforeach
      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
