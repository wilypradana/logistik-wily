<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Stock;
use App\Models\Outbound;
use Illuminate\Http\Request;

class OutboundController extends Controller
{
    public function outbounds(Request $request){
        $destination = $request->query('origin');
        $outbounds = Outbound::when($destination, function ($query, $destination) {
            return $query->where('destination', $destination);
        })->get();
        $type_menu  = "outbound";
        return view("pages.outbound.outbounds", compact("type_menu", "outbounds"));
    }

    public function tambah(){
        $type_menu  = "layout";
        return view("pages.outbound.tambah", compact("type_menu"));
    }
    public function storeOutbound(Request $request)
    {

        $outbound = new Outbound();
        $outbound->no_barang_keluar = 'BRGOUT-' . random_int(1000, 9999);
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
        $stock = Stock::where('kode_barang', $request->kode_barang)->first();
        if ($stock == null) {
            return redirect()->back()->with('error', 'kode barang tidak ditemukan');
        }else if($outbound->quantity > $stock->quantity){
            return redirect()->back()->with('error', 'stock barang kurang');
        }
        $outbound->save();
        
        // logic stock
        // cari stock yang kode barangnya sama dengan yang di request
        // kalau ada jumlah yang ada di gudang table berkurang sesuai request yang keluar. 
        if ($stock) {
            $quantity = $stock->quantity - $request->quantity;
        }else{
            // jika tidak ada stock (menambah barang baru) quantity tidak akan di tambah.
            $quantity = $request->quantity;
        }
        
       
     
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


    public function deleteOutbounds(Request $request){
        $id =  $request->id;
        $outbound = Outbound::findOrFail($id);
        $outbound->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
