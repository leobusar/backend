@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de empleados
                <a href="{{route('empleado.create')}}" class="btn btn-info">Crear Empleado</a>
            </div>

                <div class="card-body">

                    @include("shared.errors")

                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>Nombre</th>
                            <th>Fecha Nacimiento</th>
                            <th>Documento</th>
                            <th>Telefono</th>
                            <th colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $empleado) 
                            <tr>
                                <td>{{$empleado->nombre}}</td>
                                <td>{{$empleado->fecha_nac}}</td>
                                <td>{{$empleado->documento}}</td>
                                <td>{{$empleado->telefono}}</td>
                                <td><a href="{{route('empleado.show',$empleado->id)}}" class="btn btn-info">Mostrar</a></td>
                                <td><a href="{{route('empleado.edit',$empleado->id)}}" class="btn btn-primary">Editar</a> </td>
                                <td>
                <form action="{{ route('empleado.destroy',$empleado->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>                                    
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{ $empleados->render() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
