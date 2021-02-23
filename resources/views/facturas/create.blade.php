@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Personas') }}</div>

                <div class="card-body">
                    <form action="{{ route('personas.store') }}" method="post">
                    @csrf
                        <div class="group">
                        <input type="text" id="numero_documento" name="numero_documento"
                            value="{{ old('numero_documento') }}" placeholder="Dni">
                        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
                        <input type="text" id="apellido1" name="apellido1" value="{{ old('apellido1') }}" placeholder="Apellido1">
                        <input type="text" id="apellido2" name="apellido2" value="{{ old('apellido2') }}" placeholder="Apellido2">
                        <input type="text" id="razon_social" name="razon_social" value="{{ old('razon_social') }}"
                            placeholder="Razon social">
                        <input type="text" id="nombre_comercial" name="nombre_comercial"
                            value="{{ old('nombre_comercial') }}" placeholder="Nombre comercial">
                        </div>
                        <div class="group">
                        <textarea id="comentario" name="comentario" placeholder="Comentario ">{{ old('comentario') }}</textarea>
                        </div>
                        <input type="submit" value="Submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
