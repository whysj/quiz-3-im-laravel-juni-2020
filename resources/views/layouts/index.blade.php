@extends('master')

@section('content')
    <div class="ml-3 mt-3">
        <h1>List Article</h1>
        @foreach ($articles as $key => $article)
        <div class="card mb-4">
            <div class="card-header">
                    {{$key+1}}
                Judul : {{$article->judul}}
              </div>
              <div class="card-body">
                Slug  :  {{$article->slug}}<br>
                Isi   :   {{$article->isi}}<br>
                Tag :   {{$article->tag}} <br><br>
              <a href="/article/{{$article->id}}" class="btn btn-sm btn-info">Detail</a>
              <a href="/article/{{$article->id}}/edit" class="btn btn-sm btn-default">Edit</a>
              <form action="/article/{{$article->id}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')


                <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></button>
              </form>
              </div>
            </div>   
            @endforeach
            


        <a href="/article/create" class="btn btn-primary">
            Create New Article
        </a>
    </div>
    @push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
    @endpush
@endsection