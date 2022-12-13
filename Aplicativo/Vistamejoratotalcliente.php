<?php include('global/sesiones.php'); ?>
<?php include("cabecera.php"); ?>
<?php include("sidebar.php"); ?>


<?php if($_SESSION['usuario']["rol"] == "cliente"){ ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mejoras Historicas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="VistapanelCliente.php">Inicio</a></li>
              <li class="breadcrumb-item active">Mejoras</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">







      <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Todas Las Mejoras</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Id Mejora </th>
                      <th>Fecha</th>
                      
                      <th>Profesional</th>
                      <th>Status</th>
                      <th>Detalle</th>
                      <th>Objetivo</th>
                    </tr>
                    </thead>
                    <tbody>
                    


                    <tr>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DetalleMejora1">1</button></td>
                      

                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">2022-05-06</div>
                      </td>


                      <td> Juan Perez</td>



                      <td><span class="badge badge-warning">pendiente</span></td>
                      



                    



                     
                      <td>Se realiza porque se requiere mejorar ciertos puntos</td>


                      <td>Mejorar la seguridad</td>

                  



                    </tr>



                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DetalleMejora2">2</button></td>
                     
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">2022-05-06</div>
                      </td>
                      <td> Juan Perez</td>
                                    
                        <td><span class="badge badge-success">completado</span></td>
                     
                      <td>Se realiza porque se requiere mejorar ciertos puntos</td>

                      <td>Mejorar la seguridad</td>

                    </tr>
                    </tbody>           
                  </table>
                </div>
              </div>
            </div>
      </div>
    </section>
  </div>
 










  <?php include("piePagina.php"); ?>

















<!-- Modal-->
<div class="modal fade" id="DetalleMejora1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="exampleModalLabel">Detalle De Mejoras</h3>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
      <div class="modal-body">

  <table class="table table-light table-bordered" > 
    <tbody>
        <tr>
            <th width="20%">Id Mejora</th>
            <th width="20%" class="text-center">Fecha</th>
            <th width="20%" class="text-center">Profesional </th>
            <th width="20%" class="text-center">Objetivo</th>
        </tr>
        <tr>    
        <td>1</td>
        <td>
             <div class="sparkbar" data-color="#00a65a" data-height="20">2022-05-06</div>
        </td>
        <td><span class="badge badge-success">completado</span></td>

        <td>Mejorar la seguridad</td>
        </tr>
        </tbody>

  </table>           
  </div>
</div>


  


<?php } ?>
