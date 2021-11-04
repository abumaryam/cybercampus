@extends('layouts.frontend.main')

@section('content')

<h1 class="mt-4">Lihat Gambar</h1>

<img src="{{asset('gambar/'.$gallery->nama_file)}}" alt="gambar">
<p>
    {{$gallery->keterangan}}
</p>

@endsection