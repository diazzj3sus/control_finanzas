<?php
    include("direccionamientoMenu.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilologin.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/estilomenu.css" media="screen">
    <title>Registro de Entradas</title>
</head>
<body>
    <form method="POST" action="">
        <header >
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <button name="menuBt" type="submit" class="btn btn-lg bg-dark btn_submenunombre">
                            CONTROL FINANZAS
                        </button>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <button name="RegistrarEntradaBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Registrar entrada
                                </button>
                            </li>
                            <li class="nav-item">
                                <button name="RegistrarSalidaBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Registrar salida
                                </button>
                            </li>
                            <li class="nav-item">
                                <button name="VerEntradasBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Ver entradas
                                </button>
                            </li>
                            <li class="nav-item">
                                <button name="VerSalidasBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Ver salidas
                                </button>
                            </li>
                            <li class="nav-item">
                                <button name="VerBalanceBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Mostrar balance
                                </button>
                            </li>
                        </ul>
                    </div>
                    <span class="navbar-text">
                        <?php
                            
                        ?>
                        <button class="btn btn-outline-light" type="submit" name='salirBt'>SALIR</button>
                    </span>
                </div>
            </nav>
        </header>
    </form>
    
    <div class="contenedor_login container d-flex flex-column justify-content-center align-items-center ">
        <form method="POST" action="RegistroEntrada.php?IdUser=<?php echo $_GET['IdUser'];?>" enctype="multipart/form-data">
            <div class="text-center">
                <img src="../img/control_finanzas.jpg" class="rounded imagen" alt="...">
            </div>
            <h1 class="text-center text1">Registro de Entradas</h1>


            <div class="mb-3">
                <label for="IdTipoEntrada" class="form-label" >Tipo de entrada</label>
                <input name="TipoEntrada"  class="form-control" id="IdTipoEntrada" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                <label for="IdMonto" class="form-label" >Monto</label>
                <input name="Monto"  class="form-control" id="IdMonto" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                
                <input type="date"  class="form-control text-center" id="IdFecha" name="Fecha" value="2023-09-09" min="2023-09-09" max="2028-09-09" />
            </div>
 
            <form action="upload.php" method="post" enctype="multipart/form-data">
        Ingresa la factura:
        <input type="file" name="image"/>
        <div><label for="espa" class="form-label"></label></div>
        <div class="text-center">
                <button name="submit" type="submit" class="btn btn-lg btn_enviar">Registrar entrada</button>
            </div> 
    </form>
            <br>
        </form>
    </div>
</body>
</html>