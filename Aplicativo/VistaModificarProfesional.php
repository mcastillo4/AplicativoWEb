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
            <h1 class="m-0">Modificar Profesionales</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Vistapanel.php">Inicio</a></li>
              <li class="breadcrumb-item active">Modificar Profesionales</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">


      <div class="container-fluid">

      <?php if(!empty($mensajeexito)){   ?>

                  <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i> Exito!</h5>
                            El profesional fue modificado correctamente.
                          </div>

      <?php } ?>

              <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Buscar Profesional</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form action="" method="post">
                        <div class="card-body">
                
                          <div class="form-group">
                            <label for="buscarcliente">Profesional</label>
                            <select class="form-control" id="id_usuario" name="id_usuario" require>
                
                <option>Selecciona el Profesional </option>
                 <?php foreach($Cliente as $clientes) {?>
              
                  <?php foreach($clientes as $nombreclientes) {?>
                    <?php if($nombreclientes['id_rol'] == "F6637290-69A5-4213-A0CD-13554DC668B2" ) {?>
                <option><?php echo $nombreclientes['rut_usuario'];?></option>
                <?php }?>
              <?php }?>
            <?php }?>
            </select>




          </div>


        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="btnAccion" value="BuscarCliente">Buscar</button>
        </div>
      </form>
</div>
</div>


<?php if(!empty($ClienteFiltrado)){ ?> 
           
      <?php foreach($ClienteFiltrado as $var_cliente) { ?>

       




        <div class="card card-warning">
<div class="card-header">
<h3 class="card-title">Atributos Profesional</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<form action="" method="post">
  <div class="row">



            <input type="hidden" class="form-control" name="id_cliente" value="<?php echo $var_cliente['id_usuario']?>" require>



        <div class="col-sm-6">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $var_cliente['nombre']?>" require>

        </div>

        
        <div class="col-sm-6">
        <label>Apellido Paterno</label>
            <input type="text" class="form-control" name="apellido_p" placeholder="" value="<?php echo $var_cliente['apellido_p']?>" require>
        </div>


        <div class="col-sm-6">
        <label>Apellido Materno</label>
            <input type="text" class="form-control" name="apellido_m" placeholder="" value="<?php echo $var_cliente['apellido_m']?>" require>
        </div>

        <div class="col-sm-6">
        <label>Fecha de Nacimiento</label>
            <input type="text" class="form-control" id="datepicker" name="fecha_nacimiento" placeholder=" "  value="<?php echo $var_cliente['fecha_nacimiento']?>" require>
        

        </div>

        <div class="col-sm-6">
        <label>Estado</label>
            
        <select class="form-control" id="id_estado" name="id_estado" require>

            <option>Selecciona el Estado </option>
        <?php foreach($estados as $estado) {?>
           
          <?php foreach($estado as $nombrestado) {?>
            <option><?php echo $nombrestado['nombre_estado']?></option>
            <?php }?>
          <?php }?>
        </select>




        </div>

        <div class="col-sm-6">
        <label>	Correo </label>
            <input type="text" class="form-control" name="correo" placeholder=" " value="<?php echo $var_cliente['correo']?>" require>
        </div>

        <div class="col-sm-6">
        <label>Telefono</label>
            <input type="text" class="form-control" name="telefono" placeholder=" " value="<?php echo $var_cliente['telefono']?>" require>
        </div>

        <div class="col-sm-6">
        <label>Contraseña</label>
            <input type="text" class="form-control" name="contrasena" placeholder=" " value="<?php echo $var_cliente['contrasena']?>" require>
        </div>

        <div class="col-sm-6">
        <label>Direccion</label>
           
        <select class="form-control" id="id_direccion" name="id_direccion" require>

            <option>Selecciona la Direccion </option>
          <?php foreach($Direccion as $direcciones) {?>
          
          <?php  foreach($direcciones as $calledirecciones) {?>
            <option><?php echo $calledirecciones['id_direccion'];?></option>
            <?php }?>
          <?php }?>
        </select>


        </div>

        <div class="col-sm-6">
        <label>Rut Usuario</label>
            <input type="text" class="form-control" name="rut_usuario" placeholder=" " value="<?php echo $var_cliente['rut_usuario']?>" require>
        </div>

        <div class="col-sm-6">
        <label>Especialidad</label>
            
        
  
        
        <select class="form-control" id="id_especialidad" name="id_especialidad" require>

              <option>Selecciona La especialidad </option>
              <?php echo $Especialidad ?>
          <?php foreach($Especialidad as $especialidades) {?>
            <?php foreach($especialidades as $nombrespecialidades) {?>
              <option><?php echo $nombrespecialidades['nombre_especialidad']?></option>
              <?php }?>
            <?php }?>
         </select>
        </div>


        <div class="col-sm-6">
        <label>Rol</label>
        <select class="form-control" id="id_rol" name="id_rol" require>

            <option>Selecciona el Rol </option>
        <?php foreach($Rol as $roles) {?>
          <?php foreach($roles as $nombreroles) {?>
            <option><?php echo $nombreroles['nombre_rol']?></option>
            <?php }?>
          <?php }?>
        </select>
          </div>

        <div class="col-sm-6">
        <label>Imagen</label>
            <input type="text" class="form-control" name="imagen" placeholder=" " value="<?php echo $var_cliente['imagen']?>" require>
        </div>


        <?php   }?>
        <?php   }?>

<div class="col-sm-12">
    <a href="VistaVerCliente.php" ><button class="btn btn-info"  type="submit"  name="btnAccion" value="modificarCliente"
    style="
        margin-top: 2%;
        margin-bottom: 0px;
        width: 100%;" 
        >

    Modificar Profesional >> 
    </button> </a>


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
<!-- /.row -->
</div>



</div>

<?php }?>                

<?php include("piePagina.php"); ?>

