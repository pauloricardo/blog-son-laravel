@extends('template')

@section('title')
    Post
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-8">
                <h1>{{$post->titulo}}</h1>
                Escrito por: <strong>{{$post->user->name}}</strong><br>
                <em>{{date_format($post->created_at, date('d/m/Y H:m:s'))}}</em>

                <p>
                    {{nl2br($post->conteudo)}}
                </p>
            </div>
            <a href="/posts">Voltar</a>
        </div>
    </div>
@stop