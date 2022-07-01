@extends('layouts.app')

@section('content')
<div class="container">


<h2>Lista de empleados</h2> <br>

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ Session::get('mensaje') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif
  




<a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar Nuevo Empleado</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Fecha de Nacimiento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombres }}</td>
            <td>{{ $empleado->Apellidos }}</td>
            <td>{{ $empleado->Direccion }}</td>
            <td>{{ $empleado->FechaNacimiento }}</td>
            <td>

                <a href="{{ url('/empleado/'. $empleado->id . '/edit') }}" class="btn btn-primary">
                    Editar
                </a>

                <form action="{{ url('/empleado/' . $empleado->id) }}" class="d-inline" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" onclick="return confirm('¿Deseas eliminar este registro?)" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach

        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
{!! $empleados->links() !!}
</div>
@endsection