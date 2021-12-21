<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver {{$student->first_name}}</title>
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

<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar</h5>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="mb-3">
                    <p for="recipient-name" class="col-form-label">Nombre:</p>
                    <p for="message-text" class="col-form-label">{{$student->first_name}}</p>
                </div>
                <div class="mb-3">
                    <p for="message-text" class="col-form-label">Apellido:</p>
                    <p for="message-text" class="col-form-label">{{$student->last_name}}</p>
                </div>
                <div class="mb-3">
                    <p for="message-text" class="col-form-label">Curso</p>
                    <p for="message-text" class="col-form-label">{{$student->course}}</p>
                </div>
                <div class="mb-3">
                    <p for="message-text" class="col-form-label">Nota Media:</p>
                    <p for="message-text" class="col-form-label">{{$student->average_mark}}</p>
                </div>
                <div class="mb-3">
                    <p for="message-text" class="col-form-label">Fecha Matriculación:</p>
                    <p for="message-text" class="col-form-label">{{$student->enrollment_date->format("d-m-Y")}}</p>
                </div>
                <div class="mb-3">
                    <p for="message-text" class="col-form-label">Fecha de nacimiento:</p>
                    <p for="message-text" class="col-form-label">{{$student->birth_date->format("d-m-Y")}}</p>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>
