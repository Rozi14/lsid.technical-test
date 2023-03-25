@extends('layouts.app')

@section('title', 'Todo List')

@section('contents')
@if (auth()->user()->level == 'Admin')
<a href="{{ route('todolist.tambah') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>
@endif

<div class="row">

  @php($no = 1)
  @foreach ($data as $row)
  <div class="card border-bottom-primary shadow h-10 py-2 col-12 col-md-3 mr-2">
    <div class="card-header">
      <h5 class="mb-0 font-weight-bold text-gray-800">{{ $row->judul }}</h5>
    </div>
    <div class="card-body">
      <h6 class="card-title font-weight-bold mb-0">Deskripsi :</h6>
      <p class="card-text">{{ $row->deskripsi }}</p>
    </div>
    <div class="card-footer">
      <h6 class="card-title font-weight-bold mb-0">Status :</h6>
      <div class="alert alert-primary text-center" role="alert">
        {{ $row->status }}
      </div>
      <p class="font-weight-bold mb-0">Di buat pada :</p>
      <i class="fas fa-calendar fa-1x text-gray-500"> {{ $row->created_at}}</i>
      <p class="font-weight-bold mb-0">Di perbarui pada :</p>
      <i class="fas fa-calendar fa-1x text-gray-500 mb-3"> {{ $row->updated_at}}</i>
      <hr>
      <a href="{{ route('todolist.edit', $row->id) }}" class="btn btn-warning col-5">Edit</a>
      <a href="{{ route('todolist.hapus', $row->id) }}" class="btn btn-danger col-6">Hapus</a>
    </div>
  </div>
  @endforeach
</div>

@endsection