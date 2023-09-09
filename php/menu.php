<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilologin.css" media="screen">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <div class="contenedor_login container d-flex flex-column justify-content-center align-items-center ">
        <form method="POST" action="">
            <div class="text-center">
                <img src="../img/control_finanzas.jpg" class="rounded imagen" alt="...">
            </div>
            
            

            <div class="text-center">
            
                <button name="RegistrarEntradaBt" type="submit" class="btn btn-lg btn_enviar">Registrar entrada</button>
                
            </div>  
           
            <div class="text-center">
                <button name="RegistrarSalidaBt" type="submit" class="btn btn-lg btn_enviar">Registrar salida</button>
            </div> 

            <?php
            $id=($_GET['IdUser']);
            if(isset($_POST["RegistrarEntradaBt"])){
                header("location:PagResitroEntra.php?IdUser='$id'");
            }elseif(isset($_POST["RegistrarSalidaBt"])){
                header("location:PagResitroSalida.php?IdUser='$id'");
            }
            ?>
            <br>
        </form>
    </div>
</body>
</html>