
<?php

ob_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PREVAC SA. |</title>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>


</head>

<?php include('global/sesiones.php'); ?>
<?php include('modulos/administrativo.php') ?>
<?php include("modulos/Cliente.php"); ?>

<?php if($_SESSION['usuario']["data"]["id_rol"] == "336CBD33-DA18-4DA6-AFD5-435329E85980"){ ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reporte Global EVOTECH</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <!-- TABLA DE PROFESIONALES-->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Listado de profesionales</h2>

                <div class="card-tools">
                <form action="" method="get">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  
                    <input autofocus type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" >
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr >
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Apellido P</th>
                      <th>Apellido M</th>
                      <th>correo</th>
                      <th>Telefono</th>
                      <th>Rol</th>
                     
                      
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($Cliente as $clientes) {?>
                   
                   <?php foreach($clientes as $nombreclientes) {?>
                 <?php if($nombreclientes['id_rol'] == "F6637290-69A5-4213-A0CD-13554DC668B2" ) {?>



                  <tr>

                      
                        <td><?php echo $nombreclientes['id_usuario']  ?></td>
                        <td><?php echo $nombreclientes['nombre']  ?></td>
                        <td><?php echo $nombreclientes['apellido_p']  ?></td>
                        <td><?php echo $nombreclientes['apellido_m']  ?></td>
                        <td><?php echo $nombreclientes['correo']  ?></td>
                        <td><?php echo $nombreclientes['telefono']  ?></td>
                        <td>Profesional</td>



                  </tr>

                  <?php }?>
                  <?php }?>
                  <?php }?>

                  <?php }?>
   
        


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- FIN TABLA DE PROFESIONALES-->





        <!-- TABLA DE CLIENTES-->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Listado de Clientes</h2>

                <div class="card-tools">
                <form action="" method="get">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  
                    <input autofocus type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" >
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr >
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Apellido P</th>
                      <th>Apellido M</th>
                      <th>correo</th>
                      <th>Telefono</th>
                      <th>Rol</th>

                     
                      
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($Cliente as $clientes) {?>
                   
                      <?php foreach($clientes as $nombreclientes) {?>
                    <?php if($nombreclientes['id_rol'] == "83CAB109-0591-4D3C-86F8-D4033CAAEDCC" ) {?>


                  
                      <tr>

                      
                        <td><?php echo $nombreclientes['id_usuario']  ?></td>
                        <td><?php echo $nombreclientes['nombre']  ?></td>
                        <td><?php echo $nombreclientes['apellido_p']  ?></td>
                        <td><?php echo $nombreclientes['apellido_m']  ?></td>
                        <td><?php echo $nombreclientes['correo']  ?></td>
                        <td><?php echo $nombreclientes['telefono']  ?></td>
                      
                        <td>Cliente</td>




                      </tr>
                    <?php }?>
                  <?php }?>
                  <?php }?>


   
                    


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- FIN TABLA DE Clientes-->







        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Casos en Curso</h2>

                <div class="card-tools">
                <form action="" method="get">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Fecha</th>
                      <th>Extra</th>
                      <th>Profesional</th>
                      <th>Tema</th>
                      <th>Ubicacion</th>
                      <th>Duracion</th>
                      <th>Detalle</th>


                      
                      
                    </tr>
                  </thead>


                  <?php foreach ($DetalleServicios as $detalle_servicio) { ?>
                    <?php foreach ($detalle_servicio as $detalle_servicios) { ?>

                    <?php $newDate = date("Y-m-d", strtotime($detalle_servicios['fecha'])); ?>



                  <tbody>



                  <td><?php echo $detalle_servicios['id_asesoria'] ?></td>
                  <td><?php echo $newDate ?></td>
                  <td><?php echo $detalle_servicios['extra'] ?></td>
                  <td><?php echo $detalle_servicios['profesional'] ?></td>
                  <td><?php echo $detalle_servicios['tema'] ?></td>
                  <td><?php echo $detalle_servicios['ubicacion'] ?></td>
                  <td><?php echo $detalle_servicios['duracion'] ?></td>
                  <td><?php echo $detalle_servicios['detalle_asesoria'] ?></td>



                  </tbody>



                  <?php }?>

                  <?php }; ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>









 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>





  <?php include("piePagina.php"); ?>






<?php $html = ob_get_clean();

?>



<?php require_once "C:/xampp/htdocs/crudapi/public/Portafolio/libreria/dompdf/autoload.inc.php"; ?>
<?php 



use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));


?>



<?php 

$dompdf->LoadHtml("$html");

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("archivo_.pdf", array("Attachment" => false));


?>