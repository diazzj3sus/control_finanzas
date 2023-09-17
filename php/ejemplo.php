<form action="guardar_imagen.php" method="post" enctype="multipart/form-data">
    <input type="file" name="imagen" accept="image/*">
    <input type="submit" value="Subir Imagen">
</form>

<?php
// Conexión a la base de datos MySQL
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Procesamiento de la imagen
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $nombre_imagen = $_FILES['imagen']['name'];
    $ruta_temporal = $_FILES['imagen']['tmp_name'];
    $ruta_destino = "ruta/donde/quieres/guardar/" . $nombre_imagen;

    // Mueve la imagen desde la ruta temporal a la ruta de destino
    if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
        // Inserta la ruta de la imagen en la base de datos
        $sql = "INSERT INTO imagenes (ruta) VALUES ('$ruta_destino')";
        if ($conn->query($sql) === TRUE) {
            echo "La imagen se ha subido y guardado en la base de datos correctamente.";
        } else {
            echo "Error al guardar la ruta de la imagen en la base de datos: " . $conn->error;
        }
    } else {
        echo "Error al mover la imagen al servidor.";
    }
} else {
    echo "Se produjo un error al subir la imagen.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>