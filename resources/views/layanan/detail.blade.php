@extends('layouts.frontend.main')

@section('content')
<h1 class="mt-4">Detail Layanan</h1>
Nama Layanan : {{ $layanan->nama_layanan }} <br />
Deskripsi Layanan : {{ $layanan->deskripsi_layanan }}<br />
@endsection