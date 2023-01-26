<?php
class conexion{
    function conectar(){
      
        $host='localhost';
        $usuariodb='root';
        $passwdb='';
        $nombredb='barber_shop';
        
        if (!($link=mysqli_connect($host,$usuariodb,$passwdb)))
        {
        echo "Error conectando a la base de datos.";
        exit();
        }
        if (!mysqli_select_db($link,$nombredb))
        {
        echo "Error seleccionando la base de datos, verifique que el nombre de usuario utilizado este asociado a la base de datos.";
        exit();
        }
        return $link;
        
    }
}



?>