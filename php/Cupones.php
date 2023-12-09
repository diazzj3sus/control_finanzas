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
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
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
                            
                            /*echo $_SESSION['nombre'];*/
                        ?>
                        <button class="btn btn-outline-light" type="submit" name='salirBt'>SALIR</button>
                    </span>
                </div>
            </nav>
        </header>
    </form>

    <div class="contenedor container d-flex flex-column justify-content-center align-items-center ">
        <br><h2 class="text-center text1">CUPONES</h2><br>
        <br>
        <table class="table table-dark table-striped">
            <tr>
                <td>DESCRIPCION</td>
                <td>MONTO REBAJA</td>
                <td>FECHA INICIO</td>
                <td>FECHA FINAL</td>
            </tr>
            <?php
                include ("RecupCupones.php");
            ?>
        </table>

        <div class="contenedor">



        <br><h2 class="text-center text1"></h2><br>
        <br><h2 class="text-center text1">Apartado de pago</h2><br>



		<!-- Formulario -->
		<form action="" id="formulario-tarjeta" class="formulario-tarjeta">
			<div class="grupo">
				<label for="inputNumero">Número Tarjeta</label>
				<input type="text" id="inputNumero" maxlength="19" autocomplete="off">
			</div>
			<div class="grupo">
				<label for="inputNombre">Nombre</label>
				<input type="text" id="inputNombre" maxlength="19" autocomplete="off">
			</div>
			<div class="flexbox">
				<div class="grupo expira">
					<label for="selectMes">Expiracion</label>
					<div class="flexbox">
						<div class="grupo-select">
							<select name="mes" id="selectMes">
								<option disabled selected>Mes</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="grupo-select">
							<select name="year" id="selectYear">
								<option disabled selected>Año</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
					</div>
				</div>

				<div class="grupo ccv">
					<label for="inputCCV">CCV</label>
					<input type="text" id="inputCCV" maxlength="3">
				</div>
			</div>
			<button type="submit" class="btn-enviar">Enviar</button>
		</form>
	</div>

	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
        
    </div>
</body>
</html>