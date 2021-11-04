@extends('layouts.frontend.main')
@section('content')

<h1 class="mt-4">Layanan Kami (Eloquent)</h1>
<a href="{{route('layanan.formtambah')}}" class="btn btn-primary">Tambah Layanan</a>
<ul>
    @foreach($layanan as $lyn)
    <li>
        {{$lyn->nama_layanan}}
        <a href="{{route('layanan.detail',['id'=>$lyn->id])}}">Detail</a>
        <a href="{{route('layanan.formubah',['id'=>$lyn->id])}}">Ubah</a>
        <a href="{{route('layanan.hapus',['id'=>$lyn->id])}}">Hapus</a>
    </li>
    @endforeach
</ul>
@endsection