<?php

session_start();



if(isset($_POST["btnLogin"])){

    include("global/conexion.php");

    $txtEmail=($_POST['txtEmail']);
    $txtPassword=($_POST['txtPassword']);


    $sentanciaSQL=$pdo->prepare("SELECT * FROM usuario WHERE correo=:correo AND contrasena=:contrasena");


    $sentanciaSQL->bindParam("correo",$txtEmail, PDO::PARAM_STR);
    $sentanciaSQL->bindParam("contrasena",$txtPassword,  PDO::PARAM_STR);

    $sentanciaSQL->execute();


    $registro=$sentanciaSQL->fetch(PDO::FETCH_ASSOC);



   

    $numeroRegistros=$sentanciaSQL->rowCount();


    if($numeroRegistros>=1){

        
        $_SESSION['usuario']=$registro;

       //UTILIZAR VARIABLE REGISTRO PARA SEGMENTAR.
        if($registro["id_rol"] == "1"){ 
         header('Location:Vistapaneladministrativo.php');
        //echo('<pre>');    
        //var_dump($registro);
       //echo('<pre>'); 
        
        }
        if($registro["id_rol"] == "2"){ 
         header('Location:Vistapanelprofesional.php');}
        if($registro["id_rol"] == "3"){ 
        header('Location:VistapanelCliente.php');}

       //header('Location:VistapanelCliente.php');

    }

    else{

        echo "No se encontraron registros...";

    }


  
}








?>