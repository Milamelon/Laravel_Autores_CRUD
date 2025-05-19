@extends('templates.app')
@section('titulo')
Insertar Autor
@endsection
@section('contenido')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="table-container">
                     @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="{{ route('autores.store') }}" method="POST">
                        @csrf
                        <table class="table table-borderless">
                            <tr>
                                <td><label for="codigo_autor" class="form-label">Código Autor:</label></td>
                                <td><input type="text" id="codigo_autor" name="codigo_autor" class="form-control" value="{{ old('codigo_autor') }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="nombre_autor" class="form-label">Nombre Autor:</label></td>
                                <td><input type="text" id="nombre_autor" name="nombre_autor" class="form-control" value="{{ old('nombre_autor') }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="nacionalidad" class="form-label">Nacionalidad:</label></td>
                                <td><input type="text" id="nacionalidad" name="nacionalidad" class="form-control" value="{{ old('nacionalidad') }}" required></td>
                            </tr>
                            <tr>
                             <td colspan="2">
                              <div class="d-flex justify-content-between">
                               <a href="{{ route('autores.index') }}" class="btn btn-secondary">Volver</a>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                              </div>
                             </td>
                            </tr>
                        </table>
                    </form>
                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                        
                    @endif            
                </div>
            </div>
        </div>
    </div>
    @endsection