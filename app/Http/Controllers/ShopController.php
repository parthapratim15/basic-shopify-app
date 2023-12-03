<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $shop = Auth::user();
        $data = $shop->api()->rest('GET', '/admin/shop.json');
        // echo '<pre/>';
        // dd($data['body']['shop']['container']['name']);
        $shop   = $data['body']['shop']['container'];
        return view('shop.index', compact('shop'));
    }
}
