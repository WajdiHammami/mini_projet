@extends('posts.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Mini projet laravel</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('posts.create') }}">Ajouter un autre post </a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description/th>
            <th>Categorie</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
           
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->categorie }}</td>
        

        <!-- destroy lenna -->

        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center pagination-lg">
    {!! $posts ?? ''->links('pagination::bootstrap-4') !!}
      </div>
@endsection