@extends('layouts.frontend.main')

@section('content')
<h1 class="mt-4">Layanan Kami (RAW)</h1>
<ul>
    @foreach($layanan as $lyn)
    <li>{{ $lyn->nama_layanan }}</li>
    @endforeach
</ul>
@endsection