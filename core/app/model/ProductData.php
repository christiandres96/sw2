<?php //Datos acerca del producto
class ProductData {
	public static $tablename = "product";

	public function __construct(){
		$this->created_at = "NOW()";
	}
	//Funcion añadir producto
	public function add(){
		$sql = "insert into ".self::$tablename." (name,description,code,price,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->description\",\"$this->code\",\"$this->price\",$this->created_at)";
		Executor::doit($sql);
	}
	//Funcion elminar
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}
	//Funcion eliminar con alguna condicion
	public static function delBy($k,$v){
		$sql = "delete from ".self::$tablename." where $k=\"$v\"";
		Executor::doit($sql);
	}
	//Funcion actualizar producto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",description=\"$this->description\",code=\"$this->code\",price=\"$this->price\" where id=$this->id";
		Executor::doit($sql);
	}
	//Funcion actualizar por condicion
	public function updateById($k,$v){
		$sql = "update ".self::$tablename." set $k=\"$v\" where id=$this->id";
		Executor::doit($sql);
	}
        //Funcion consulta por condicion
	public static function getById($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ProductData());
	}

	public static function getBy($k,$v){
		$sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ProductData());
	}
	//Funcion obtener todos los productos
	public static function getAll(){
		 $sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}
	//Consulta por producto
	public static function getAllByKind($k){
		 $sql = "select * from ".self::$tablename." where kind=$k order by date_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}
	//Consulta por fecha
	public static function getAllByKindDate($d,$k){
		 $sql = "select * from ".self::$tablename." where kind=$k and date_at=\"$d\" order by date_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function getSumByKindDate($d,$k){
		$sql = "select sum(amount) as t from ".self::$tablename." where kind=$k and date_at=\"$d\" order by date_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function getAllBy($k,$v){
		 $sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


}

?>
