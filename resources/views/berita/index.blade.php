@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Berita</h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    Daftar Berita
                    <a href="{{route('admin.berita.formtambah')}}" class="btn btn-sm btn-primary float-right">Tambah Berita</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($berita as $brt)
                            <tr>
                                <td>{{$brt->id}}</td>
                                <td>{{$brt->judul}}</td>
                                <td>{{$brt->kategori->nama_kategori}}</td>
                                <td>
                                    <a href="{{route('admin.berita.detail',['id'=>$brt->id])}}" class="btn btn-sm btn-info">Detail</a>
                                    <a href="{{route('admin.berita.formubah',['id'=>$brt->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{route('admin.berita.hapus',['id'=>$brt->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $berita->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection