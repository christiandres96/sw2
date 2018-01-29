<?php

<<<<<<< HEAD
=======

// 10 de Octubre del 2014
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
// Model.php
// @brief agrego la clase Model para reducir las lineas de los modelos

class Model {

	public static function exists($modelname){
		$fullpath = self::getFullpath($modelname);
		$found=false;
		if(file_exists($fullpath)){
			$found = true;
		}
		return $found;
	}

	public static function getFullpath($modelname){
		return "core/app/model/".$modelname.".php";
	}

	public static function many($query,$aclass){
		$cnt = 0;
		$array = array();
		while($r = $query->fetch_array()){
			$array[$cnt] = new $aclass;
			$cnt2=1;
			foreach ($r as $key => $v) {
<<<<<<< HEAD
				if($cnt2>0 && $cnt2%2==0){
=======
				if($cnt2>0 && $cnt2%2==0){ 
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
					$array[$cnt]->$key = $v;
				}
				$cnt2++;
			}
			$cnt++;
		}
		return $array;
	}
	//////////////////////////////////
	public static function one($query,$aclass){
		$cnt = 0;
		$found = null;
		$data = new $aclass;
		while($r = $query->fetch_array()){
			$cnt=1;
			foreach ($r as $key => $v) {
<<<<<<< HEAD
				if($cnt>0 && $cnt%2==0){
=======
				if($cnt>0 && $cnt%2==0){ 
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
					$data->$key = $v;
				}
				$cnt++;
			}

			$found = $data;
			break;
		}
		return $found;
	}

}



<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9cde1824f5fd3b370576c4231b49d6b7fa92896f
