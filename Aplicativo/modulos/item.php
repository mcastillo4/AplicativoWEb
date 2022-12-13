<?php


include('global/conexion.php');


//ES NECESARIO PARA OBTENER TODAS LAS EMPRESAS Y SELECCIONARLAS
$sentencia=$pdo->prepare("SELECT * FROM empresa;");
$sentencia->execute();
$listaFullempresas=$sentencia->fetchAll(PDO::FETCH_ASSOC);


// ES NECESARIO PARA RELACIONAR USUARIOS CON EMPRESAS
$sentencia=$pdo->prepare("SELECT * FROM detalle_usuario;");
$sentencia->execute();
$ListaFullDetalleUsuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);


// ES NECESARIO PARA OBTENER TODOS LOS ITEMS
$sentencia=$pdo->prepare("SELECT * FROM item");
$sentencia->execute();
$listaFullItems=$sentencia->fetchAll(PDO::FETCH_ASSOC);




?>