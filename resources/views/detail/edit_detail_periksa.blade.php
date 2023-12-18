<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Periksa') }}
        </h2>
    </x-slot>
 
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="w-full  p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    
                    
    
                <form method="POST" action="{{ route('update.detail.periksa', $detailPeriksa->id) }}">
                    @csrf
                    @method('PUT') <!-- Tambahkan method PUT untuk update -->
                
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Periksa</label>
                            <select name="id_periksa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                @foreach($periksas as $periksa)
                                    <option value="{{ $periksa->id }}" @if($detailPeriksa->id_periksa == $periksa->id) selected @endif>
                                        {{ $periksa->dokter->nama_dokter }},
                                        {{ $periksa->pasien->nama_pasien }},
                                        {{ $periksa->tanggal_periksa }},
                                        {{ $periksa->catatan }},
                                        Rp.{{ number_format($periksa->biaya_periksa, 0, ',', '.') }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obat</label>
                            <select name="id_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                @foreach($obats as $obat)
                                    <option value="{{ $obat->id }}" @if($detailPeriksa->id_obat == $obat->id) selected @endif>
                                        {{ $obat->nama_obat }},
                                        {{ $obat->kemasan }},
                                        Rp.{{ number_format($obat->harga, 0, ',', '.') }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total</label>
                            <input type="text" value="{{ number_format($detailPeriksa->periksa->biaya_periksa + $detailPeriksa->obat->harga, 0, ',', '.') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>
                        </div>
                    </div>
                
                    <button type="submit" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Update
                    </button>
                    <a href="{{ route('detail.periksa') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"> <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Kembali
                    </span></a>
                </form>
                
                            
                              
    
          </div>
          
        </div>
        
                </div>
                   
             
                
    </x-app-layout>
    
