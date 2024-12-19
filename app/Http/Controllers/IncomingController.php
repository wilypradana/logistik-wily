<?php

namespace App\Http\Controllers;

use App\Models\Incoming;
use App\Models\Stock;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IncomingController extends Controller
{

    public function incomings(){
        $incomings = Incoming::all();
        $type_menu  = "incomings";
        return view("pages.incomings.incomings", compact("type_menu", "incomings"));
    }
    public function tambah(){
        $type_menu  = "incomings";
        return view("pages.incomings.tambah", compact("type_menu"));
    }
    public function storeIncoming(Request $request)
    {

        $incoming = new Incoming();
        $incoming->no_barang_masuk = substr(uniqid('BRG-', true), 0, 10);
        $incoming->kode_barang = $request->kode_barang;
        $incoming->quantity = $request->quantity;
        $incoming->origin = $request->origin;

        // user isi blank untuk tanggal jika ingin tanggal sekarang, 
        // request null, di timpa pakai waktu sekarang menggunakan karbon
        if($request->tanggal_masuk == null){
            $incoming->tanggal_masuk = Carbon::now();
        }else{
            // untuk bukan tanggal hari ini.
            $incoming->tanggal_masuk = $request->tanggal_masuk;
        }
  
        $incoming->save();
        // cek stock dengan kode barang yang ingin di tambah
        $stock = Stock::where('kode_barang', $request->kode_barang)->first();
        // jika ada stock sisa di gudang table (stock) maka di tambah
        if ($stock) {
            $quantity = $stock->quantity + $request->quantity;
        }else{
            // jika tidak ada stock (menambah barang baru) quantity tidak akan di tambah.
            $quantity = $request->quantity;
        }
     
      // update jika sudah ada buat kalau belum ada kode_barang.
        $stock = Stock::updateOrCreate([
            "kode_barang" => $request->kode_barang,
        ],
        [
            //update quantity atau origin.
            "quantity" => $quantity,
            "origin" => $request->origin,
        ]);
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
