<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar {{$student->first_name}}</title>
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
            <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Apellido:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label"></label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Curso</option>
                        <option value="1">1DAM</option>
                        <option value="2">2DAM</option>
                        <option value="3">1ASIX</option>
                        <option value="4">2ASIX</option>
                        <option value="5">1DAW</option>
                        <option value="6">2DAW</option>
                        <option value="7">1ESO</option>
                        <option value="8">2ESO</option>
                        <option value="9">3ESO</option>
                        <option value="10">4ESO</option>
                        <option value="11">1BAT</option>
                        <option value="12">2BAT</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Nota Media:</label>
                    <input type="number" class="form-control" id="recipient-name" min="0"  max="10">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Fecha Matriculación:</label>
                    <input type="date" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="recipient-name">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>

</body>

</html>
