@extends('layouts.app')

@section('content')
<div class="container">
<h2>Editar Empleado</h2>
<form action="{{ url('/empleado/'.$empleado->id) }}" method="POST">
@csrf
{{ method_field('PATCH') }}

@include('empleado.form', ['modo'=>'Editar'])
</form>
</div>
@endsection

