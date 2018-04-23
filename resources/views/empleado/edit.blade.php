@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar empleado</div>

                <div class="card-body">
                                @include("shared.errors")

                <form action="{{ route('empleado.update', $empleado->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                <input type="text" name="nombre" class="form-control" value="{{ $empleado->nombre }}" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Teléfono:</strong>
                                <input type="number" name="telefono" class="form-control" placeholder="Teléfono" value="{{ $empleado->telefono }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Documento:</strong>
                                <input type="text" name="documento" class="form-control" placeholder="Documento" value="{{ $empleado->documento }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Fecha Nacimiento:</strong>
                                <input type="date" name="fecha_nac" class="form-control" value="{{ $empleado->fecha_nac }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Activo:</strong>
                                <input type="checkbox" name="activo" class="form-control" value="1" {{ ($empleado->activo)?"checked":"" }} >
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
