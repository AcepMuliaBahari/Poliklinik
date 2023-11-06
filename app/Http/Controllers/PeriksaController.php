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
        session()->flash('success', 'Periksa Berhasil di Tersimpan');
           
            return redirect()->route('data.periksa');
     

    }    
    public function EditPeriksa($id){
    $periksa = Periksa::findOrFail($id);
    $data_pasien = Pasien::all(); // Ambil semua data Pasien
    $nama_pasien = $periksa->pasien->nama_pasien;
    
    $data_dokter = Dokter::all(); // Ambil semua data dokter
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
    
        session()->flash('success', 'Data Periksa berhasil diupdate');
    
        return redirect()->route('data.periksa');
    }
    
     ///start delete periksa
     public function HapusPeriksa($id){
        Periksa::findOrfail($id)->delete();
        session()->flash('success', 'Data Periksa berhasil di hapus');
        return redirect()->back();
    }
    ////end
}
