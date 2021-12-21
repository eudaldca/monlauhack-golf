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

        <button type="button" class="btn btn-outline-success" onclick="window.open('{{route("students.create")}}')">
            Nuevo
        </button>
    </div>
    </div>
</nav>

<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route("students.update", $student->id)}}">
                @csrf
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="recipient-name" name="first_name"
                           value="{{$student->first_name}}">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Apellido:</label>
                    <input type="text" class="form-control" id="recipient-name" name="last_name"
                           value="{{$student->last_name}}">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label"></label>
                    <select class="form-select" aria-label="Default select example" name="course">
                        <option selected>Curso</option>
                        <option value="1" {{$student->course === '1DAM' ? 'selected' : ''}}>1DAM</option>
                        <option value="2" {{$student->course === '2DAM' ? 'selected' : ''}}>2DAM</option>
                        <option value="3" {{$student->course === '1ASIX' ? 'selected' : ''}}>1ASIX</option>
                        <option value="4" {{$student->course === '2ASIX' ? 'selected' : ''}}>2ASIX</option>
                        <option value="5" {{$student->course === '1DAW' ? 'selected' : ''}}>1DAW</option>
                        <option value="6" {{$student->course === '2DAW' ? 'selected' : ''}}>2DAW</option>
                        <option value="7" {{$student->course === '1ESO' ? 'selected' : ''}}>1ESO</option>
                        <option value="8" {{$student->course === '2ESO' ? 'selected' : ''}}>2ESO</option>
                        <option value="9" {{$student->course === '3ESO' ? 'selected' : ''}}>3ESO</option>
                        <option value="10"{{$student->course === '4ESO' ? 'selected' : ''}}>4ESO</option>
                        <option value="11"{{$student->course === '1BAT' ? 'selected' : ''}}>1BAT</option>
                        <option value="12"{{$student->course === '2BAT' ? 'selected' : ''}}>2BAT</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Nota Media:</label>
                    <input type="number" class="form-control" id="recipient-name" min="0" name="average_mark"
                            value="{{$student->average_mark}}">
                </div>
                <div class="mb-3">
                    <label for="enrollment_date" class="col-form-label">Fecha Matriculación:</label>
                    <input type="date" class="form-control" id="enrollment_date" name="enrollment_date"
                           value="{{$student->enrollment_date->format("d/m/Y")}}">
                </div>
                <div class="mb-3">
                    <label for="birth_date" class="col-form-label">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date"
                           value="{{$student->birth_date->format("d/m/Y")}}">
                </div>
                <div class="modal-footer">
                <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>
