<?php include('global/sesiones.php'); ?>
<?php include('modulos/administrativo.php') ?>
<?php include("cabecera.php"); ?>
<?php include("sidebaradministrativo.php"); ?>
<?php include("modulos/Cliente.php"); ?>

<?php if($_SESSION['usuario']["data"]["id_rol"] == "336CBD33-DA18-4DA6-AFD5-435329E85980"){ ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lista de Profesionales</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">VerProfesionales</li>
            </ol>
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
                <h3 class="card-title">Listado de profesionales</h3>

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
                <h3 class="card-title">Listado de Clientes</h3>

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
                <h3 class="card-title">Casos en Curso</h3>

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


          <a class="btn btn-info" href="reporteGlobal.php
                    
                    
                    " target="_blank"   type="submit"  name="btnAccion" value="BuscarClienteReporte"
                    style="
                        margin-top: 2%;
                        margin-bottom: 0px;
                        width: 100%;" 
                        >


                    Obtener Reporte >> 
                    </a>









 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <?php include("piePagina.php"); ?>
