<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Periksa') }}
        </h2>
    </x-slot>

<<<<<<< HEAD

=======
@if(session('success'))
<div id="flash-message" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03

    

        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               

        <div class="w-full  p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
      <form method="POST" action="{{ route('simpan.periksa') }}" class="forms-sample">
        @csrf
        <div class="mb-3">
            <label for="pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien</label>
            <select name="id_pasien" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
<<<<<<< HEAD
              @foreach ($pasien as $item) 
=======
              @foreach ($pasien as $item)
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
              <option value="{{ $item->id }}">{{ $item->nama_pasien }}</option>
              @endforeach
            </select>
        </div>
        
        <div class="mb-3">
          <label for="id_dokter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter</label>
          <select name="id_dokter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              @foreach ($dokter as $item)
                  <option value="{{ $item->id }}">{{ $item->nama_dokter }}</option>
              @endforeach
          </select>
      </div>
        <div class="col mb-2">
            <label for="inputTanggalPeriksa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">
            Tanggal Periksa
            </label>
            <input type="date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
            name="tanggal_periksa" id="inputTanggalPeriksa" placeholder="Tanggal Periksa">
        </div>
        <div class="mb-3">
            <label for="inputCatatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obat</label>
            <input type="text" name="obat" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  placeholder="Obat">
        </div>
        <div class="mb-3">
            <label for="inputCatatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
            <input type="text" name="catatan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  placeholder="Catatan">
        
            
        </div>
        <x-primary-button type="submit" class="btn btn-primary me-2">Simpan</x-primary-button>
              
      
        
                <a href="{{ route('data.periksa') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"> <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                  Kembali
              </span></a>
            
            
        
    </form>
    </div>
</div>
    </div>
</x-app-layout>
