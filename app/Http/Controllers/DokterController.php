<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function DataDokter(){
        $dokters = Dokter::latest()->get();
        return view('dokter.data_dokter',compact('dokters'));
    }
    ////tambah
    public function TambahDokter(){
        return view('dokter.tambah_dokter');
    } 
    //////simpan s
    public function SimpanDokter(Request $request){
        
        $request->validate([
            'nama_dokter'=>'required|unique:dokters|max:300',
            'alamat'=>'required',
            'no_hp'=>'required',
           
        ]);

        
        Dokter::insert([

            'nama_dokter'=>$request->nama_dokter,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
        ]);
        session()->flash('success', 'Dokter berhasil ditambahkan');
        

       
<<<<<<< HEAD
        return redirect()->route('data.dokter');
    }    
    //start Edit dokter
=======
        return redirect()->route('data.dokter',);
    }    
    //start Edit
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    public function EditDokter($id){

        $dokter = Dokter::find($id);
        return view('dokter.edit_dokter',compact('dokter'));
    }//end
    ///start Update
    public function UpdateDokter(Request $request){

        $updateid = $request->id;
     
        Dokter::findOrfail($updateid)->update([

            'nama'=>$request->nama_dokter,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
            
        ]);
        session()->flash('success', 'Dokter berhasil di update');
        return redirect()->route('data.dokter');
    }///end
 

    ///start delete
<<<<<<< HEAD
    public function HapusDokter($id){ 
=======
    public function HapusDokter($id){
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
        Dokter::findOrfail($id)->delete();
        session()->flash('success', 'Dokter berhasil di hapus');
        return redirect()->back();


    }
    ////end
}
