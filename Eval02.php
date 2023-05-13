<?php
//Conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";

$conn = new mysqli($servername, $username, $password);

//Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

//Crear la base de datos "Eval02"
$sql = "CREATE DATABASE Eval02";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada exitosamente";
} else {
  echo "Error al crear la base de datos: " . $conn->error;
}

//Seleccionar la base de datos "Eval02"
mysqli_select_db($conn, "Eval02");

//Crear la tabla "Producto"
$sql = "CREATE TABLE Producto (
IdProducto INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nombre VARCHAR(80) NOT NULL,
Descripcion VARCHAR(250),
Stock INT(6) NOT NULL,
PrecioVenta DECIMAL(10,2)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla Producto creada exitosamente";
} else {
  echo "Error al crear la tabla Producto: " . $conn->error;
}

//Cerrar la conexión
$conn->close();
?>