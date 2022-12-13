<?php

$data = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/rol/336CBD33-DA18-4DA6-AFD5-435329E85980"), true );


$nombreRol = $data["data"]["nombre_rol"];

$nombreRolProfesional = 'PROFESIONAL' ;


$nombreRolCliente = 'Cliente' ;






$estados = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/estado"), true );


$Rol = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/rol"), true );


$Especialidad = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/especialidad_profesional"), true );


$Direccion = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/direccion"), true );

$Cliente = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/usuario"), true );


$Servicios = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/servicio"), true );


$DetalleServicios = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/detalle_servicio"), true );


$Tipo_servicio = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/tipo_servicio/"), true );

$urlClienteDetalleFiltradoPorEmpresa = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/detalle_usuario"), true );

$Empresas =  json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/empresa"), true );


$Mensualidad = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/mensualidad"), true );

$Estados = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/estado"), true );

$Item = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/item"), true );


$Paises =   json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/pais"), true );

$Regiones =   json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/region"), true );

$Ciudades = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/ciudad"), true );

$Comunas =  json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/comuna"), true );


$Contratos = json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/contrato"), true );


$Rubros =   json_decode(file_get_contents("http://localhost:9000/api/portafolio/all/rubro"), true );
?>