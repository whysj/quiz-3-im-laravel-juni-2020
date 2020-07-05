@extends('master')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">New Article</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/article" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" name="judul" class="form-control" id="judul" placeholder="Isikan Judul">
        </div>
        <div class="form-group">
          <label for="isi">isi</label>
          <input type="text" name="isi" class="form-control" id="isi" placeholder="Isi">
        </div>
        <div class="form-group">
          <label for="tag">tag</label>
          <input type="text" name="tag" class="form-control" id="tag" placeholder="tag">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create Article</button>
      </div>
    </form>
  </div>
@endsection