@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    Daftar Kategori
                    <a href="{{route('admin.kategori.formTambah')}}" class="btn btn-sm btn-primary float-right">Tambah Berita</a>
                </div>
                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $kat)
                            <tr>
                                <td>{{$kat->id}}</td>
                                <td>{{$kat->nama_kategori}}</td>
                                <td>
                                    <a href="{{route('admin.kategori.detail',['id'=>$kat->id])}}" class="btn btn-sm btn-info">detail</a>
                                    <a href="{{route('admin.kategori.formUbah',['id'=>$kat->id])}}" class="btn btn-sm btn-warning">edit</a>
                                    <a href="{{route('admin.kategori.hapus',['id'=>$kat->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');">hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection