<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Periksa;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    public function DataPeriksa() {
        $periksa = Periksa::all();
        $dokter = Dokter::latest()->get();
        $pasien = Pasien::latest()->get();
    

        
    return view('periksa.data_periksa',compact('periksa','dokter','pasien'));
    }
    public function TambahPeriksa(){
        $periksa = Periksa::all();
        $dokter = Dokter::latest()->get();
        $pasien = Pasien::latest()->get();
        return view('periksa.tambah_periksa',compact('periksa','dokter','pasien'));
    } 
   


    
    public function SimpanPeriksa(Request $request){
        
        $request->validate([
            'id_pasien'=>'required',
            'id_dokter'=>'required',
            'tanggal_periksa'=>'required',
            'catatan'=>'required',
            
        ]);
       
        Periksa::create([
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'tanggal_periksa' => $request->tanggal_periksa,
            'obat' => $request->obat,
            'catatan' => $request->catatan,
        ]);
<<<<<<< HEAD
        session()->flash('success', 'Periksa Berhasil di Tersimpan');
=======
        session()->flash('success', 'Dokter Berhasil di Tersimpan');
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
           
            return redirect()->route('data.periksa');
     

    }    
    public function EditPeriksa($id){
<<<<<<< HEAD
    $periksa = Periksa::findOrFail($id);
    $data_pasien = Pasien::all(); // Ambil semua data Pasien
    $nama_pasien = $periksa->pasien->nama_pasien;
    
    $data_dokter = Dokter::all(); // Ambil semua data dokter
=======
        $periksa = Periksa::findOrFail($id);
    $data_pasien = Pasien::all(); // Retrieve all patients
    $nama_pasien = $periksa->pasien->nama_pasien;
    
    // Retrieve data for dokter
    $data_dokter = Dokter::all();
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    $nama_dokter = $periksa->dokter->nama_dokter;
    
    return view('periksa.edit_periksa', compact('periksa', 'nama_pasien', 'nama_dokter', 'data_pasien', 'data_dokter'));
    }

    public function UpdatePeriksa(Request $request ){
        $request->validate([
            
            'tanggal_periksa' => 'required',
            'catatan' => 'required',
            'obat' => 'required',
            'id_pasien' => 'required',
            'id_dokter' => 'required',
        ]);
    
        $updateid = $request->id;
        $periksa = Periksa::find($updateid);
        if (!$periksa) {
            // Handle jika data tidak ditemukan
            
            return redirect()->route('data.periksa')->with('error', 'Data periksa gagal update');
        }
    
        $periksa->tanggal_periksa = $request->input('tanggal_periksa');
        $periksa->catatan = $request->input('catatan');
        $periksa->id_pasien = $request->input('id_pasien');
        $periksa->id_dokter = $request->input('id_dokter');
        $periksa->save();
    
<<<<<<< HEAD
        session()->flash('success', 'Data Periksa berhasil diupdate');
=======
        session()->flash('success', 'Data periksa berhasil diupdate');
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    
        return redirect()->route('data.periksa');
    }
    
<<<<<<< HEAD
     ///start delete periksa
     public function HapusPeriksa($id){
        Periksa::findOrfail($id)->delete();
        session()->flash('success', 'Data Periksa berhasil di hapus');
        return redirect()->back();
=======
     ///start delete
     public function HapusPeriksa($id){
        Periksa::findOrfail($id)->delete();
        session()->flash('success', 'Dokter berhasil di hapus');
        return redirect()->back();


>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    }
    ////end
}
