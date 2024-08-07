@extends('layout.master')
@section('judul')
    Tampilan Cast
@endsection

@section('content')
    <a href="/cast/create" class="btn btn-primary btn-sm">Tambah</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $key => $item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->nama}}</td>
      <td>{{$item->umur}}</td>
      <td>
          <form action="/cast/{{$item->id}}" method="POST">
              @csrf
              @method("delete")
              <a href="/cast/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
              <a href="/cast/{{$item->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
              <input type="submit" class="btn btn-sm btn-danger" value="Delete">
        </form>
      </td>
    </tr>
    @empty
    <p>No Users</p>
    @endforelse
  </tbody>
</table>
@endsection