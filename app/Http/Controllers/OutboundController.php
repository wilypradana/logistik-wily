<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Stock;
use App\Models\Outbound;
use Illuminate\Http\Request;

class OutboundController extends Controller
{
    public function outbounds(){
        $outbounds = Outbound::all();
        $type_menu  = "outbounds";
        return view("pages.outbounds.outbounds", compact("type_menu", "outbounds"));
    }

    public function tambah(){
        $type_menu  = "layout";
        return view("pages.outbounds.tambah", compact("type_menu"));
    }
    public function storeOutbound(Request $request)
    {

        $outbound = new Outbound();
        $outbound->no_barang_keluar = substr(uniqid('BRGOUT-', true), 0, 10);
        $outbound->kode_barang = $request->kode_barang;
        $outbound->quantity = $request->quantity;
        $outbound->destination = $request->destinasi;
        // fitur untuk tanggal sekarang jika user mengisi blank maka request yang dikirim adalah null
        // null di timpa menggunakan carbon (carbon ini menggunakan waktu lokal indonesia)
        if($request->tanggal_keluar == null){
            $outbound->tanggal_keluar = Carbon::now();
        }else{
            // jika tanggal keluarnya berbeda dengan tanggal sekarang, maka isi sesuai dengan request
            $outbound->tanggal_keluar = $request->tanggal_keluar;
        }
  
        $outbound->save();
        
        // logic stock

        // cari stock yang kode barangnya sama dengan yang di request
        $stock = Stock::where('kode_barang', $request->kode_barang)->first();
        // kalau ada jumlah yang ada di gudang table berkurang sesuai request yang keluar. 
        $quantity = $stock->quantity - $request->quantity;
        // stock akan di update atau dibuat jika kode barang tidak ada maka dibuat jika ada di update quantitynya
        $stock = Stock::updateOrCreate([
            "kode_barang" => $request->kode_barang,
        ],
        [
            "quantity" => $quantity,
        ]);

        // kemabli membawa pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
