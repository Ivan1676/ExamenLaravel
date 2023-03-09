<fieldset>
    <legend>Datos del alumno</legend>
    <form action="{{route("alumnos.store")}}" method="POST">
        @method('POST')
        @csrf
        Nombre<input type="text" name="nombre" placeholder="Nombre" id="nombreId" />
        Apellido<input type="text" name="apellido" placeholder="Apellido" id="apellidoId" />
        <input type="submit" value="Enviar" /> 
    </form>
</fieldset>
