@extends('layouts.plantilla')
@section('title', 'Consigna tu inmueble')

@section('more_head')
    <link rel="stylesheet" href="{!! asset('css/imageuploadify.min.css') !!}">
    <script src="{!! asset('js/imageuploadify.min.js') !!}"></script>
@endsection

@section('content')
    <div class="card bg-default tarjeta mt-3 shadow-lg animate__animated animate__fadeInDown" id="fotos">
        <div class="card-body">
            {{ Form::open(['method' => 'post', 'files' => true, 'enctype' => 'multipart/form-data']) }}
            <div class="custom-file">
                <input type="file" name="fileCollection[]" class="form-control" id="multiImg" accept="image/*"
                    multiple="multiple" required>
                <label class="custom-file-label" for="images"></label>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-md-2 text-start">
                    <a href="{{ route('planes.show', $id) }}" type="button" class="btn botones">No cuento con fotos por
                        ahora</a>
                </div>
                <div class="d-none d-md-block col-md-8"></div>
                <div class="col-6 col-md-2 text-end">
                    <button type="submit" class="btn botones">Siguiente</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    </div>
@endsection

@section('scripts_footer')
    <script>
        $('input[type="file"]').imageuploadify();
    </script>
    
@endsection
