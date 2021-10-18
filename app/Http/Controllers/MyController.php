<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Hero;

class MyController extends Controller
{
    public function test()
    {
        $result = "<h1>Test Controller</h1>";
        return view('test', compact('result'));
    }

    public function heroes()
    {
        $hero = Hero::all();
        return view('hero', compact('hero'));
    }

    public function barangs()
    {
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }
}
