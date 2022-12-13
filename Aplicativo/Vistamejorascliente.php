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
            <h1 class="m-0">CHECK LIST EMPRESA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
                <h2 class="card-title">ITEMS</h2>

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
                      <th>Nombre</th>
                      <th>Fecha</th>
                      <th>Descripcion</th>
                      <th>Estado</th>

                      <th>ID EMPRESA</th>
                      <th>EMPRESA</th>



                      
                      
                    </tr>
                  </thead>

                  


                  <?php foreach ($Item as $items) { ?>
                    <?php foreach ($items as $detalle_items) { ?>

                    <?php $newDate = date("Y-m-d", strtotime($detalle_items['fecha_agregado'])); ?>
                    
                    <?php $empresa = "A4E9C283-FAB2-454C-B08D-7EB89C2C4F17"; ?>
<!-- FALTA GENERAR ESTE PARTE DINAMICA -->
                    <?php if($empresa  == "A4E9C283-FAB2-454C-B08D-7EB89C2C4F17"){ ?> 

                  <tbody>



                  <td><?php echo $detalle_items['nombre_item'] ?></td>
                  <td><?php echo $newDate ?></td>
                  <td><?php echo $detalle_items['descripcion_item'] ?></td>


                  <td>PENDIENTE</td>
                  <td><?php echo $detalle_items['id_empresa'] ?></td>
                  <td> VIVOPESCA </td>



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