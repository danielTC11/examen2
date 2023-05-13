<?php
			// Establecer la conexión con la base de datos
			$servername = "localhost";
			$username = "tu_usuario";
			$password = "tu_contraseña";
			$dbname = "Eval02";
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Verificar la conexión
			if ($conn->connect_error) {
			  die("Conexión fallida: " . $conn->connect_error);
			}
			// Obtener los productos de la base de datos
			$sql = "SELECT * FROM Producto";
			if(isset($_GET['buscar']) && !empty($_GET['buscar'])){
				$buscar = $_GET['buscar'];
				$sql .= " WHERE Nombre LIKE '%$buscar%'";
			}
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			  // Mostrar los productos en la tabla
			  while($row = $result->fetch_assoc()) {
			    echo "<tr>";
			    echo