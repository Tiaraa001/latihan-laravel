<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view ('tentang');
});

Route::get('profile', function() {
    $nama="Tiara";
    return view('profile',compact('nama'));
});

//route parameter
Route::get('post/{id}', function ($a){
    return "Halaman Post ke - $a";
});

Route::get('bio/{nama}/{umur}/{alamat}', function ($nama, $umur, $alamat){
    return "Halaman Bio<br>"
    . "<br>Nama : $nama"
    . "<br>Umur : $umur"
    . "<br>Alamat : $alamat";
});

//Route optional Parameter
Route::get('page/{page?}', function($hal = 1) {
    return "Halaman <b>$hal</b>";
});

Route::get('pesan/{makan?}/{minum?}/{cemilan?}', function ($makan = null, $minum = null, $cemilan = null) {
    if ($makan == null && $minum == null && $cemilan == null){
        $pesan = "Anda tidak memesan, silahkan pulang!";
    }
    if ($makan != null ){
        $pesan = "Anda Memesan<br>"
            . "<br>Makanan : <b>$makan</b>";
    }if ($makan != null && $minum != null ){
        $pesan = "Anda Memesan<br>"
            . "<br>Makanan : <b>$makan</b>"
            . "<br>Minuman : <b>$minum</b>";
    }if ($makan != null && $minum != null && $cemilan != null ){
        $pesan = "Anda Memesan <br>"
            . "<br>Makanan : <b>$makan</b>"
            . "<br>Minuman : <b>$minum</b>"
            . "<br>Cemilan : <b>$cemilan</b>";
    }
    return $pesan;
});
