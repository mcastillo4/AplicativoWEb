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



        case "BuscarClienteAsesoria";

        $id_usuario= $_POST['id_usuario'] ;
        $id_detalle1= $_POST['id_usuario'] ;
        $id_empresa = "";
        $id_servicio_servicio ="";
        $id_mensualidad ="";
        $id_asesoria ="";
        $ubicacion ="";
        $profesional ="";
        $id_usuario_detalle ="";
        $detalle_asesoria ="";
        $fecha ="";
        $extra ="";
        $profesional ="";
        $tema ="";
        $duracion ="";
        $id_tipo_servicio ="";
        $nombre_tipo_servicio ="";
        $detalle_tipo_servicio ="";






        foreach($Cliente as $clientes) {
            foreach($clientes as $nombreclientes) {

                
               

                if($nombreclientes['rut_usuario'] == $id_usuario){
                    $id_usuario = $nombreclientes['correo'];
                    $rut_usuario = $nombreclientes['rut_usuario'];
                    $id_usuario_detalle =  $nombreclientes['id_usuario'];

                    foreach($urlClienteDetalleFiltradoPorEmpresa as $id_detalles) {
                        foreach($id_detalles as $id_detalles1) {
            
            
                            if($id_detalles1['id_usuario'] == $id_usuario_detalle ){
                                $id_empresa = $id_detalles1['id_empresa'];


                                foreach($Servicios as $id_servicios) {
                                    foreach($id_servicios as $id_servicio) {
                        
                        
                                        if($id_servicio['id_empresa'] == $id_empresa ){
                                            $id_empresa = $id_servicio['id_empresa'];
                                            $id_servicio_servicio = $id_servicio['id_servicio'];
                                            $id_mensualidad = $id_servicio['id_mensualidad'];



                                            
                                                foreach($DetalleServicios as $id_detalle_servicios) {
                                                    foreach($id_detalle_servicios as $id_detalle_servicio) {
                                            
                                        
                                                        if($id_detalle_servicio['id_servicio'] == $id_servicio_servicio ){
                                                            $id_asesoria = $id_detalle_servicio['id_asesoria'];
                                                            $detalle_asesoria = $id_detalle_servicio['detalle_asesoria'];
                                                            $fecha = $id_detalle_servicio['fecha'];
                                                            $extra = $id_detalle_servicio['extra'];
                                                            $profesional = $id_detalle_servicio['profesional'];
                                                            $tema = $id_detalle_servicio['tema'];
                                                            $ubicacion =  $id_detalle_servicio['ubicacion'];
                                                            $duracion =  $id_detalle_servicio['duracion'];
                                                            $id_tipo_servicio = $id_detalle_servicio['id_tipo_servicio'];
                                                            $id_servicio_servicio =  $id_detalle_servicio['id_servicio'];
                                        


                                                            foreach($Tipo_servicio as $id_tipo_servicios) {
                                                                foreach($id_tipo_servicios as $id_tipos_servicios_1) {
                                                    
                                                    
                                                                    if($id_tipos_servicios_1['id_tipo_servicio'] == $id_tipo_servicio ){
                                                                        
                                                                        $nombre_tipo_servicio = $id_tipos_servicios_1['nombre_tipo_servicio'];
                                                                        $detalle_tipo_servicio = $id_tipos_servicios_1['detalle_tipo_servicio'];
                                                    
                                                                    };
                                                    
                                                                };
                                                            };
                    
                    
                                                           
                                                   

                                                          echo "                                                            <thead>
                                                          <tr> 
                                                         
                                                          <td>  $id_usuario </td>
                                                          <td>  $fecha </td>
                                                          <td>  $profesional </td>
                                                          <td>  $tema </td>
                                                          <th>  $ubicacion </th>
                                                          <td>  $duracion </td>
                                                          <td>  $nombre_tipo_servicio </td>
                                                          <td>Pendiente</td>
                                                        </tr>" ;


                                                        };








                                        };
                            








                            };


                };





        




                       









                                      
                                



                                        











                        
                                    };
                                };











                
                            };
                        };








                    };




                };




                




        








            };
        };









        










    








        break;













    }

} 











?>