<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stocks(){
        $stocks = Stock::all();
        $type_menu  = "stocks";
        return view("pages.stocks.stocks", compact("type_menu", "stocks"));
    }
}
