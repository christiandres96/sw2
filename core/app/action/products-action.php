<?php
//Script para manejar la tabla de productos

//Script para añadir un nuevo producto
if(isset($_GET["opt"]) && $_GET["opt"]!=""){
	$opt = $_GET["opt"];
	if($opt=="add"){
		$op = new ProductData();
		$op->name = $_POST["name"];
		$op->code = $_POST["code"];
		$op->description = $_POST["description"];
		$op->price = $_POST["price"];
		$op->add();
		Core::redir("./");
	}
	//Actualizar producto
	else if($opt=="update"){
		$op = ProductData::getById($_POST["id"]);
		$op->name = $_POST["name"];
		$op->code = $_POST["code"];
		$op->description = $_POST["description"];
		$op->price = $_POST["price"];
		$op->update();
		Core::redir("./");
	}
	//Añadir producto
	else if($opt=="addin"){
		$op = new OperationData();
		$op->product_id = $_POST["product_id"];
		$op->q = $_POST["q"];
		$op->kind = 1;
		$op->add();
		Core::redir("./");
	}
	//Añadir producto
	else if($opt=="addout"){
		$op = new OperationData();
		$op->product_id = $_POST["product_id"];
		$op->q = $_POST["q"];
		$op->kind = 2;
		$op->add();
		Core::redir("./");
	}
	
	//Eliminar producto
	else if($opt=="del"){
		$op = ProductData::getById($_GET["id"]);
		$op->del();
		Core::redir("./");
	}

}




?>
