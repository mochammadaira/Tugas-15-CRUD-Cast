@extends('layout.master')
@section('judul')
    Create Data Pemain Film
@endsection

@section('content')
<form action="/cast" method="POST">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors)
                <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Umur</label>
    <input type="text" name="umur" class="form-control" placeholder="Umur">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Bio</label>
    <textarea type="text" name="bio" class="form-control" cols="30" rows="10" placeholder="Biodata"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection