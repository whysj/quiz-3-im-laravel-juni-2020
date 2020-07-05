@extends('master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Article</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form role="form" action="/article/{{$article->id}}" method="POST">
            @csrf
            @method('PUT')
        <div class="card-body">
            <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" value="{{$article->judul}}" class="form-control" id="judul" placeholder="Isikan Judul">
            </div>
            <div class="form-group">
            <label for="isi">isi</label>
            <input type="text" name="isi" value="{{$article->isi}}" class="form-control" id="isi" placeholder="Isi">
            </div>
            <div class="form-group">
            <label for="tag">tag</label>
            <input type="text" name="tag" value="{{$article->tag}}" class="form-control" id="tag" placeholder="tag">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit Article</button>
        </div>
        </form>
    </div>
@endsection