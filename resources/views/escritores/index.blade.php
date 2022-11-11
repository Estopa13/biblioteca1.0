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

    <title>Escritores</title>
</head>
<body>
    <div class="container">
        <h4>Gestion de Escritores</h4>
        <div class="row">
            <div class="col-xl-12">
                <form href="escri.index" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1" >
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>

                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="buscar">
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{'escritores.create'}}" class="btn btn-success">Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELIDO PATERNO</th>
                                <th>APELIDO MATERNO</th>
                            </tr>
                        </thead>

                        <tbody>
                        @if(count($escritores)<=0)
                            <tr>
                                <td colspan="5">SIN RESULRADOS</td>
                            </tr>
                        @else
                        @foreach($escritores as $escritores)
                            <tr>
                                <td>Editar|Eliminar</td>
                                <td>{{$escritores->id_escritor}}</td>
                                <td>{{$escritores->nome}}</td>
                                <td>{{$escritores->ape}}</td>
                                <td>{{$escritores->ame}}</td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
