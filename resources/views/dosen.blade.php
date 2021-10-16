<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Data Dosen</center>
    @foreach ($query as $item)
    <h4>NIPD :{{$item->nipd}}</h4>
    <h4>Nama :{{$item->nama}}</h4>
    <h4>alamat : {{$item->alamat}}</h4>
<hr>
    @endforeach
</body>
</html>
