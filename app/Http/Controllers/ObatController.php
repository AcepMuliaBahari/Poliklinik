<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function DataObat(){
        $obats = Obat::latest()->get();
        return view('obat.data_obat',compact('obats'));
    }
    ////tambah
    // public function TambahObat(){
    //     return view('obat.tambah_obat');
    // } 
    //////simpan s
    public function SimpanObat(Request $request){
        
        $request->validate([
            'nama_obat'=>'required|max:300',
            'kemasan'=>'required',
            'harga'=>'required',
           
        ]);

        
        Obat::insert([

            'nama_obat'=>$request->nama_obat,
            'kemasan'=>$request->kemasan,
            'harga'=>$request->harga,
        ]);
        session()->flash('success', 'Obat berhasil ditambahkan');
        return redirect()->route('data.obat');
    }    
    //start Edit Obat
    public function EditObat($id){

        $obat = Obat::find($id);
        return view('obat.edit_obat',compact('obat'));
    }//end
    ///start Update
    public function UpdateObat(Request $request){

        $updateobat = $request->id;
     
        Obat::findOrfail($updateobat)->update([

            'nama_obat'=> $request->nama_obat,
            'kemasan'=> $request->kemasan,
            'harga'=> $request->harga,
            
        ]);
        session()->flash('success', 'Obat berhasil di update');
        return redirect()->route('data.obat');
    }///end
 

    ///start delete
    public function HapusObat($id){ 
        Obat::findOrfail($id)->delete();
        session()->flash('success', 'Obat berhasil di hapus');
        return redirect()->back();


    }
    ////end
}
