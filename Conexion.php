<?php
		$conn=mysql_connect("localhost","terracl","Tat#mhwgfUJ^"); // ESTABLECER CONEXION
		if(!$conn){
			die("error al conectarse al motor");
		}
		$mibase = mysql_select_db("terracl_bd",$conn); //SELECCION BD
		if(!$mibase){
			die("error al selecionar la base de datos");
		}
?>