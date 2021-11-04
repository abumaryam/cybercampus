@extends('layouts.frontend.main')
@section('content')
<h1 class="mt-4">Nama Ketua Jurusan <?= $kajur ?></h1>
<h2>ID User adalah {{$id_user}}</h2>
<p>Nama User Saat Ini adalah {{$current_user->name}}</p>
<p>Email User Saat Ini adalah {{$current_user->email}}</p>

<?php echo $nama_prodi ?>
<p>Waktu Saat ini: {{time()}} </p>
@if (5 < 10) <h2> Kondisi Benar </h2>
    @endif

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sed deleniti sequi suscipit doloremque quae, dolorum, corporis obcaecati laborum ab necessitatibus in velit neque fuga inventore magni eum, facere reprehenderit?</p>
    <p>Nama Universitas :<b> {{ $universitas }} </b></p>
    @endsection