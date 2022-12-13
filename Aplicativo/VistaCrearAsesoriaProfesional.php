<?php include('global/sesiones.php'); ?>
<?php include('modulos/administrativo.php') ?>
<?php include("cabecera.php"); ?>
<?php include("sidebarprofesional.php"); ?>
<?php include("modulos/Cliente.php"); ?>


<?php if($_SESSION['usuario']["data"]["id_rol"] == "F6637290-69A5-4213-A0CD-13554DC668B2"){ ?>



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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



 
      <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Buscar Empresa y mejoras</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form action="" method="post">
                        <div class="card-body">
                
                          <div class="form-group">
                            <label for="BuscarClienteAsesoria">Empresa</label>
                            <select class="form-control" id="id_usuario" name="id_usuario" require>
                
                <option>Selecciona la Empresa </option>
                 <?php foreach($Cliente as $clientes) {?>
              
                  <?php foreach($clientes as $nombreclientes) {?>
                    <?php if($nombreclientes['id_rol'] == "83CAB109-0591-4D3C-86F8-D4033CAAEDCC" ) {?>
                <option><?php echo $nombreclientes['rut_usuario'];?></option>
                <?php }?>
              <?php }?>
            <?php }?>
            </select>




          </div>


          <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="btnAccion" value="BuscarClienteAsesoria">Buscar</button>
        </div>
        </div>

        </div>




          <?php if(!empty($ClienteFiltrado1)){ ?> 
          
            


      <!-- TABLA DE ASESORIAS-->
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
                      <th>Correo</th>
                      <th>Fecha</th>
                      <th>Profesional</th>
                      <th>Tema</th>
                      <th>Ubicacion</th>
                      <th>Duracion</th>
                      <th>Tipo de servicio</th>
                      <th>Estado</th>
                      
                      
                    </tr>
                  </thead>
                  


                  <?php include("modulos/Clienterespaldo.php"); ?>



                  
                  <tbody>

                      


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- FIN TABLA DE ASESORIAS-->





        


        <?php }  ?>
 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 


  <?php include("piePagina.php"); ?>
  <?php }  ?>