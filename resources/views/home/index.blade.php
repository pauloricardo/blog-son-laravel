@extends('template')

@section('title')
    ::Blog - Ciência 2000::
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Bem vindo ao Blog Ciência 2000!!</h1>
            @foreach($posts as $post)
                <div class="col-md-10" >
                    <h5>{{$post['titulo']}}</h5>
                    <h6>Escrito por: <strong>{{$post->user->name}}</strong></h6>
                    <small>{{$post['created_at']}}</small>
                    <p class="text-justify">
                        {{$post['conteudo']}}
                        <a href="javascript:;" class="btn btn-sm btn-info">Ver Mais</a>
                    </p>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
@stop