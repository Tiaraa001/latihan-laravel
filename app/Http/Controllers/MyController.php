<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Hero;
use App\Models\Pesanan;
use App\Models\Pembelian;
use App\Models\Pembeli;
use App\Models\suplier;

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
    public function pesanans()
    {
    $pesanan = Pesanan::all();
    return view('pesanan', compact('pesanan'));
    }
    public function pembelians()
    {
    $pembelian = Pembelian::all();
    return view('pembelian', compact('pembelian'));
    }
    public function supliers()
    {
    $suplier = suplier::all();
    return view('suplier', compact('suplier'));
    }

    public function pembelis()
    {
    $pembeli = Pembeli::all();
    return view('pembeli', compact('pembeli'));
    }

}
