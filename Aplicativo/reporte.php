
<?php

ob_start();

?>



<?php include('global/sesiones.php'); ?>
<?php include('modulos/administrativo.php') ?>
<?php include("modulos/Cliente.php"); ?>
<?php include("modulos/ClienteReporte.php"); ?>



<?php if($_SESSION['usuario']["data"]["id_rol"] == "336CBD33-DA18-4DA6-AFD5-435329E85980"){ ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reportes Mensual</h1>
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



 
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Reporte del mes <?php echo date('m'); ?> </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

        </div>
                                          
                

<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Reporte</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="post">
                  <div class="row">
                        <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nombre Empresa :</label>
                             <label><?php echo $_GET['nombreEmpresa']  ?></label>
                        </div>
                        </div>

                        
                        <div class="col-sm-6">
                        <label>Cantidad Accidentes :</label>
                          <label><?php echo $_GET['CantidadAccidentes'] ?></label>
                        </div>



                        <div class="col-sm-6">
                        <label>Cantidad asesorias :</label>
                          <label><?php echo $_GET['contadorAsesoria'] ?></label>
                        </div>

                        <div class="col-sm-6">
                        <label>Cantidad visitas realizadas : </label>
                        <label><?php echo $_GET['contadorVisita'] ?></label>
                        </div>


                        <div class="col-sm-6">
                        <label>Cantidad Capacitaciones realizadas : </label>
                        <label><?php echo $_GET['contadorCapacitacion'] ?></label>
                        </div>


                        <div class="col-sm-6">
                        <label>Cantidad llamadas realizadas : </label>
                        <label><?php echo  $_GET['contadorLlamada'] ?></label>
                        </div>

                        <div class="col-sm-6">
                        <label>Fecha informe : </label>
                        <label><?php echo date('d/m/Y'); ?></label>
                        </div>
                        
                        <div class="col-sm-6">
                        <label>Nombre profesional acargo : </label>
                        <?php echo $_GET['profesional']?>
                        </div>

                        <div class="col-sm-6">
                        <label>Estado de Mensualidad : </label>
                        <label><?php echo $_GET['nombre_estados']?></label>
                        </div>









                        <div class="col-sm-6">
                        <label>Cantidad de Items : </label>
                        <label> <?php echo $_GET['contador_items']?></label>
                        <!-- textarea -->
                        
                    </div>

                </form>







            </div>
    </div>
                  
    </div>

 



      





    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        </div>
          


        
                    

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        </div>





        </div>
        <!-- /.row -->
      </div>






</div>
<br>
<br>
<br>

 <?php include("piePagina.php"); ?>


 <?php } ?>



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