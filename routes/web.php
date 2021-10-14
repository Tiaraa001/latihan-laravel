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
    return '<h1>Hello</h1>'
    . '<br>Selamat datang di webapp saya</br>'
    . 'Laravel,emang keren';
});

Route::get('profile', function() {
    $nama="Tiara";
    return "Nama saya adalah <b>$nama</b>";
});

Route::get('biodata', function() {
    $nama="Tiara";
    $umur="17";
    $alamat="cisirung";
    $sekolah="SMK Assalam Bandung";
    $kelas="XII RPL 1";
    $hobi="berenang";
    return view('biodata',compact('nama','umur','alamat','sekolah','kelas','hobi'));
});


//route parameter
Route::get('post/{id}', function ($a){
    return view('post', ['posting' => $a]);
});

Route::get('bio/{nama}/{umur}/{alamat}', function ($nama, $umur, $alamat){
    return view('bio', compact('nama','umur','alamat'));
});

//Route optional Parameter
Route::get('page/{page?}', function($hal = 1) {
    return "Halaman <b>$hal</b>";
});

Route::get('blog', function() {
    $posts = [
        ['id' => '1', 'title' => "Lorem Ipsum 1", 'content' => 'content pertama'],
        ['id' => '2', 'title' => "Lorem Ipsum 2", 'content' => 'content kedua'],
        ['id' => '3', 'title' => "Lorem Ipsum 3", 'content' => 'content Ketiga']
    ];
    //dd($posts);
    return view('blog', compact('posts'));
});

Route::get('bioo', function() {
    $posts = [
        ['id' => '1', 'nama' => "Tiara Novita Sari", 'username' => 'tiara_novita', 'email' => 'tiara@gmail.com', 'alamat' => 'cisirung','mapel' =>
        ['mapel1'=>"indonesia",
        'mapel2'=>"pkn",
        'mapel3'=>"mtk"]],
        ['id' => '2', 'nama' => "Ike Vadila", 'username' => 'ike_vadila', 'email' => 'ike@gmail.com', 'alamat' => 'nusa',
        'mapel' => ['mapel1'=>"indonesia", 'mapel2'=>"pkn", 'mapel3'=>"mtk"]],
        ['id' => '3', 'nama' => "Adya Eka Amelia", 'username' => 'adya_eka', 'email' => 'adya@gmail.com', 'alamat' => 'cibedug',
        'mapel' => ['mapel1'=>"indonesia", 'mapel2'=>"pkn", 'mapel3'=>"mtk"]],
        ['id' => '4', 'nama' => "Kayla Rahmanisa", 'username' => 'kayla_rahma', 'email' => 'kayla@gmail.com', 'alamat' => 'sukamenak',
        'mapel' => ['mapel1'=>"indonesia", 'mapel2'=>"pkn", 'mapel3'=>"mtk"]],
        ['id' => '5', 'nama' => "Risma Septiani", 'username' => 'risma_septia', 'email' => 'risma@gmail.com', 'alamat' => 'ciparay',
        'mapel' => ['mapel1'=>"indonesia", 'mapel2'=>"pkn", 'mapel3'=>"mtk"]]
    ];
    //dd($posts);
    return view('bioo', compact('posts'));
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
