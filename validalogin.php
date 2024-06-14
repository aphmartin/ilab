<?php
	session_start();
	include 'conexionBD.php';

	$email="";
	$pass="";
	$nameErr="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
  		if (empty($_POST["email"])) 
  		{
		    	$nameErr = "El correo es requirido";
		} 
		else 
		{
		    	$email = $_POST["email"];
		    
		}
		if (empty($_POST["pwd"])) 
  		{
		    	$nameErr = "La contraseña es requirido";
		} 
		else 
		{
		    	$pass = $_POST["pwd"];
		    
		}

		//echo "Si llegan los datos";
		///echo "<br>".$email;
		//echo "<br>".$pass;
		if(strlen($email)<1)
		{
			echo "el email esta en blannco";
		}
		else
		{

			$sql = "SELECT idk, username FROM usuarios where correo='$email' and password='$pass'";
			//echo $sql;
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "ha sido conectado";
				// Set session variables
				$_SESSION["autenticado"] = 1;
				while($row = $result->fetch_assoc()) {
						$nombre=$row['username'];
    					$id=$row['id'];
  					}
				$_SESSION["username"]=$nombre;
				$_SESSION['id']=$id;
			    header("Location: principal.php");
			} else {
				$_SESSION["autenticado"] = 0;
			  echo "Error en usuario o contraseña";
			}
			$conn->close();
		}
	}
	else
	{
		echo "No hay datos";
		echo "<a href='login.php'> regresar </a>";
	}

?>
