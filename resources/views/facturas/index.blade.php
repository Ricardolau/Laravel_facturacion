@extends('adminlte::page')

@section('content')
<div class="container">
    <div>
        <a href="{{ route('personas.create') }}">Crear personas</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Personas') }}</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Razón Social</th>
                          <th scope="col">Nombre Comercial</th>
                          <th scope="col">Tipo documento</th>
                          <th scope="col">Pais</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Fecha creacion</th>
                          <th scope="col">Actualizacion</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($personas as $persona)
                        <tr>
                            <td>{{ $persona->id }}</td>
                            <td>{{ $persona->nombreiniciales }}</td>
                            <td>{{ $persona->razon_social }}</td>
                            <td>{{ $persona->nombre_comercial }}</td>
                            <td>{{ $persona->tipo_documento }}</td>
                            <td>{{ $persona->pais_documento }}</td>
                            <td>{{ $persona->estado }}</td>
                            <td></td>
                            <td></td>
                            
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
