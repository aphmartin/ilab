<?php
	session_start();
	include 'conexionBD.php';

	$nomAula="";
	$nameErr="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if (empty($_POST["nombre"])) 
  		{
		    	$nameErr = "Ingrese el nombre del aula";
		} 
		else 
		{
		    	$nomAula = $_POST["nombre"];
		}

		//echo "Si llegan los datos";
		///echo "<br>".$email;
		//echo "<br>".$pass;
		if(strlen($nomAula)<1)
		{
			echo "nombre del aula esta en blanco";
		}
		else
		{

			$sql = "INSERT INTO `aulas`(`nombre`, `isActivo`) VALUES ('$nomAula','1')";
			//echo $sql;
			$result = $conn->query($sql);
			$conn->close();
			header("Location: cataulas.php");
		}
	}
	else
	{
		echo "No hay datos";
		echo "<a href='login.php'> regresar </a>";
	}

?>
