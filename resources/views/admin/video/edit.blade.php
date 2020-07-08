@extends('adminlte::page')

@section('title', 'Editar Seção Main')

@section('content_header')

    <div class="row">
        <div class="col-12">
            <h1>Editar Seção {{ $video->title }}</h1>
        </div>
    </div>

@stop

@section('content')

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('admin.video.update', $video) }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{ $video->title }}">
                    <small id="emailHelp" class="form-text text-muted">Este é o título de sua seção.</small>
                </div>
                <div class="form-group">
                    <label for="text">Texto da Seção Vídeo</label>
                    <textarea name="text" id="text" cols="30" rows="10" class="form-control dkeditor-text-area">{{ $video->text }}</textarea>
                    <small id="emailHelp" class="form-text text-muted">Esse texto aparecerá abaixo do título.</small>
                </div>
                <div class="form-group">
                    <label for="embed">Embed do vídeo</label>
                    <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                        <p class="float-right mb-0 mr-4" style="white-space: nowrap;">https://www.youtube.com/watch?v=</p><input style="max-width: 200px;" type="text" class="form-control float-right" id="embed" name="embed" aria-describedby="emailHelp" value="{{ $video->embed }}">
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Este é o embed do vídeo.</small>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

@stop