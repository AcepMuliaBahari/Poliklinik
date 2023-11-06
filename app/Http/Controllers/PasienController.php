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
     
<<<<<<< HEAD
        Pasien::findOrfail($upid)->update([
=======
        pasien::findOrfail($upid)->update([
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03

            'nama_pasien'=>$request->nama_pasien,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
            
        ]);
        session()->flash('success', 'Data Pasien Telah Terupdate');
        return redirect()->route('data.pasien');
    }///end

    //start delete
    public function HapusPasien($id){
<<<<<<< HEAD
        Pasien::findOrfail($id)->delete();


        session()->flash('success', ' Pasien Berhasil Dihapus');
        return redirect()->back();
}
=======
        pasien::findOrfail($id)->delete();


        session()->flash('success', 'Data Terhapus');
        return redirect()->back();


    }//end
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
}
