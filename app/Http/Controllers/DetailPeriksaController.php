<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Periksa;
use App\Models\TransaksiDetailPeriksa;
use Illuminate\Http\Request;

class DetailPeriksaController extends Controller
{
    //start 
    public function DataDetailPeriksa() {
        $detailPeriksa =TransaksiDetailPeriksa::all();
        $periksas = Periksa::all();
        $obats = Obat::all();

    return view('detail.data_detail_periksa',compact('detailPeriksa','periksas','obats'));
    }///end

    public function SimpanDetailPeriksa(Request $request){      
        $request->validate([
            'id_periksa' => 'required|numeric', 
            'id_obat' => 'required|exists:obats,id',
        ]);      
        TransaksiDetailPeriksa::create([
            'id_periksa' => $request->id_periksa,
            'id_obat' => $request->id_obat,        
        ]);
        session()->flash('success', 'Detail Periksa Berhasil di Tersimpan');         
            return redirect()->route('detail.periksa');
    }//end

    public function EditDetailPeriksa($id){
        $detailPeriksa = TransaksiDetailPeriksa::findOrFail($id);
        $periksas = Periksa::all(); // Ambil semua data Periksa
        $nama_pasien = $detailPeriksa->periksa->pasien->nama_pasien;
        $nama_dokter = $detailPeriksa->periksa->dokter->nama_dokter;
        $tanggal_periksa = $detailPeriksa->periksa->tanggal_periksa;
        $catatan = $detailPeriksa->periksa->catatan;
        $biaya_periksa = $detailPeriksa->periksa->biaya_periksa;
        
        $obats = Obat::all(); // Ambil semua data obat
        $nama_obat = $detailPeriksa->obat->nama_obat;
        $kemasan = $detailPeriksa->obat->kemasan;
        $harga = $detailPeriksa->obat->harga;
        
        return view('detail.edit_detail_periksa', compact('periksas','obats', 'detailPeriksa'));
        }

        public function UpdateDetailPeriksa(Request $request, $id)
        {
            $request->validate([
                'id_periksa' => 'required|numeric', 
                'id_obat' => 'required|exists:obats,id',
            ]);      
        
            $transaksiDetail = TransaksiDetailPeriksa::findOrFail($id);
        
            $transaksiDetail->update([
                'id_periksa' => $request->id_periksa,
                'id_obat' => $request->id_obat,        
            ]);
        
            session()->flash('success', 'Detail Periksa Berhasil di Perbarui');         
            return redirect()->route('detail.periksa');
        }

    public function HapusDetailPeriksa($id){
        TransaksiDetailPeriksa::findOrfail($id)->delete();
        session()->flash('success', 'Detail Periksa berhasil di Hapus');
        return redirect()->back();
    }
}
