<?php

session_start();



if(isset($_POST["btnLogin"])){


    $txtEmail=($_POST['txtEmail']);
    $txtPassword=($_POST['txtPassword']);


    $data = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/usuario/"), true );


    foreach($data as $usuarios){
        foreach($usuarios as $valores){

            if($valores["correo"] == $txtEmail and $valores["contrasena"] == $txtPassword){

            $numeroRegistros = 1 ;

            $url = "http://localhost:9000/api/portafolio/all/usuario/".$txtEmail;

            $datas = json_decode(file_get_contents($url), true );


            var_dump($datas["data"]["id_rol"]);



            if($numeroRegistros>=1){


                
                $_SESSION['usuario']=$datas;
        
               //UTILIZAR VARIABLE REGISTRO PARA SEGMENTAR.
                if($datas["data"]["id_rol"]== "336CBD33-DA18-4DA6-AFD5-435329E85980"){ 
                 header('Location:Vistapaneladministrativo.php');
                //echo('<pre>');    
                //var_dump($registro);
               //echo('<pre>'); 
                
                }
                if($datas["data"]["id_rol"] == "F6637290-69A5-4213-A0CD-13554DC668B2"){ 
                 header('Location:Vistapanelprofesional.php');}
                if($datas["data"]["id_rol"] == "83CAB109-0591-4D3C-86F8-D4033CAAEDCC"){ 
                header('Location:VistapanelCliente.php');}
        
               //header('Location:VistapanelCliente.php');
        
            }
        
            else{
        
                echo "No se encontraron registros...";
        
            }
            






            }
            else{

                print_r("No se encuentra registros") ;
            }


        }
    }

    


   






}




?>