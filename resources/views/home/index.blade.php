@extends('template')

@section('title')
   ::Blog - Ciência 2000::
@stop
@section('content')
    <div class="row">
        <h1>Bem vindo ao Blog Ciência 2000!!</h1>
        @foreach($posts as $post)
        <div class="well">
            <h6>Escrito por: <strong>{{$post['autor']}}</strong></h6>
            <small>{{$post['data']}}</small>
            <p class="text-justify">
                {{$post['conteudo']}}
                <a href="javascript:;">Ver Mais</a>
            </p>
        </div>
        @endforeach

    </div>
@stop