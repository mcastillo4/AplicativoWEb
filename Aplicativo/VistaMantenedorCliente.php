<?php include('global/sesiones.php'); ?>
<?php include('modulos/administrativo.php') ?>
<?php include("cabecera.php"); ?>
<?php include("sidebaradministrativo.php"); ?>
<?php include("modulos/Cliente.php"); ?>

<?php if($_SESSION['usuario']["data"]["id_rol"] == "336CBD33-DA18-4DA6-AFD5-435329E85980"){ ?>

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<script>
$(function () {
$.datepicker.setDefaults($.datepicker.regional["en-us"]);
$("#datepicker").datepicker({
firstDay: 1,
dateFormat: "yy/mm/dd",
onSelect: function (date) {

},
});
});
</script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Agregar Cliente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Vistapanel.php">Inicio</a></li>
              <li class="breadcrumb-item active">AgregarCliente</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">













<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Atributos Cliente</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="" method="post">
                  <div class="row">

                        <div class="col-sm-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="" require>
               
                        </div>

                        
                        <div class="col-sm-6">
                        <label>Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellido_p" placeholder="" value="" require>
                        </div>


                        <div class="col-sm-6">
                        <label>Apellido Materno</label>
                            <input type="text" class="form-control" name="apellido_m" placeholder="" value="" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Fecha de Nacimiento</label>
                            <input type="text" class="form-control" id="datepicker" name="fecha_nacimiento" placeholder=" "  value="" require>
                        

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
                            <input type="text" class="form-control" name="correo" placeholder=" " value="" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Telefono</label>
                            <input type="text" class="form-control" name="telefono" placeholder=" " value="" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Contraseña</label>
                            <input type="text" class="form-control" name="contrasena" placeholder=" " value="" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Direccion</label>
                           
                        <select class="form-control" id="id_direccion" name="id_direccion" require>
                
                            <option>Selecciona la Direccion </option>
                          <?php foreach($Direccion as $direcciones) {?>
                          
                          <?php  foreach($direcciones as $calledirecciones) {?>
                            <option><?php echo $calledirecciones['calle'];?></option>
                            <?php }?>
                          <?php }?>
                        </select>


                        </div>

                        <div class="col-sm-6">
                        <label>Rut Usuario</label>
                            <input type="text" class="form-control" name="rut_usuario" placeholder=" " value="" require>
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
                            <input type="text" class="form-control" name="imagen" placeholder=" " value="" require>
                        </div>



                <div class="col-sm-12">
                    <button class="btn btn-info"  type="submit"  name="btnAccion" value="guardarCliente"
                    style="
                        margin-top: 5%;
                        margin-bottom: 0px;
                        width: 100%;" 
                        >

                    Agregar Cliente>> 
                    </button> </a>

                </div>

                </form>



                

                </div>

            </div>
    </div>
                  
    </div>





    
</div>





 <?php include("piePagina.php"); ?>

 <?php } ?>