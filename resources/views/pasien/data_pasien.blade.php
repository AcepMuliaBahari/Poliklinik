<x-app-layout>
  
@if(session('success'))
<div id="flash-message" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Data Pasien') }}
  </h2>
</x-slot>

<div class="py-5">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <nav class="page-breadcrumb mt-3">
      
        
            <a href="{{ route('tambah.pasien') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"> <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
              Tambah Pasien
          </span></a>
        
      </nav>
  
      <div class="relative overflow-x-auto">

            

            
            <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption>List Pasien</caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                    <th scope="col" class="px-6 py-3">No Hp</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pasiens as $key=>$item)
                        
                    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4">{{ $key+1 }}</th>
                    <td class="px-6 py-4">{{ $item->nama_pasien }}</td>
                    <td class="px-6 py-4">{{ $item->alamat }}</td>
                    <td class="px-6 py-4">{{ $item->no_hp }}</td>
                    
                    
                    <td class="px-6 py-4"> 
                        <a href="{{ route('edit.pasien',$item->id) }}" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ubah</a> 
                        <a href="{{ route('hapus.pasien',$item->id) }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 delete-link" >Hapus</a>
                        </td>
                  </tr>
                  @endforeach
                  
                  
                </tbody>
              </table>

      </div>
      
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
</x-app-layout>