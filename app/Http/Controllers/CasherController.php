<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasherController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }
    public function session(Request $request)
    {
        $productname = $request->get('productname');
        $productprice = $request->get('total');
    }

}
