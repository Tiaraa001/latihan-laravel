<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Data Mahasiswa</center>
    @foreach ($huhu as $item)
    <h4>NIM :{{$item->nim}}</h4>
    <h4>Nama :{{$item->nama}}</h4>
    <h4>Jurusan : {{$item->jurusan}}</h4>
    <h4>Wali : {{$item->wali}}</h4>
    <hr>
    @endforeach
</body>
</html>
