<?php
	session_start();
	include 'conexionBD.php';

	$userN="";
	$nom="";
	$apell="";
	$email="";
	$pswd="";
	$sexo="";
	$isAct="";
	$nameErr="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if (empty($_POST["userName"])) 
  		{
		    	$nameErr = "Ingrese el username a registrar";
		} 
		else 
		{
		    	$userN = $_POST["userName"];
		}

		if (empty($_POST["nombre"])) 
  		{
		    	$nameErr = "Ingrese el nombre del usuario";
		} 
		else 
		{
		    	$nom = $_POST["nombre"];
		}
		
		if (empty($_POST["apellido"])) 
  		{
		    	$nameErr = "Ingrese el apellido del usuario";
		} 
		else 
		{
		    	$apell = $_POST["apellido"];
		}

		if (empty($_POST["email"])) 
  		{
		    	$nameErr = "Ingrese el correo electronico del usuario";
		} 
		else 
		{
		    	$email = $_POST["email"];
		}

		if (empty($_POST["pswd"])) 
  		{
		    	$nameErr = "Ingrese la contraseña que se usara para su cuenta";
		} 
		else 
		{
		    	$pswd = $_POST["pswd"];
		}

		if (empty($_POST["sexo"])) 
  		{
		    	$nameErr = "Seleccione una opciona";
		} 
		else 
		{
		    	$nomAula = $_POST["aulas"];
		}

		if(isset($_POST['isActivo'])) {
			$isAct = "1";
		}else{
			$isAct = "0";
		}
		

			$sql = "INSERT INTO `usuarios`(`userName`,`password`,`correo`,`nombre`,`apellidos`,`sexo`,`isActivo`) VALUES ('$userN','$pswd','$email','$nom','$apell','$sexo','$isAct')";
			//echo $sql;
			$result = $conn->query($sql);
			echo $result;
			$conn->close();
			header("Location: catusuarios.php");

	}
	else
	{
		echo "No hay datos";
		echo "<a href='login.php'> regresar </a>";
	}

?>
