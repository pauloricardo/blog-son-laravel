@extends('template')
@section('title')
    Inserir Post
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Editar post {{$post->titulo}}</h1>

            @if($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            {!! Form::model($post,['method'=>'put', 'route'=>['admin.posts.update',$post->id]]) !!}
            @include('admin.posts._form')
            <div class="form-group">
                {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop