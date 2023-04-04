@extends('layouts.app')

@section('title', 'Data Service')

@section('content')

  <div class="cotainer">
    <a href="/services/create" class="a btn btn-primary mb-3">Tambah Data</a>
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
            <th>Gambar</th>
            <th>aksi\</th>
          </tr>
        </thead>
        <tbody>
          @php
              $i = 1
          @endphp
          @foreach ($services as $service)
          <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $service->title }}</td>
              <td>{{ $service->description }}</td>
              <td><img src="/image/{{ $service->image }}" alt="image" width="80px" class="img-fluid"></td>
              <td>
                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning ">edit</a>
                <form action="{{ route('services.destroy', $service->id) }}" method="POST">
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