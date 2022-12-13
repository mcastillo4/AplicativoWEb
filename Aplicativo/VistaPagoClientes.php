<?php include('global/sesiones.php'); ?>
<?php include('modulos/administrativo.php') ?>
<?php include("cabecera.php"); ?>
<?php include("sidebaradministrativo.php"); ?>
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
            <h1 class="m-0">Pago Clientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">PAGOS</li>
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
                        <h3 class="card-title">Buscar Cliente</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form action="" method="post">
                        <div class="card-body">
                
                          <div class="form-group">
                            <label for="BuscarClienteReporte">Cliente</label>
                            <select class="form-control" id="id_usuario" name="id_usuario" require>
                
                <option>Selecciona el cliente</option>
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
          <button type="submit" class="btn btn-primary" name="btnAccion" value="BuscarClienteReporte">Buscar</button>
        </div>
        </div>

        </div>




          <?php if(!empty($ClienteFiltrado)){ ?> 





      <!-- TABLA DE ASESORIAS-->
 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PAGO CLIENTES</h3>

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
                      <th>ID Mensualidad</th>
                      <th>Empresa</th>
                      <th>Profesional</th>
                      <th>Estado</th>
                      
                      
                    </tr>
                  </thead>
                  



                  <?php foreach($Servicios as $servicios) {?>
                   
                   
                 <?php if($servicios['id_mensualidad'] = $id_mensualidad ) {?>
      

                    
          
            

                  
                  <tbody>


                  
                  <td><?php echo $id_mensualidad  ?></td>
                  <td><?php echo $nombre_xempresa  ?></td>
                  <td><?php echo $profesional  ?></td>
                  <td><?php echo $nombre_estados  ?></td>





                      


                  </tbody>

                  <?php }  ?>
 

 <?php }  ?>





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