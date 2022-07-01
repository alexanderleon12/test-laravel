@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>


@endif

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="Nombre">Nombres</label><br>
            <input type="text" class="form-control" name="Nombres"
                value="{{ isset($empleado->Nombres)?$empleado->Nombres:old('Nombres') }}" id="Nombres" required><br>
        </div>

        <div class="form-group">
            <label for="Apellidos">Apellidos</label><br>
            <input type="text" class="form-control" name="Apellidos"
                value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:old('Apellidos') }}" id="Apellidos" required><br>
        </div>

        <div class="form-group">
            <label for="Direccion">Direccion</label><br>
            <input type="text" class="form-control" name="Direccion"
                value="{{ isset($empleado->Direccion)?$empleado->Direccion:old('Direccion') }}" id="Direccion" required><br>
        </div>

        <div class="form-group">
            <label for="FechaNacimiento">Fecha de Nacimiento</label><br>
            <input type="date" class="form-control" name="FechaNacimiento"
                value="{{ isset($empleado->FechaNacimiento)?$empleado->FechaNacimiento:old('FechaNacimiento') }}"
                id="FechaNacimiento" required><br><br>
        </div>

        <input type="submit" class="btn btn-success" value="{{ $modo }} Datos">
        <a href="{{ url('empleado') }}" class="btn btn-secondary">Regresar</a>
    </div>
</div>