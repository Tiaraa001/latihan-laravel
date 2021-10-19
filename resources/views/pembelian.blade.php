<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h3>Tabel Pembelian</h3></center>
    @foreach ($pembelian as $data)
       <b>Nama Pembeli : </b> {{$data->namaPembeli}} <br>
       <b>Nama Barang : </b> {{$data->namaBarang}} <br>
        <b>Nama Suplier : </b>{{$data->namaSuplier}} <br>
        <b>Qty : </b>{{$data->qty}} <br>
        <b>Tanggal Pesan : </b>{{$data->tgl}} <br> <hr>
    @endforeach
</body>
</html>
