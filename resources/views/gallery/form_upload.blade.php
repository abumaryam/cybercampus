@extends('layouts.frontend.main')

@section('content')

<h1 class="mt-4">Upload Gambar</h1>
<form action="{{route('gallery.prosesUpload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="fileUpload">File</label>
        <input type="file" name="fileUpload" class="form-control">
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan Gambar</label>
        <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Tambahkan" class="btn btn-primary">
    </div>

</form>

@endsection