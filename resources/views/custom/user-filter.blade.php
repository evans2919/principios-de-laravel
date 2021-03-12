<x-app-layout>
    @livewireStyles
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tabla de usuarios
        </h2>
    </x-slot>

    <div class="mt-4">
        <div class="py-12">
        <div class="max-w-7xl mx-auto md:px-6 ">
            <div class="bg-white overflow-hidden shadow-xl ">
                
                    @livewire('filter') 
            </div>
        </div>
    </div>
         
    </div>
    @livewireScripts      
</x-app-layout>