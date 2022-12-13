<?php include('global/sesiones.php'); ?>
<?php include("cabecera.php"); ?>
<?php include("sidebarprofesional.php"); ?>
<?php include("modulos/item.php"); ?>


<?php if($_SESSION['usuario']["id_rol"] == "2"){ ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mejoras</h1>
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
                <h3 class="card-title">Lista de Mejoras del año</h3>

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
                      <th width="20%">Id Mejora </th>
                      <th width="20%">Fecha</th>
                      <th width="20%">Status</th>
                      <th width="20%">Objetivo</th>                    
                      <th width="20%">Detalle</th>
                      
                    </tr>
                    </thead>
                    <tbody>


<?php foreach($listaFullItems as $items) {?>


  <tr>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Detalleitems<?php echo $items['id_item'] ?> "><?php echo $items['id_item'] ?> </button></td>
                      

                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $items['fecha_agregado']?>  </div>
                      </td>

  
                      <?php if( $items['id_estado_item'] == 1) {  ?>
                      <td><span class="badge badge-warning">pendiente</span></td>
                      

                      <?php } ?>

                      <?php if( $items['id_estado_item'] == 2) {  ?>
                      
                        <td><span class="badge badge-success">Completado</span></td>

                        <?php } ?>

                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $items['nombre_item']?>  </div>
                      </td>

                      <td><?php echo  $items['descripcion_item']; ?></td>

 </tr>


 <?php } ?>  

                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
 






              <?php foreach($listaFullItems as $items) {?>





<!-- Modal EXPERIMENTAL  -->
<div class="modal fade" id="Detalleitems<?php echo $items['id_item']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <th width="40%">ID</th>
            <th width="15%" class="text-center">Nombre</th>
            <th width="20%" class="text-center">Fecha</th>
            <th width="20%" class="text-center">Estado</th>
            <th width="20%" class="text-center">Detalle</th>
            
            
        </tr>
        <tr>


      

        <td><?php echo $items['id_item']  ?></td>

                    <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $items['nombre_item']?>  </div>
                      </td>

                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $items['fecha_agregado']?>  </div>
                      </td>

  
                      <?php if( $items['id_estado_item'] == 1) {  ?>
                      
  


                      <td><span class="badge badge-warning">pendiente</span></td>
                      


                      <?php } ?>

                      <?php if( $items['id_estado_item'] == 2) {  ?>
                      
                        <td><span class="badge badge-success">Completado</span></td>

                        <?php } ?>


                      <td><?php echo  $items['descripcion_item']; ?></td>
        
        </tr>


        </tbody>

  </table>           
      </div>

       <!--FALTA IMPLEMENTAR ESTE PROCESO -->

      <div class="modal-footer">

      <form action="" method="post">
      <button type="submit" name="btnAccion" value="entregado" class="btn btn-success">Cambiar a completado</button>
      
      </form>
      
      <!--FALTA IMPLEMENTAR ESTE PROCESO -->
    

            <!--<img src="https://raw.githubusercontent.com/volfild6f/img/main/logo.jpg" height ="50" width="50" /> -->
     
                      
      </div>
    </div>
  </div>
</div>


  
<?php } ?>
</div>
</div>
</div>
<?php include("piePagina.php"); ?>


<?php } ?>

