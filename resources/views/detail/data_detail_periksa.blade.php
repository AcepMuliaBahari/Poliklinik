<x-app-layout>
    @include('components.sesion')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Periksa') }}
        </h2>
    </x-slot>
    
    
    <div class="py-5">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
    {{-- <nav class="page-breadcrumb mt-3">
      <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400"> --}}
        
      <div class="flex justify-center m-5">
        <button id="defaultModalButton" data-modal-toggle="defaultModal" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"> <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0" type="button">
      Tambah Detail
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
                        Tambah Detail
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="{{ route('simpan.detail.periksa') }}">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Periksa</label>
                            <select name="id_periksa"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              @foreach($periksas as $periksa)
                              <option value="{{ $periksa->id }}"> 
                                {{ $periksa->id }} 
                                {{-- {{ $periksa->dokter->nama_dokter }},
                                {{ $periksa->pasien->nama_pasien }},
                                {{ $periksa->tanggal_periksa }},
                                {{ $periksa->catatan }},
                                Rp.{{number_format($periksa->biaya_periksa, 0, ',', '.') }} --}}
                              </option>
                              @endforeach
                                
                            </select>
                        </div>
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obat</label>
                            <select name="id_obat"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              @foreach($obats as $obat)
                              <option value="{{ $obat->id }}" >
                                {{ $obat->id }} 
                                {{-- {{ $obat->nama_obat }},
                                {{ $obat->kemasan }},
                                Rp.{{number_format($obat->harga, 0, ',', '.') }} --}}
                              </option>
                              @endforeach                          
                            </select>
                        </div>
                        {{-- <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total</label>
                            <input type="text" name="total_biaya" id="total_biaya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>
                        </div> --}}
    
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
        <caption>List detail Periksa</caption>
  
                        
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    
                  <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <th scope="col" class="px-6 py-3 flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white ">No</th>
                    <th scope="col" class="px-6 py-3">Id Periksa</th>
                    

                    {{-- <th scope="col" class="px-6 py-3">Dokter</th>
                    <th scope="col" class="px-6 py-3">Pasien</th>
                    <th scope="col" class="px-6 py-3">Tanggal periksa</th>
                    <th scope="col" class="px-6 py-3">Catatan</th>
                    <th scope="col" class="px-6 py-3">Biaya Periksa</th> --}}

                    <th scope="col" class="px-6 py-3">Id Obat</th>

                    {{-- <th scope="col" class="px-6 py-3">Nama Obat</th>
                    <th scope="col" class="px-6 py-3">Kemasan</th>
                    <th scope="col" class="px-6 py-3">Harga Obat</th> --}}
                    <th scope="col" class="px-6 py-3">Total Biaya Periksa</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>

                    {{-- <th scope="col" class="px-6 py-3">Total Biaya  </th> --}}
                  
                  </tr>
                </thead>
                <tbody >
                  {{-- @foreach ($detailPeriksa->zip($periksas, $obats) as [$detail, $periksa, $obat]) --}}
                  @foreach($detailPeriksa as $detail)
                  <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                      <th scope="col" class="px-6 py-4">{{ $loop->iteration  }}</th>

                      <td class="px-6 py-4">{{ $detail->periksa->id }}</td>
                      
                      {{-- <td class="px-6 py-4">{{ $detail->periksa->dokter->nama_dokter }}</td>
                      <td class="px-6 py-4">{{ $detail->periksa->pasien->nama_pasien }}</td>
                      <td class="px-6 py-4">{{ $detail->periksa->tanggal_periksa }}</td>
                      <td class="px-6 py-4">{{ $detail->periksa->catatan }}</td>
                      <td class="px-6 py-4">Rp.{{number_format($detail->periksa->biaya_periksa, 0, ',', '.') }}</td> --}}
                      
                      <td class="px-6 py-4">{{ $detail->obat->id }}</td>

                      {{-- <td class="px-6 py-4">{{ $detail->obat->nama_obat }}</td>
                      <td class="px-6 py-4">{{ $detail->obat->kemasan }}</td>
                      <td class="px-6 py-4">Rp.{{number_format($detail->obat->harga, 0, ',', '.') }}</td> --}}
                      <td class="px-6 py-4">(Rp.{{number_format($detail->periksa->biaya_periksa + $detail->obat->harga, 0, ',', '.') }})</td> 


                      
                      {{-- <td class="px-6 py-4">({{ number_to_words($detail->periksa->biaya_periksa + $detail->obat->harga) }} ribu rupiah)</td> --}}
                      <td class="px-6 py-4 "> 
                        <a href="{{ route('edit.detail.periksa', ['id' => $detail->id]) }}" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ubah</a> 
                        &nbsp; &nbsp;
                        <a href="{{ route('hapus.detail.periksa', ['id' => $detail->id]) }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 delete-link">Hapus</a>
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
    <script>
        $(document).ready(function() {
            $('select[name="id_periksa"], select[name="id_obat"]').change(function() {
                var biayaPeriksa = parseFloat($('select[name="id_periksa"] option:selected').data('biaya_periksa')) || 0;
                var hargaObat = parseFloat($('select[name="id_obat"] option:selected').data('harga')) || 0;
                var total_biaya = biayaPeriksa + hargaObat;
    
                // Format angka dalam format tujuhratus ribu tanpa desimal jika nol di belakangnya
                var formattedTotal = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 2
                }).format(total_biaya);
    
                $('#total_biaya').val(formattedTotal.replace(/\.00$/, ''));
            });
        });
    </script>
</x-app-layout>
