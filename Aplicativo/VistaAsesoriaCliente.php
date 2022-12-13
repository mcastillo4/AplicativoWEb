<?php include('global/sesiones.php'); ?>
<?php include('modulos/administrativo.php') ?>
<?php include("cabecera.php"); ?>
<?php include("sidebar.php"); ?>
<?php include("modulos/Cliente.php"); ?>

<?php if($_SESSION['usuario']["data"]["id_rol"] == "83CAB109-0591-4D3C-86F8-D4033CAAEDCC"){ ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Asesorias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Asesorias</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->





    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Resumen</h2>

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

<!-- FALTA GENERAR ESTE PARTE DINAMICA -->
                    <?php if($detalle_servicios['id_servicio']  == "B4D7FA45-AB5C-48E6-893A-9B538B127FBA"){ ?>


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

                  <?php }?>
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


  <?php } ?>