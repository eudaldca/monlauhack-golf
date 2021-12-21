<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#inicio">Usuarios</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <button type="button" class="btn btn-outline-success" onclick="window.open('{{route("students.create")}}')">Nuevo</button>
    </div>
    </div>
</nav>

<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Curso</th>
            <th scope="col">Nota Media</th>
            <th scope="col">Fecha Matriculación</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->course}}</td>
                <td>{{$student->average_mark}}</td>
                <td>{{$student->enrollment_date->format("d-m-Y")}}</td>
                <td>{{$student->birth_date->format("d-m-Y")}}</td>
                <td>
                    <a href="{{route("students.edit", $student->id)}}"><i class="bi bi-pencil-fill"></i></a>
                    <a href="{{route("students.show", $student->id)}}"><i class="bi bi-eye-fill"></i></a>
                    <a href="{{route("students.destroy", $student->id)}}"><i class="bi bi-trash-fill"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

</html>
