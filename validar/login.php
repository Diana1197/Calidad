<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
include "conexion.php";
$user_id=null;
$cnn=new conexion();
$db=$cnn->conectar();
$result=$db->query("select * from usuarios where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" limit 1 ");
foreach($result as $r){
	$user_id=$r["id"];
}
			if($user_id==null){
				print "<script>alert(\"Usuario/Contraseña Incorrecta\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../barber_shop.php';</script>";				
			}
		}
	}
}



?>