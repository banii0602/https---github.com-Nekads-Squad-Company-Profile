@extends('layouts.app')

@section('title', 'Data Artikel')

@section('content')

  <div class="cotainer">
    <a href="/artikels/create" class="a btn btn-primary mb-3">Tambah Data</a>
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
      <strong>Berhasil</strong>
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="table_responsive">
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Deskripsi</th>
            <th>Deskripsi II</th>
            <th>Deskripsi III</th>
            <th>Gambar</th>
            <th>aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
              $i = 1
          @endphp
          @foreach ($artikels as $artikel)
          <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $artikel->title }}</td>
              <td>{{ $artikel->description }}</td>
              <td>{{ $artikel->description2 }}</td>
              <td>{{ $artikel->description3 }}</td>
              <td><img src="/image/{{ $artikel->image }}" alt="image" width="80px" class="img-fluid"></td>
              <td>
                <a href="{{ route('artikels.edit', $artikel->id) }}" class="btn btn-warning ">edit</a>
                <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                <button class="btn btn-danger">Hapus</button>
                </form>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection