<?php include('global/sesiones.php'); ?>
<?php

include 'cabecera.php';
include 'sidebar.php'
?>



<?php if($_SESSION['usuario']["rol"] == "cliente"){ ?>



 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Descarga De Reportes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

  
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
              <div class="alert alert-info alert-dismissible">
                <h3 class="card-title" >Reportes </h3>

                <div class="card-tools">

                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: block;">
              <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Exito!</h5>
                  El Reporte fue generado correctamente.
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer" style="display: block;">
              <a href="#" class="btn btn-sm btn-info float-left">Descargar Reporte</a>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>


 </div>

 <?php
include 'piePagina.php';
?>


<?php } ?>