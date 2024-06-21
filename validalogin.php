<?php
session_start();
include 'conexionBD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $pass = isset($_POST["pwd"]) ? $_POST["pwd"] : "";

	if (empty($email) || empty($pass)) {
		$_SESSION["error"] = "El correo y la contraseña son requeridos";
		$_SESSION["email"] = $email; // Save the email even if there are errors
		$_SESSION["pwd"] = $pass; // Optionally save the password
		header("Location: login.php");
		exit();
	} else {
		$_SESSION["email"] = $email; // Save the email
	}
	
    $stmt = $conn->prepare("SELECT idK, userName FROM usuarios WHERE correo=? AND password=?");
    $stmt->bind_param("ss", $email, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["autenticado"] = 1;
        $_SESSION["username"] = $row['userName'];
        $_SESSION['id'] = $row['idK'];
        header("Location: principal.php");
    } else {
        $_SESSION["error"] = "Error en usuario o contraseña";
        header("Location: login.php");
    }
    $stmt->close();
    $conn->close();
} else {
    echo "No se recibieron datos";
    echo "<a href='login.php'> regresar </a>";
}
?>
