<?php



if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case "guardarCliente";

        
        $nombre= $_POST['nombre'] ;
        $apellido_p=  $_POST['apellido_p'] ;
        $apellido_m= $_POST['apellido_m'];
        $fecha_nacimiento=  $_POST['fecha_nacimiento'] ;
        $id_estado=  $_POST['id_estado'] ;
        $correo= $_POST['correo'] ;
        $telefono= $_POST['telefono'] ;
        $contrasena=  $_POST['contrasena'] ;
        $id_direccion=  $_POST['id_direccion'] ;
        $rut_usuario= $_POST['rut_usuario'] ;
        $id_especialidad= $_POST['id_especialidad'] ;
        $id_rol= $_POST['id_rol'] ;
        $imagen= $_POST['imagen'] ;


        foreach($estados as $estado){
            foreach($estado as $nombrestado){

                if($nombrestado['nombre_estado'] == $id_estado){
                    $id_estado = $nombrestado['id_estado'];
                };

            };
        };


        
        foreach($Rol as $roles){
            foreach($roles as $nombreroles){

                if($nombreroles['nombre_rol'] == $id_rol){
                    $id_rol = $nombreroles['id_rol'];
                };

            };
        };


        foreach($Especialidad as $especialidades){
            foreach($especialidades as $nombrespecialidades){

                if($nombrespecialidades['nombre_especialidad'] == $id_especialidad){
                    $id_especialidad = $nombrespecialidades['id_especialidad'];
                };

            };
        };


        foreach($Direccion as $direcciones){
            foreach($direcciones as $calledirecciones){

                if($calledirecciones['calle'] == $id_direccion){
                    $id_direccion = $calledirecciones['id_direccion'];
                };

            };
        };




        $jsonCliente=  [
            'nombre' => $nombre,
            'apellido_p' => $apellido_p,
            'apellido_m' => $apellido_m,
            'fecha_nacimiento' => $fecha_nacimiento,
            'id_estado' => $id_estado,
            'correo' => $correo,
            'telefono' =>  $telefono,
            'contrasena' => $contrasena,
            'id_direccion' => $id_direccion,
            'rut_usuario' =>  $rut_usuario,
            'id_especialidad' => $id_especialidad,
            'id_rol' => $id_rol,
            'imagen' =>  $imagen
        ] ; 

        

        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:9000/api/portafolio/add/usuario',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode($jsonCliente),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));


      
        $response = curl_exec($curl);
        
        curl_close($curl);
        


       





        break;



        case "BuscarCliente";

        $id_usuario= $_POST['id_usuario'] ;


        foreach($Cliente as $clientes) {
            foreach($clientes as $nombreclientes) {


                if($nombreclientes['rut_usuario'] == $id_usuario){
                    $id_usuario = $nombreclientes['correo'];
                };



            };
        };


        $urlClienteFiltrado = "http://localhost:9000/api/portafolio/all/usuario/";

        $ClienteFiltrado = json_decode(file_get_contents($urlClienteFiltrado.$id_usuario), true );

        

        break;



        case "modificarCliente";

        $id_cliente= $_POST['id_cliente'] ;
        $nombre= $_POST['nombre'] ;
        $apellido_p=  $_POST['apellido_p'] ;
        $apellido_m= $_POST['apellido_m'];
        $fecha_nacimiento=  $_POST['fecha_nacimiento'] ;
        $id_estado=  $_POST['id_estado'] ;
        $correo= $_POST['correo'] ;
        $telefono= $_POST['telefono'] ;
        $contrasena=  $_POST['contrasena'] ;
        $id_direccion=  $_POST['id_direccion'] ;
        $rut_usuario= $_POST['rut_usuario'] ;
        $id_especialidad= $_POST['id_especialidad'] ;
        $id_rol= $_POST['id_rol'] ;
        $imagen= $_POST['imagen'] ;





        foreach($estados as $estado){
            foreach($estado as $nombrestado){

                if($nombrestado['nombre_estado'] == $id_estado){
                    $id_estado = $nombrestado['id_estado'];
                };

            };
        };


        
        foreach($Rol as $roles){
            foreach($roles as $nombreroles){

                if($nombreroles['nombre_rol'] == $id_rol){
                    $id_rol = $nombreroles['id_rol'];
                };

            };
        };


        foreach($Especialidad as $especialidades){
            foreach($especialidades as $nombrespecialidades){

                if($nombrespecialidades['nombre_especialidad'] == $id_especialidad){
                    $id_especialidad = $nombrespecialidades['id_especialidad'];
                };

            };
        };


        foreach($Direccion as $direcciones){
            foreach($direcciones as $calledirecciones){

                if($calledirecciones['id_direccion'] == $id_direccion){
                    $id_direccion = $calledirecciones['id_direccion'];
                };

            };
        };




        $jsonCliente=  [
            'nombre' => $nombre,
            'apellido_p' => $apellido_p,
            'apellido_m' => $apellido_m,
            'fecha_nacimiento' => $fecha_nacimiento,
            'id_estado' => $id_estado,
            'correo' => $correo,
            'telefono' =>  $telefono,
            'contrasena' => $contrasena,
            'id_direccion' => $id_direccion,
            'rut_usuario' =>  $rut_usuario,
            'id_especialidad' => $id_especialidad,
            'id_rol' => $id_rol,
            'imagen' =>  $imagen
        ] ; 


       


        $urlClienteFiltrado = "http://localhost:9000/api/portafolio/usuario/";

        $urlClienteModificar = $urlClienteFiltrado.$id_cliente;

      





            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $urlClienteModificar,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS =>json_encode($jsonCliente),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);







        $mensajeexito="EXITO";



        
        break;



















        
        case "guardarDireccion";

        
        $nombre_pais= $_POST['id_pais'] ;
        $nombre_ciudad=  $_POST['id_ciudad'] ;
        $nombre_region= $_POST['id_region'];
        $nombre_comuna=  $_POST['id_comuna'] ;
        $numero=  $_POST['numero'] ;
        $calle=  $_POST['calle'] ;
        $observacion= $_POST['observacion'] ;


        foreach($Paises as $pais){
            foreach($pais as $nombrepais){

                if($nombrepais['nombre_pais'] == $nombre_pais){
                    $nombre_pais = $nombrepais['id_pais'];
                };

            };
        };


        
        foreach($Regiones as $region){
            foreach($region as $nombreregion){

                if($nombreregion['nombre_region'] == $nombre_region){
                    $nombre_region = $nombreregion['id_region'];
                };

            };
        };



        foreach($Ciudades as $ciudad){
            foreach($ciudad as $nombreciudad){

                if($nombreciudad['nombre_ciudad'] == $nombre_ciudad){
                    $nombre_ciudad = $nombreciudad['id_ciudad'];
                };

            };
        };




        foreach($Comunas as $comuna){
            foreach($comuna as $nombrecomuna){

                if($nombrecomuna['nombre_comuna'] == $nombre_comuna){
                    $nombre_comuna = $nombrecomuna['id_comuna'];
                };

            };
        };




        $jsonCliente=  [

            'calle' => $calle,
            'numero' => $numero,
            'id_comuna' => $nombre_comuna,
            'id_pais' =>  $nombre_pais,
            'id_ciudad' => $nombre_ciudad,
            'id_region' => $nombre_region,
            'observaciones' => $observacion,

        ] ; 

        

        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:9000/api/portafolio/add/direccion',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode($jsonCliente),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));


      
        $response = curl_exec($curl);
        
        curl_close($curl);
        


       





        break;















          
        case "AgregarContrato";

        
        $imagen= $_POST['imagen'] ;
        $id_estado=  $_POST['id_estado'] ;
        $fecha_contrato= $_POST['fecha_contrato'];



        foreach($estados as $estado){
            foreach($estado as $nombrestado){

                if($nombrestado['nombre_estado'] == $id_estado){
                    $id_estado = $nombrestado['id_estado'];
                };

            };
        };


        


        $jsonCliente=  [

            'id_estado' => $id_estado,
            'fecha_contrato' => $fecha_contrato,
            'imagen' => $imagen,

        ] ; 

        

        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:9000/api/portafolio/add/contrato',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode($jsonCliente),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));


      
        $response = curl_exec($curl);
        
        curl_close($curl);
        


       





        break;







        case "AgregarServicios";

        
        $nombre_empresa= $_POST['nombre_empresa'] ;
        $id_mensualidad=  $_POST['id_mensualidad'] ;




        foreach($Empresas as $empresa){
            foreach($empresa as $nombreempresa){

                if($nombreempresa['nombre_empresa'] == $nombre_empresa){
                    $nombre_empresa = $nombreempresa['id_empresa'];
                };

            };
        };


        foreach($Mensualidad as $mensualidad){
            foreach($mensualidad as $id_mensualidades){

                if($id_mensualidades['id_mensualidad'] == $id_mensualidad){
                    $id_mensualidad = $id_mensualidades['id_mensualidad'];
                };

            };
        };


        


        $jsonCliente=  [

            'id_mensualidad' => $id_mensualidad,
            'id_empresa' => $nombre_empresa,
        

        ] ; 

        

        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:9000/api/portafolio/add/servicio',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode($jsonCliente),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));


      
        $response = curl_exec($curl);
        
        curl_close($curl);
        


       





        break;











        case "AgregarDetalleServicios";

        
        $detalle= $_POST['detalle_asesoria'] ;
        $fecha=  $_POST['fecha'] ;
        $extra= $_POST['extra'] ;
        $profesional= $_POST['profesional'] ;
        $tema= $_POST['tema'] ;
        $ubicacion= $_POST['ubicacion'] ;
        $duracion= $_POST['duracion'] ;
        $tipo_servicio= $_POST['id_tipo_servicio'] ;
        $servicios= $_POST['id_servicio'] ;




        foreach($Tipo_servicio as $tipo_servicio_servicios){
            foreach($tipo_servicio_servicios as $nombredetalleservicio){

                if($nombredetalleservicio['nombre_tipo_servicio'] = $tipo_servicio){
                    $tipo_servicio = $nombredetalleservicio['id_tipo_servicio'];
                };

            };
        };




        


        $jsonCliente=  [

            'detalle_asesoria' => $detalle,
            'fecha' => $fecha,
            'extra' => $extra,
            'profesional' => $profesional,
            'tema' => $tema,
            'ubicacion' => $ubicacion,
            'duracion' => $duracion,
            'id_tipo_servicio' => $tipo_servicio,
            'id_servicio' => $servicios,
        

        ] ; 

        

        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:9000/api/portafolio/add/detalle-servicio',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode($jsonCliente),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));


      
        $response = curl_exec($curl);
        
        curl_close($curl);
        


       





        break;










        case "AgregarEmpresa";

        
        $nombreempresa= $_POST['nombre_empresa'] ;
        $rut_empresa=  $_POST['rut_empresa'] ;
        $contrato= $_POST['contrato'] ;
        $nombrerubro= $_POST['rubro'] ;




        foreach($Rubros as $rubros){
            foreach($rubros as $nombrerubros){

                if($nombrerubros['nombre_rubro'] = $nombrerubro){
                    $nombrerubro = $nombrerubros['id_rubro'];
                };

            };
        };





        


        $jsonCliente=  [

            'nombre_empresa' => $nombreempresa,
            'rut_empresa' => $rut_empresa,
            'id_rubro' => $nombrerubro,
            'id_contrato' => $contrato,

        

        ] ; 

        

        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:9000/api/portafolio/add/empresa',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode($jsonCliente),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));


      
        $response = curl_exec($curl);
        
        curl_close($curl);
        


       





        break;










        

        

        $ClienteFiltrado = json_decode(file_get_contents($urlClienteFiltrado), true );
        





    }

   

} 


$urlClienteFiltrado1 = "http://localhost:9000/api/portafolio/all/usuario/";

        

$ClienteFiltrado1 = json_decode(file_get_contents($urlClienteFiltrado1), true );














        

















?>