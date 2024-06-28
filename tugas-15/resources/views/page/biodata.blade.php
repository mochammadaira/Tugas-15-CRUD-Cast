@extends('layout.master')
@section('judul')
    Halaman Biodata
@endsection
@section('content')

<h1>Halaman Biodata</h1>
<form action="/selamatdatang">
    @csrf
    <label>First Name:</label><br>
    <p></p>
    <input type="text" name="nama" required><br></br>
    <label>Last Name:</label><br>
    <p></p>
    <input type="text" name="nama-akhir"required>
    <br></br>
        <input type="submit" value="Sign Up">
</form>
@endsection