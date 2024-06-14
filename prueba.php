<?php
	//seccion de includes o librerias

	//seccion de clases

	//seccion funciones
	function familyName($fname) {
	  echo "$fname Es mi familia.<br>";
	  if($fname=="Hege")
	  {
	  	print "Es mi primo favorito"."<br>";
	  }
	}
	

	$txt = "PHP";
	$otraVariable=5;

	echo "I love $txt!";
	echo "<br><br>";
	if($otraVariable>=7){
		echo "<h1>Haz aprobado el curso</h1>";
		//si entro aqui es que esta aprobado
	}
	else
	{
		print "Reprobaste";  #muestra el mensaje reprobado
	}
?>
	<h1>Estoy en la UES</H1>
<?PHP
	echo $otraVariable;
	

	familyName("Jani");
	familyName("Hege");
	familyName("Stale");
	familyName("Kai Jim");
	familyName("Borge");

	include 'pie.php';
?>
