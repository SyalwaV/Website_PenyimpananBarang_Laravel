@extends('layout.main')
@section('content')
<style type="text/css">
    .pagination li{
     float:left;
     list-style-type:none;
    margin:5px;
    }
    </style>

<div class="container-fluid">
    <br>

            <div class="container">
              <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <button id="tambah" onclick="window.location.href='{{ url()->current()}}/tambah';" class="btn btn-primary" style="margin-bottom: 5px;">Tambah</button>
                    </div>
            </nav>
    </div>
<div class="row" style="display:flex; justify-content: center;" >
    <div class="col-md-12" style="width: 80%">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                <tr>
                <th>kodebrg</th>
                <th>kodekt</th>
                <th>namabr</th>
                <th>namakt</th>
                <th>satuan</th>
                <th>harga</th>
                <th>Aksi</th>
                </tr>
                </thead>

            @foreach($barang as $row)
            <tr>
            <td>{{$row->kodebrg}}</td>
            <td>{{$row->kodekt}}</td>
            <td>{{$row->namabr}}</td>
            <td>{{$row->namakt}}</td>
            <td>{{$row->satuan}}</td>
            <td>{{$row->harga}}</td>
            <td>
            <a href="{{ url()->current() }}/edit/{{$row->kodebrg}}" class="btn btn-primary">Update</a>
            <a href="{{ url()->current() }}/hapus/{{$row->kodebrg}}" class="btn btn-danger">Delete</a>
            </td>

                </tr>
                @endforeach
                </table>
                </div>  
            </div>
          </div>
        </div>
    </div>
            <br>
            <script>
            function MyCari()
            {
            var x =document.getElementById("cari").value;
            window.location.href="{{ url()->current() }}/cari/"+x+"";
            }
            </script>
            </div>
            </html> 
@endsection

