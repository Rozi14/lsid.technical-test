@extends('layouts.app')

@section('title', 'Form todolist')

@section('contents')
<form action="{{ isset($todolist) ? route('todolist.tambah.update', $todolist->id) : route('todolist.tambah.simpan') }}" method="post">
  @csrf
  <div class="row">
    <div class="col-12">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">
            {{ isset($todolist) ? 'Form Edit todolist' : 'Form Tambah todolist' }}
          </h6>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Nama Kegiatan</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ isset($todolist) ? $todolist->judul : '' }}">
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ isset($todolist) ? $todolist->deskripsi : '' }}">
          </div>
          <div class="form-group">
            <label for="deskripsi">Status</label>
            <select name="status" id="status" class="form-control">
              <option value=""></option>
              <option value="Selesai">Selesai</option>
              <option value="Dalam Proses">Dalam Proses</option>
              <option value="Tertunda">Tertunda</option>
            </select>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection