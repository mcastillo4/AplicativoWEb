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



        case "BuscarClienteReporte";

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
        $nombre_xempresa ="";
        $rut_empresa = "";
        $id_rubro = "";
        $id_contrato ="";
        $nombre_estados = "";
        $contador = 0;
        $contadorVisita = 0;
        $contadorCapacitacion = 0;
        $contadorLlamada = 0;
        $contadorAsesoria = 0;
        $contadorAccidente = 0;
        $contador_items  = 0;
        $id_tabla_estado_mensualidad = "";







        foreach($Cliente as $clientes) { // OBTENCION DE VARIABLES USUARIO
            foreach($clientes as $nombreclientes) {

                
               

                if($nombreclientes['rut_usuario'] == $id_usuario){
                    $id_usuario = $nombreclientes['correo'];
                    $rut_usuario = $nombreclientes['rut_usuario'];
                    $id_usuario_detalle =  $nombreclientes['id_usuario'];

                    foreach($urlClienteDetalleFiltradoPorEmpresa as $id_detalles) { //OBTENCION DE VARIABLE DETALLE_USUARIO
                        foreach($id_detalles as $id_detalles1) {
            
            
                            if($id_detalles1['id_usuario'] == $id_usuario_detalle ){
                                $id_empresa = $id_detalles1['id_empresa'];


                                foreach($Servicios as $id_servicios) { // OBTENCION DE VARIABLES SERVICIO
                                    foreach($id_servicios as $id_servicio) {
                        
                        
                                        if($id_servicio['id_empresa'] == $id_empresa ){
                                            $id_empresa = $id_servicio['id_empresa'];
                                            $id_servicio_servicio = $id_servicio['id_servicio'];
                                            $id_mensualidad = $id_servicio['id_mensualidad'];


                                            foreach($Empresas as $empresa) { //OBTENCION DE VARIABLES EMPRESA
                                                foreach($empresa as $nombre_empresa) {

                                                        
                                                
                                                    if($nombre_empresa['id_empresa'] = $id_empresa ){

                                                       
                                                        $nombre_xempresa = $nombre_empresa['nombre_empresa'];
                                                        $rut_empresa = $nombre_empresa['rut_empresa'];
                                                        $id_rubro = $nombre_empresa['id_rubro'];
                                                        $id_contrato = $nombre_empresa['id_contrato'];

                                                    };
            



                                            
                                                foreach($DetalleServicios as $id_detalle_servicios) {  // OBTENCION DE VARIABLES DETALLE_SERVICIOS
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




                




        








            };
        };









        

        foreach($Tipo_servicio as $id_tipo_servicios) { //OBTENCION DE VARIABLES TIPO_SERVICIO
            foreach($id_tipo_servicios as $id_tipos_servicios_1) {


                if($id_tipos_servicios_1['id_tipo_servicio'] == $id_tipo_servicio ){
                    
                    $nombre_tipo_servicio = $id_tipos_servicios_1['nombre_tipo_servicio'];
                    $detalle_tipo_servicio = $id_tipos_servicios_1['detalle_tipo_servicio'];


                    if($id_tipos_servicios_1['id_tipo_servicio']  == "21aa7b2a-8e48-4cbc-b316-19c4b5f3335e"){

                        $contadorLlamada = $contadorLlamada + 1;

                    };

                    if($id_tipos_servicios_1['id_tipo_servicio'] == "9b6e8b54-b6fe-4dd2-b878-1708b920b4fe"){
                        
                        $contadorAsesoria = $contadorAsesoria+ 1;
                    };

                    if($id_tipos_servicios_1['id_tipo_servicio'] == "9ace6685-3105-434a-b3ad-cf53276f44ab")   {
                        
                        $contadorCapacitacion = $contadorCapacitacion + 1;
                    };

                    if($id_tipos_servicios_1['id_tipo_servicio'] == "26983db6-ef8b-4bee-b473-260940a5d06d"){
                      
                        $contadorVisita = $contadorVisita + 1;
                    };

                };

            };



        };















        foreach($Mensualidad as $mensualidad) { //OBTENCION DE VARIABLES TIPO_SERVICIO
            foreach($mensualidad as $mensualidadestado) {


                if($mensualidadestado['id_mensualidad'] = $id_mensualidad ){
                    
                    $id_tabla_mensualidad_mensualidad = $mensualidadestado['id_mensualidad'];
                    $id_tabla_estado_mensualidad = $mensualidadestado['id_estado'];
                    $id_tabla_estado_mensualidad_observacion = $mensualidadestado['observaciones'];

              

                };

            };



        };





        foreach($Estados as $estados_tabla) { //OBTENCION DE VARIABLES DETALLE ESTADOS
            foreach($estados_tabla as $estados_tablas) {


                if($estados_tablas['id_estado'] = $id_tabla_estado_mensualidad ){
                    
                    $id_estados = $estados_tablas['id_estado'];
                    $nombre_estados = $estados_tablas['nombre_estado'];
                    $observaciones_estado = $estados_tablas['observaciones_estado'];

              

                };

            };



        };




        foreach($Item as $items) { //OBTENCION DE VARIABLES ITEM
            foreach($items as $detalle_items) {


                if($detalle_items['id_empresa'] = $id_empresa){
                    
                    $id_item = $detalle_items['id_item'];
                    $nombre_item = $detalle_items['nombre_item'];
                    $descripcion_item = $detalle_items['descripcion_item'];
                    $id_estado_item = $detalle_items["id_estado"];
                    $fecha_agregado_item = $detalle_items["fecha_agregado"];



                    $contador_items = $contador_items + 1 ;
                    
                };
              

                };

            };






            $urlClienteFiltrado = "http://localhost:9000/api/portafolio/all/usuario/";

            $ClienteFiltrado = json_decode(file_get_contents($urlClienteFiltrado.$id_usuario), true );
    

    














            






        break;













    }

} 











?>