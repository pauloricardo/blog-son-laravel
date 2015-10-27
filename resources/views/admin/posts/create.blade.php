@extends('template')
@section('title')
    Inserir Post
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Criar novo post</h1>

            @if($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            {!! Form::open(['method'=>'post', 'route'=>'admin.posts.store']) !!}
            {!! Form::hidden('user_id',1) !!}

            @include('admin.posts._form')

            <div class="form-group">
                {!! Form::label('tags', 'Tags:') !!}
                {!! Form::textarea('tags', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop