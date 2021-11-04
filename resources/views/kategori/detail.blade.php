@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    <a href="{{route('admin.kategori.index')}}" class="btn btn-sm btn-success float-right">Kembali</a>
                    Detail Kategori
                </div>
                <div class="card-body">

                    <table class="table table-hover">
                        <tr>
                            <td>id</td>
                            <td>{{$kategori->id}}</td>
                        </tr>
                        <tr>
                            <td>Nama Kategori</td>
                            <td>{{$kategori->nama_kategori}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>{{$kategori->deskripsi}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection