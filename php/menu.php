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
                            <li class="nav-item">
                                <button name="RecupCupones" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Cupones
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
        <form method="POST" action="">
            <div class="text-center">
                <img src="../img/control_finanzas.jpg" class="rounded imagen" alt="...">
            </div>

            <h3 class="text-center text1">CONTROL DE FINANZAS</h3>
            <h4 class="text-center text2">MENÚ</h4><br>
            
            <div class="container text-center bg-light">
                <div class="row g-3">
                    <div class="col-6">
                        <button name="RegistrarEntradaBt" type="submit" class="btn btn-lg btn_menu">
                            Registrar entrada
                        </button>
                    </div>

                    <div class="col-6">
                        <button name="RegistrarSalidaBt" type="submit" class="btn btn-lg btn_menu">
                            Registrar salida
                        </button>
                    </div>

                    <div class="col-6">
                        <button name="VerEntradasBt" type="submit" class="btn btn-lg btn_menu">
                            Ver entradas
                        </button>
                    </div>

                    <div class="col-6">
                        <button name="VerSalidasBt" type="submit" class="btn btn-lg btn_menu">
                            Ver salidas
                        </button>
                    </div>
                    
                    <div class="col-12">
                        <button name="VerBalanceBt" type="submit" class="btn btn-lg btn_menu">
                            Mostrar balance
                        </button>
                    </div>
                </div>
            </div>
            <br>
        </form>
    </div>
</body>
</html>