<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "mi_app_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$name = $_POST['name'];
$age = $_POST['age'];

// Consulta SQL para insertar datos
$sql = "INSERT INTO usuarios (nombre, edad) VALUES ('$name', '$age')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
