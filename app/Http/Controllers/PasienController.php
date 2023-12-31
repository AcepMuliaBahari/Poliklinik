<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function DataPasien(){
        $pasiens = Pasien::latest()->get();
        return view('pasien.data_pasien',compact('pasiens'));
    }
    ////tambah
    public function TambahPasien(){
        return view('pasien.tambah_pasien');
    } 
    //////simpan s
    public function SimpanPasien(Request $request){
        
        $request->validate([
            'nama_pasien'=>'required|unique:pasiens|max:300',
            'alamat'=>'required',
            'no_hp'=>'required',
           
        ]);
        Pasien::insert([

            'nama_pasien'=>$request->nama_pasien,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
        ]);

        session()->flash('success', 'Data Pasien Telah Tersimpan');
        return redirect()->route('data.pasien');
    }    
    //start Edit
    public function EditPasien($id){

        $pasiens = Pasien::findOrfail($id);
        return view('pasien.edit_pasien',compact('pasiens'));
    }//end
    ///start Update
    public function UpdatePasien(Request $request){

        $upid = $request->id;
     
        Pasien::findOrfail($upid)->update([

            'nama_pasien'=>$request->nama_pasien,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
            
        ]);
        session()->flash('success', 'Data Pasien Telah Terupdate');
        return redirect()->route('data.pasien');
    }///end

    //start delete
    public function HapusPasien($id){
        Pasien::findOrfail($id)->delete();


        session()->flash('success', ' Pasien Berhasil Dihapus');
        return redirect()->back();
}
}
