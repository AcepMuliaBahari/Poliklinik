<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Obat') }}
        </h2>
    </x-slot>
    
    
    
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
            <nav class="page-breadcrumb mt-3">
          
            
                <a href="{{ route('data.obat') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"> <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                  Kembali
              </span></a>
            
            </nav>
    
            <div class="w-full  p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">               
    
                    <form id="myForm" method="POST" action="{{ route('update.obat') }}" class="forms-sample">
                        @csrf
                        <input type="hidden" name="id" value="{{ $obat->id }}" readonly>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Obat</label>
                            <input type="text" name="nama_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                             @error('nama_obat') is-invalid @enderror value="{{ $obat->nama_obat }}" >
                            @error('nama_obat')
                          <span class="text-danger">{{ $message }}</span>
                            
                            @enderror
    
                        </div>
                        <div class="mb-3">
                            <x-input-label for="exampleInputEmail1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kemasan</x-input-label>
                            <input type="text" name="kemasan" class="bg-gray-50 border border-gray-300 
                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block
                             w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                             dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" @error('kemasan') is-invalid @enderror value="{{ $obat->kemasan }}">
                            @error('kemasan')
                            <span class="text-danger">{{ $message }}</span>
                                
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                            <input type="number" name="harga" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 
                            text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
                            dark:focus:border-blue-500" @error('harga') is-invalid @enderror value="{{ $obat->harga }}">
                            @error('harga')
                            <span class="text-danger">{{ $message }}</span>
                                
                            @enderror
                        </div>
            
                        <x-primary-button type="submit" class="btn btn-primary me-2">Simpan Perubahan</x-primary-button>
                        
                    </form>
                            
                              
    
          </div>
          
        </div>
        
                </div>
    </x-app-layout>
