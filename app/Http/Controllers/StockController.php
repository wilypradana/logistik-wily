<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

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

}
