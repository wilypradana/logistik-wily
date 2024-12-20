<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function setModalCookie(Request $request)
    {
        if ($request->remember) {
            Cookie::queue('hideDeleteModal', true, 1440); // 24 jam
        }
        return response()->json(['status' => 'success']);
    }
}
