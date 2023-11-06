<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Periksa') }}
        </h2>
    </x-slot>
 
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="w-full  p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    
                    
    
                    <form id="myForm" method="POST" action="{{ route('update.periksa', ['id' => $periksa->id]) }}" class="forms-sample">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{ $periksa->id }}">
                        <div class="mb-3">
                            <label for="NamaPasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien</label>
                            <select name="id_pasien" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                @foreach ($data_pasien as $pasien)
                                    <option value="{{ $pasien->id }}" @if($pasien->id == $periksa->id_pasien) selected @endif>{{ $pasien->nama_pasien }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                          <label for="id_dokter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter</label>
                          <select name="id_dokter" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                              @foreach ($data_dokter as $dokter)
                              <option value="{{ $dokter->id }}" @if($dokter->id == $periksa->id_dokter) selected @endif>{{ $dokter->nama_dokter }}</option>
                              @endforeach
                          </select>
                      </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal periksa</label>
                            <input type="date" name="tanggal_periksa" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" @error('tanggal_periksa') is-invalid @enderror value="{{ $periksa->tanggal_periksa }}">
                            @error('tanggal_periksa')
                            <span class="text-danger">{{ $message }}</span>
                                
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obat</label>
                            <input type="text" name="obat" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" @error('obat') is-invalid @enderror value="{{ $periksa->obat }}">
                            @error('obat')
                            <span class="text-danger">{{ $message }}</span>
                                
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                            <input type="text" name="catatan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" @error('catatan') is-invalid @enderror value="{{ $periksa->catatan }}">
                            @error('catatan')
                            <span class="text-danger">{{ $message }}</span>
                                
                            @enderror
                        </div>
            
                        <x-primary-button type="submit" >Simpan Perubahan</x-primary-button>
                        
            
                            <a href="{{ route('data.periksa') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"> <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                              Kembali
                          </span></a>
                        
                        
                    </form>
                            
                              
    
          </div>
          
        </div>
        
                </div>
                   
             
                
    </x-app-layout>
    