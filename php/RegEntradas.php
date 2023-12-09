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
    <link rel="stylesheet" type="text/css" href="../css/estiloentsal.css" media="screen">
    <title>Document</title>
</head>
<body >
    
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
                            
                            /*echo $_SESSION['nombre'];*/
                        ?>
                        <button class="btn btn-outline-light" type="submit" name='salirBt'>SALIR</button>
                    </span>
                </div>
            </nav>
        </header>
    </form>

    <div class="contenedor container d-flex flex-column justify-content-center align-items-center ">
        <br><h2 class="text-center text1">REGISTROS DE ENTRADAS</h2><br>
        <br>
        <table class="table table-dark table-striped">
            <tr>
                <td>TIPO ENTRADA</td>
                <td>MONTO</td>
                <td>FECHA REGISTRO</td>
                <td>FACTURA</td>
            </tr>
            <?php
                include ("recuperaEntradas.php");
            ?>
        </table>
        
    </div>
</body>
</html>