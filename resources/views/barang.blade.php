<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($barang as $data)
    {{$data->idBarang}} - {{$data->nama}} <br>
    {{$data->varian}} - {{$data->hargaBeli}} <br>
    {{$data->hargaJual}} <hr>

    @endforeach
</body>
</html>
