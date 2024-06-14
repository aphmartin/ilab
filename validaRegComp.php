<?php
	session_start();
	include 'conexionBD.php';

	$nomComp="";
	$nomAula="";
	$caracteristicas = "";
	$nameErr="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if (empty($_POST["nombre"])) 
  		{
		    	$nameErr = "Ingrese el nombre de la computadora";
		} 
		else 
		{
		    	$nomComp = $_POST["nombre"];
		}

		if (empty($_POST["aulas"])) 
  		{
		    	$nameErr = "Seleccione una computadora";
		} 
		else 
		{
		    	$nomAula = $_POST["aulas"];
		}

		if (empty($_POST["textarea"])) 
  		{
		    	$nameErr = "Ingrese los detalles del aula";
		} 
		else 
		{
		    	$caracteristicas = $_POST["textarea"];
		}

		

			$sql = "INSERT INTO `computadora`(`nombre`,`aula`, `caracteristicas`, `isActivo`) VALUES ('$nomComp','$nomAula','$caracteristicas','1')";
			//echo $sql;
			$result = $conn->query($sql);
			echo $result;
			$conn->close();
			header("Location: catcomputadoras.php");

	}
	else
	{
		echo "No hay datos";
		echo "<a href='login.php'> regresar </a>";
	}

?>
