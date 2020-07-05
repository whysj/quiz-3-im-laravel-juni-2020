@extends('master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Judul : {{$article->judul}}
      </div>
      <div class="card-body">
        Slug  :  {{$article->slug}}<br>
        Isi   :   {{$article->isi}}<br>
        Tag :   {{$article->tag}} <br><br>
        <a href="#" class="btn btn-sm btn-info">Detail</a>
      </div>
    </div>    
@endsection