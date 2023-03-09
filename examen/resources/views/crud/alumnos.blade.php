<a href="{{route("alumnos.create")}}">Añadir alumno</a>
<h2>Productos</h2>
<table class="table table-striped" style="margin: 2em">
    <caption>Listado de Alumnos</caption>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Borrar</th>
    </tr>
    @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->id }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->apellido }}</td>
            <td>
                <form action="{{route("alumnos.destroy", $alumno->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar" />
                </form>
            </td>
        </tr>
    @endforeach
</table>
    