@extends('template')
@section('title')
   Admin
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Blog admin</h1>
            <a href="{{route('admin.posts.create')}}" class="btn btn-info">Criar novo post</a>
            <br><br>

            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Autor</th>
                        <th>Título</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->titulo}}</td>
                        <td>
                            <a href="{{route('admin.posts.edit', ['id'=>$post->id])}}" class="btn btn-sm btn-default">Editar</a>
                            <a href="{{route('admin.posts.destroy', ['id'=>$post->id])}}" class="btn btn-sm btn-danger">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $posts->render() !!}
        </div>
    </div>
@stop