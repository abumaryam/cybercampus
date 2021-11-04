@extends('layouts.frontend.main')
@section('content')
<h1 class="mt-4">Layanan</h1>
<p>Layanan Program Studi Sistem Informasi meliputi: </p>
<ol>
    @foreach($list_layanan as $ls)
    <li>{{$ls}}</li>
    @endforeach
</ol>
@endsection