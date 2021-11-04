@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Berita</h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    Tambah Berita
                    <a href="{{route('admin.berita.index')}}" class="btn btn-sm btn-primary float-right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.berita.ubah',['id'=>$berita->id])}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="judul">Judul Berita</label>
                            <input type="text" class="form-control" name="judul" value="{{$berita->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Berita</label>
                            <textarea name="isi" id="isi" cols="30" rows="10" class="form-control">{{$berita->isi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover_img">Gambar Cover Berita</label>
                            <input type="text" class="form-control" name="cover_img" value="{{$berita->cover_img}}">
                        </div>
                        <div class="form-group">
                            <label for="kategori_id">Kategori Berita</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                @foreach($kategori as $kat)
                                <option value="{{$kat->id}}" {{($kat->id==$berita->kategori_id) ? 'selected' : ''}}>{{$kat->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Ubah">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection