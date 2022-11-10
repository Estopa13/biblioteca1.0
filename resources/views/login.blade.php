<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>

    <meta charset="utf-8">

    <title> Formulario de Acceso </title>


    <!-- Link hacia el archivo de estilos css -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href={{"resources/css/login.css"}}>

    <style type="text/css">

    </style>

    <script type="text/javascript">

    </script>

</head>

<body >

<div id="contenedor">
    <div id="central">
        <div id="login">
            <div class="titulo">
                Bienvenido
            </div>
            <form id="loginform">
                <p>usuaruo</p>
                <input type="text" name="usuario" placeholder="Usuario" required>
                <p>contraseña</p>
                <input type="password" placeholder="Contraseña" name="password" required>

                <button type="submit" title="Ingresar" name="Ingresar">Login</button>
            </form>
            <div class="pie-form">
                <a href="#">¿Perdiste tu contraseña?</a>
            </div>
        </div>
        <div class="inferior">
            <a href="#">Volver</a>
        </div>
    </div>
</div>

</body>
</html>
