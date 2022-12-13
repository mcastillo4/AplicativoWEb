<?php


include('global/conexion.php');




$sentencia=$pdo->prepare("SELECT * FROM `usuario`");
$sentencia->execute();
$listaClientes=$sentencia->fetchAll(PDO::FETCH_ASSOC);



if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case "guardarProfesional";

        
        $nombre= $_POST['nombre'] ;

        

        $sentencia=$pdo->prepare("INSERT INTO `profesional` (`id`, `nombre`) VALUES(NULL, :nombre); ");
       
        $sentencia->bindParam(":nombre",$nombre);

       

        $sentencia->execute();




        break;



        case "modificarProfesional";

        $id=  $_POST['id'] ;
        $nombre= $_POST['nombre'] ;
     



        

        
        $sentencia=$pdo->prepare("UPDATE `profesional` SET `nombre` = :nombre  WHERE `profesional`.`id` = :id; ");
        $sentencia->bindParam(":id",$id);
        $sentencia->bindParam(":nombre",$nombre);
        
       
       
       

        $sentencia->execute();

        $mensajeexito="EXITO";

        header('Location:VistaMantenedorProfesional.php');

        break;

    }

} 




?>