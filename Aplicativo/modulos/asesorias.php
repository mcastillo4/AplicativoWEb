<?php


include('global/conexion.php');





//ES NECESARIO PARA OBTENER TODAS LAS EMPRESAS Y SELECCIONARLAS
$sentencia=$pdo->prepare("SELECT * FROM empresa;");
$sentencia->execute();
$listaFullempresas=$sentencia->fetchAll(PDO::FETCH_ASSOC);


// ES NECESARIO PARA RELACIONAR USUARIOS CON EMPRESA
$sentencia=$pdo->prepare("SELECT * FROM detalle_usuario;");
$sentencia->execute();
$ListaFullDetalleUsuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);


// ES NECESARIO PARA OBTENER TODAS LAS ASESORIAS
$sentencia=$pdo->prepare("SELECT * FROM asesoria");
$sentencia->execute();
$listaFullAsesorias=$sentencia->fetchAll(PDO::FETCH_ASSOC);

// ES NECESARIO PARA OBTENER TODAS LAS CAPACITACIONES
$sentencia=$pdo->prepare("SELECT * FROM capacitacion");
$sentencia->execute();
$listaFullCapacitacion=$sentencia->fetchAll(PDO::FETCH_ASSOC);




if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case "entregado";

        $idventa=$_POST['id'];


        $sentencia=$pdo->prepare("UPDATE `tblventas` SET `status` = 'entregado' WHERE `tblventas`.`ID` = :idventa");
        $sentencia->bindParam(":idventa",$idventa);
        $sentencia->execute();

                


        break;

    }

} 












?>