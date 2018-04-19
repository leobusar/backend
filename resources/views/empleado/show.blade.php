@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información del empleados</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nombre</td>
                            <td>{{$empleado->nombre}}</td>
                        </tr>
                        <tr>
                            <td>Telefono</td>
                            <td>{{$empleado->telefono}}</td>
                        </tr>
                        <tr>
                            <td>Documento</td>
                            <td>{{$empleado->documento}}</td>
                        </tr>
                        <tr>
                            <td colspan="2"> <a href="{{route('empleado.edit',$empleado->id)}}" class="btn btn-info">Editar</a>   </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
