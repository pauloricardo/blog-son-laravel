{!! Form::hidden('user_id',null) !!}
<div class="form-group">
    {!! Form::label('titulo', 'Título:') !!}
    {!! Form::text('titulo', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('conteudo', 'Conteúdo:') !!}
    {!! Form::textarea('conteudo', null, ['class'=>'form-control']) !!}
</div>