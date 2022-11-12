<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Edicion Escritores</title>
</head>
<body>
<div class="container">
    <h4>Creacion Escritores</h4>
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('escri.update',$escritores->id_escritor)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">NOMBRE</label>
                    <input type="text" class="form-control" name="nome" required maxlength="50" value="{{$escritores->nome}}">
                </div>
                <div class="form-group">
                    <label for="ape">APELLIDO PATERNO</label>
                    <input type="text" class="form-control" name="ape" required maxlength="50" value="{{$escritores->ape}}">
                </div>
                <div class="form-group">
                    <label for="ame">APELLIDO MATERNO</label>
                    <input type="text" class="form-control" name="ame" required maxlength="50" value="{{$escritores->ame}}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    <input type="reset" class="btn btn-default" value="Cancelar">
                    <a href="javascript:history.back()">Ir al Listado</a>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>

