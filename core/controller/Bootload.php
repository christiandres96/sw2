<?php

<<<<<<< HEAD
=======

// 10 de Octubre del 2014
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
// Bootload.php
// @brief esta clase sirve para alistar los boot

class Bootload {
	/**
	* @function load
	* @brief la funcion load carga un boot correspondiente a un modulo
<<<<<<< HEAD
	**/
=======
	**/	
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
	public static function load($view){
		// Module::$module;
		if(!isset($_GET['view'])){
			include "core/modules/".Module::$module."/boot/".$view."/boot-default.php";
		}else{


			if(self::isValid()){
				$fullpath = "core/modules/".Module::$module."/boot/".$_GET['view']."/boot-default.php";
<<<<<<< HEAD
				include $fullpath;
=======
				include $fullpath;				
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
			}else{
				self::Error("<b>404 NOT FOUND</b> Boot <b>".$_GET['view']."</b> folder  !!");
			}

		}
	}

	/**
	* @function isValid
	* @brief valida la existencia de una vista
<<<<<<< HEAD
	**/
=======
	**/	
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
	public static function isValid(){
		$valid=false;
		if(file_exists($file = "core/modules/".Module::$module."/boot/".$_GET['view']."/boot-default.php")){
			$valid = true;
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}

}




<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
