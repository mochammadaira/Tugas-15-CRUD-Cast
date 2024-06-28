@extends('layout.master')
@section('judul')
    Tampilan Detail Pemain
@endsection

@section('content')
    <h1>{{$detail->nama}}</h1>
    <p>{{$detail->bio}}</p>
    <a href="/cast" class="btn btn-sm btn-primary">Back</a>
@endsection