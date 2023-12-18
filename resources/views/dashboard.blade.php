<x-app-layout>
 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-3 text-gray-900 dark:text-gray-100">
                    @include('components.sapaan')  {{-- {{ $greeting }}, --}}
                    </h2>

                    {{ __("Selamat Datang Di Sistem Informasi ") }}
                    
                </div>
                
            </div>
            
        </div>

        
    </div>
    @include('page.home')
    
</x-app-layout>
