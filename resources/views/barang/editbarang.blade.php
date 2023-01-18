@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}"> <script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script> 
</head>
<body>
    <div class="panel panel-default">
        <div class="panel-heading">
           <h3> Edit Data</h3>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
            @foreach($barang as $row) 
            <form action="{{ url('barang' )}}/editt" method="post"> 
            {{csrf_field()}} 

            <div class="form-group">
                <label>Kode Barang</label>
                <input class="form-control" type="input" name="kodebrg" required value="{{$row->kodebrg}}"><br>
            </div>
            <div class="form-group">
                <label>Kode Keterangan</label>
                <input class="form-control" type="input" name="kodekt" required value="{{$row->kodekt}}"><br> 
            </div>
            <div class="form-group">
                <label>Nama Barang</label> 
                <input class="form-control" type="input" name="namabr" required value="{{$row->namabr}}"><br> 
            </div>
            <div class="form-group">
                <label>Nama Kategori</label>
                <input class="form-control" type="input" name="namakt" required value="{{$row->namakt}}"><br> 
            </div>
            <div class="form-group">
                <label>Satuan</label>    
                <input class="form-control" type="input" name="satuan" required value="{{$row->satuan}}"><br>
            </div>
            <div class="form-group">
                <label>Harga</label>    
                <input class="form-control" type="input" name="harga" required value="{{$row->harga}}"><br>
            </div>
            <input type="submit" value="update" class="btn btn-primary"> 
</form>
@endforeach 
</body>
</html>
    
@endsection