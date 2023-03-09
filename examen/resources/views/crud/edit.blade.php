<fieldset>
    <legend>Datos del alumno</legend>
    <form action="{{route("alumnos.update", $alumno->id)}}" method="POST">
        @method('PUT')
        @csrf
        Nombre<input type="text" name="nombre" value="{{$alumno->nombre}}" placeholder="Nombre" id="nombreId" />
        Apellido<input type="text" name="apellido" value="{{$alumno->apellido}}" placeholder="Apellido" id="apellidoId" />
        <input type="submit" value="Enviar" /> 
    </form>
</fieldset>
