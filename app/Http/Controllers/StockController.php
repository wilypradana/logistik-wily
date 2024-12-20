<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StockController extends Controller
{
    public function stocks(Request $request){
        $stocks = Stock::all();
        $type_menu  = "stocks";
        $searchQuery = $request->input('search');
        $stocks = Stock::where('kode_barang', 'like', '%' . $searchQuery . '%')
        ->orWhere('origin', 'like', '%' . $searchQuery . '%')->paginate(10);
        return view("pages.stocks.stocks", compact("type_menu", "stocks"));
    }
    public function deleteconfirm(Request $request){
        $data = $request->get('id');
       
        return view("pages.stocks.confirm", compact("data"));
    }
    public function deleteproccess(Request $request){
      
        $data = $request->get('id');

      
        $credentials = [
            'password' => $request->input('password')
        ];
        
        
        if (Auth::check() && Hash::check($credentials['password'], Auth::user()->password)) {
          
            Stock::where('id', $data)->delete();
            
           
            return redirect('/dashboard')->with('success', 'Stock berhasil di hapus');
        } else {
            return redirect('/stocks')->with('error', 'autentikasi gagal');
        }
    }
    

}
