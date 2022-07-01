@extends('layouts.app')

@section('content')
<div class="container">

<h2>Registrar Empleado</h2>

<form action="{{ url('/empleado') }}" method="post"><br>

@csrf
@include('empleado.form', ['modo'=>'Crear'])

</form>
</div>
@endsection