<?php 
	
#Prueba 1
	/*
	class conectar
	{
		protected  $dbh;
		protected  function conexion()
		{
			try {
				$conectar=$this->dbh= new PDO("mysql:local=localhost;dbname=sisweb","root","");
				return $conectar;
			} catch (Exception $e) {
				print "error BD! ".$e->getMessage()."<br/>";
				die();		
			}
		}
		public  function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
		}
		public static function ruta(){
			return "http://127.0.0.1/multiservicios/";
		}

	}*/

#Prueba 2
	$dbHost = 'localhost';
	$dbName = 'sisweb';
	$dbUser = 'root';
	$dbPass = '';

	try {
	    // Establecer la conexión utilizando PDO
	    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

	    // Configurar el modo de error de PDO para mostrar excepciones en caso de fallos
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e) {
	    // En caso de fallo en la conexión, mostrar un mensaje de error
	    echo 'Error al conectar a la base de datos: ' . $e->getMessage();
	    exit();
	}

 ?>