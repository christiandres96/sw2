<?php

<<<<<<< HEAD
=======

// 14 de Abril del 2014
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
// Core.php
// @brief obtiene las configuraciones, muestra y carga los contenidos necesarios.
//Inicia el código
class Core {

	public static $debug_sql = false;

	public static function includeCSS(){
		$path = "res/css/";
		$handle=opendir($path);
		if($handle){
			while (false !== ($entry = readdir($handle)))  {
				if($entry!="." && $entry!=".."){
					$fullpath = $path.$entry;
				if(!is_dir($fullpath)){
						echo "<link rel='stylesheet' type='text/css' href='".$fullpath."' />";

					}
				}
			}
		closedir($handle);
		}

	}

	public static function redir($url){
		echo "<script>window.location='".$url."';</script>";
	}

	public static function includeJS(){
		$path = "res/js/";
		$handle=opendir($path);
		if($handle){
			while (false !== ($entry = readdir($handle)))  {
				if($entry!="." && $entry!=".."){
					$fullpath = $path.$entry;
				if(!is_dir($fullpath)){
						echo "<script type='text/javascript' src='".$fullpath."'></script>";

					}
				}
			}
		closedir($handle);
		}

	}

}



<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
