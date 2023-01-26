<?php

	$user=$_POST['usuario'];
	$pass= $_POST['pass'];

	require("conexion.php");
	$cnn=new conexion();
	$db=$cnn->conectar();
	$result=$db->query("SELECT * FROM usuarios WHERE usuario='$user'");
	var_dump($result);die;
		if($pass){
			if($result>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el usuario colocado, verifique sus datos");</script> ';
					echo "<script>location.href='../registro.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$user','$user','$user@gmail.com','$pass')");

				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='../index.php'</script>";	
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>