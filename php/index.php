<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilologin.css" media="screen">

    <title>Control Finanzas</title>
</head>
<body>
    <div class="contenedor_login container d-flex flex-column justify-content-center align-items-center ">
        <form method="POST" action="">
            <div class="text-center">
                <img src="../img/control_finanzas.jpg" class="rounded imagen" alt="...">
            </div>
            <h1 class="text-center text1">CONTROL DE FINANZAS</h1>
            <h2 class="text-center text2">Iniciar Sesión</h2><br>
            <?php
                include("login.php");
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Correo electrónico</label>
                <input name="correo" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" >
                <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" >
            </div>
            <button name="entrar" type="submit" class="btn btn-lg btn_enviar">INGRESAR</button>
            <br>
        </form>
    </div>
</body>
</html>