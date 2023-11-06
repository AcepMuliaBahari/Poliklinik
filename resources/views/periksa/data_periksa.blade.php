<x-app-layout>
<<<<<<< HEAD
    @include('components.sesion')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Periksa') }}
        </h2>
    </x-slot>
    
    
    <div class="py-5">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
    <nav class="page-breadcrumb mt-3">
      {{-- <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
        <a href="{{ route('tambah.periksa') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"> <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
          Tambah Periksa
      </span></a> --}}
      <div class="flex justify-center m-5">
        <button id="defaultModalButton" data-modal-toggle="defaultModal" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"> <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0" type="button">
      Tambah Periksa
        </button>
    </div>
    
    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Tambah Periksa
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="{{ route('simpan.periksa') }}">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter</label>
                            <select name="id_dokter" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              @foreach ($dokter as $item)
                              <option value="{{ $item->id }}">{{ $item->nama_dokter }}</option>
                              @endforeach
                                
                            </select>
                        </div>
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien</label>
                            <select name="id_pasien" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              @foreach ($pasien as $item) 
                              <option value="{{ $item->id }}">{{ $item->nama_pasien }}</option>
                              @endforeach
                           
                            </select>
                        </div>
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Periksa</label>
                            <input type="date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                            name="tanggal_periksa" id="inputTanggalPeriksa" placeholder="Tanggal Periksa">
                        </div>
                        <div>
                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                            <input type="text" name="catatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Catatan" required="">
                        </div>
                        <div>
                            <label for="obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obat</label>
                            <input type="text" name="obat"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Obat" required="">
                        </div>
                        
                        
                    </div>
                    <button type="submit" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    </nav>
    
    <section class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 py-3 sm:py-5">
      
      <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
    <div class="relative overflow-x-auto">
    
          
      <table id="myTable" class="display w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption>List Periksa</caption>
                
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    
                  <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <th scope="col" class="px-6 py-3 flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white ">No</th>
                    <th scope="col" class="px-6 py-3">Pasien</th>
                    <th scope="col" class="px-6 py-3">Dokter</th>
                    <th scope="col" class="px-6 py-3">Tanggal periksa</th>
                    <th scope="col" class="px-6 py-3">Catatan</th>
                    <th scope="col" class="px-6 py-3">Obat</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                  </tr>
                </thead>
                <tbody >
                    @foreach ($periksa as $key=>$item)
                        
                    
                    <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <th scope="col" class="px-6 py-4 ">{{ $key + 1 }}</th>
                    <td class="px-6 py-4 ">{{ $item->pasien->nama_pasien }}</td>
                    <td class="px-6 py-4 ">{{ $item->dokter->nama_dokter }}</td>
                    <td class="px-6 py-4 ">{{ $item->tanggal_periksa }}</td>
                    <td class="px-6 py-4 ">{{ $item->catatan }}</td>
                    <td class="px-6 py-4 ">{{ $item->obat }}</td>
                    
                    
                    <td class="px-6 py-4 "> 
                        <a href="{{ route('edit.periksa', ['id' => $item->id]) }}" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ubah</a> 
                        &nbsp; &nbsp;
                        <a href="{{ route('hapus.periksa', ['id' => $item->id]) }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 delete-link">Hapus</a>
                        </td>
                  </tr>
                  @endforeach
                  
                  
                </tbody>
              </table>
    
      </div> 
      </div>
    </section>
    </div>
    </div>
    @include('script.script')
=======
@if(session('error'))
<div id="flash-message" class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
@if(session('success'))
<div id="flash-message" class="alert alert-success">
{{ session('success') }}
</div>
@endif

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Data Periksa') }}
    </h2>
</x-slot>


<div class="py-5">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<nav class="page-breadcrumb mt-3">
  <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
    <a href="{{ route('tambah.periksa') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"> <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
      Tambah Periksa
  </span></a>
</nav>


<div class="relative overflow-x-auto">

      
  <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <caption>List Periksa</caption>
            
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                
              <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Pasien</th>
                <th scope="col" class="px-6 py-3">Dokter</th>
                <th scope="col" class="px-6 py-3">Tanggal periksa</th>
                <th scope="col" class="px-6 py-3">Obat</th>
                <th scope="col" class="px-6 py-3">Catatan</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
              </tr>
            </thead>
            <tbody >
                @foreach ($periksa as $key=>$item)
                    
                
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="col" class="px-6 py-4">{{ $key + 1 }}</th>
                <td class="px-6 py-4">{{ $item->pasien->nama_pasien }}</td>
                <td class="px-6 py-4">{{ $item->dokter->nama_dokter }}</td>
                <td class="px-6 py-4">{{ $item->tanggal_periksa }}</td>
                <td class="px-6 py-4">{{ $item->obat }}</td>
                <td class="px-6 py-4">{{ $item->catatan }}</td>
                
                
                <td class="px-6 py-4"> 
                    <a href="{{ route('edit.periksa', ['id' => $item->id]) }}" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ubah</a> 
                    <a href="{{ route('hapus.periksa', ['id' => $item->id]) }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 delete-link">Hapus</a>
                    </td>
              </tr>
              @endforeach
              
              
            </tbody>
          </table>

  </div> 
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
const deleteLinks = document.querySelectorAll(".delete-link");

deleteLinks.forEach((link) => {
link.addEventListener("click", function (e) {
  e.preventDefault();
  const deleteUrl = this.href;

  Swal.fire({
    title: "Apakah Anda yakin?",
    text: "Hapus Data?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, Hapus!",
  }).then((result) => {
    if (result.isConfirmed) {
      // Redirect ke URL penghapusan jika pengguna menekan "Ya, Hapus!"
      window.location.href = deleteUrl;
    }
  });
});
});
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
// Menghilangkan pesan flash setelah 5 detik (5000 milidetik)
setTimeout(function () {
    $('#flash-message').fadeOut('slow');
}, 1200);
});

</script>
<script>


</script>
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
</x-app-layout>
