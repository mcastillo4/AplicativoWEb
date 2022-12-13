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





 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <?php include("piePagina.php"); ?>
