@extends('layout.main')
@section('content')
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
</head>
<body>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
@if(count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
<li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
@endif
<br>
<form action="{{ url()->current() }}/simpan" method="post">
{{csrf_field()}}
<div class="form-group">
    <label>Kode Barang</label>
    <input class="form-control" type="input" name="kodebrg" value="{{old('kodebrg')}}"><br>
</div>
<div class="form-group">
    <label>Kode Keterangan</label>
    <input class="form-control" type="input" name="kodekt" value="{{old('kodekt')}}"><br>
</div>
<div class="form-group">
    <label>Nama Barang</label>
    <input class="form-control" type="input" name="namabr" value="{{old('namabr')}}"><br>
</div>
<div class="form-group">
    <label>Nama Kategori</label>
    <input class="form-control" type="input" name="namakt" value="{{old('namakt')}}"><br>
</div>
<div class="form-group">
    <label>Satuan</label>
    <input class="form-control" type="input" name="satuan" value="{{old('satuan')}}"><br>
</div>
<div class="form-group">
    <label>Harga</label>
    <input class="form-control" type="input" name="harga" value="{{old('harga')}}"><br>
</div>
<br>
<input type="submit" value="simpan" class="btn btn-primary">

</form>
</body>
</html>    

@endsection