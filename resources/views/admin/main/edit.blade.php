@extends('adminlte::page')

@section('title', 'Editar Seção Main')

@section('content_header')

    <div class="row">
        <div class="col-12">
            <h1>Editar Seção {{ $main->title }}</h1>
        </div>
    </div>

@stop

@section('content')

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('admin.main.update', $main) }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{ $main->title }}">
                    <small id="emailHelp" class="form-text text-muted">Este é o nome de sua seção.</small>
                </div>
                <div class="form-group">
                    <label for="text">Texto da Seção Main</label>
                    <textarea name="text" id="text" cols="30" rows="10" class="form-control dkeditor-text-area">{{ $main->text }}</textarea>
                    <small id="emailHelp" class="form-text text-muted">Esse texto aparecerá abaixo do título.</small>
                </div>
                <div class="form-group">
                    <label for="image">Escolha o arquivo para substituir a imagem</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="current">Imagem atual:</label>
                    <img src="{{ asset('storage/main/' . $main->image) }}" alt="" style="width: 300px;">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

@stop