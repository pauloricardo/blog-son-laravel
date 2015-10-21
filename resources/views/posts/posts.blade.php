@extends('template')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('.show-hide-comments').click(function(){
            var id = $(this).attr('data-count');
            if($('.comentarios-'+id).is(':hidden')){
                $('.comentarios-'+id).fadeIn(200);
            }else{
                $('.comentarios-'+id).fadeOut(200);
            }
        })
    });
</script>
@section('title')
    Postagens recentes
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @foreach($posts as $post)
                <div class="col-md-10">
                    <h5>{{$post['titulo']}}</h5>
                    <h6>Escrito por: <strong>{{$post->user->name}}</strong></h6>
                    <small>{{date_format($post['created_at'],date('d/m/Y H:m:s'))}}</small>
                    <p class="text-justify">
                        {{nl2br($post['conteudo'])}}
                        <br>
                        <a href="/posts/post/{{$post->id}}" class="btn btn-sm btn-info">Ler Mais</a>
                    </p>
                    Tags:
                    @forelse($post->tags as $tag)
                        <a href="#">{{$tag->name}}</a> &nbsp;
                    @empty
                        Nenhuma tag cadastrada!
                    @endforelse
                    <br>
                    <a href="javascript:;" class="show-hide-comments" data-count="{{$post->id}}">Comentários ({{count($post->comentarios)}})</a>
                    <div class="comentarios-{{$post->id}} well" id="comentarios-container" style="height:200px; display: none; overflow-y:scroll;">
                        @forelse($post->comentarios as $comentario)
                            <div class="row">
                                <div class="col-md-8">
                                    <span><strong>{{$comentario->nome}}</strong></span>
                                    <p><em>{{$comentario->email}}</em></p>
                                    <p>
                                        {{nl2br($comentario->comentario)}}
                                    </p>
                                </div>
                            </div>
                        @empty
                            Nenhum comentario ainda.
                        @endforelse
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
@stop