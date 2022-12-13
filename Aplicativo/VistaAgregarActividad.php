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
            <h1 class="m-0">Agregar Servicios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Vistapanel.php">Inicio</a></li>
              <li class="breadcrumb-item active">AgregarServicio</li>
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
                <h3 class="card-title">Agrega tu Servicio</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="" method="post">
                  <div class="row">


                        <div class="col-sm-6">
                        <label>Detalle Actividad</label>
                            <input type="text" class="form-control"  name="detalle_asesoria" placeholder=" "  value="" require>
                        

                        </div>


                        <div class="col-sm-6">
                        <label>Fecha Actividad</label>
                            <input type="text" class="form-control" id="datepicker" name="fecha" placeholder=" "  value="" require>
                        

                        </div>



                        <div class="col-sm-6">
                        <label>Extra</label>
                            <input type="text" class="form-control"  name="extra" placeholder=" "  value="" require>
                        

                        </div>




                        <div class="col-sm-6">

                        <label>Profesional</label>

                        <select class="form-control" id="profesional" name="profesional" require> 
                        <?php foreach($Cliente as $clientes) {?>
                   
                   <?php foreach($clientes as $nombreclientes) {?>
            
                 <?php if($nombreclientes['id_rol'] == "F6637290-69A5-4213-A0CD-13554DC668B2" ) {?>

                        
                        
                    <option><?php echo $nombreclientes['nombre']?></option>
                            <?php }?>
                          <?php }?>
                        </select>

                        <?php }?>
                        </div>



                        <div class="col-sm-6">
                        <label>Tema</label>
                            <input type="text" class="form-control"  name="tema" placeholder=" "  value="" require>
                        

                        </div>


                        
                        <div class="col-sm-6">
                        <label>ubicacion</label>
                            <input type="text" class="form-control"  name="ubicacion" placeholder=" "  value="" require>
                        

                        </div>




                        
                        <div class="col-sm-6">
                        <label>Duracion</label>
                            <input type="text" class="form-control"  name="duracion" placeholder=" "  value="" require>
                        

                        </div>




                        
                        <div class="col-sm-6">
                        <label>Tipo Servicio</label>


                        <select class="form-control" id="id_tipo_servicio" name="id_tipo_servicio" require> 

                        <option>Selecciona El tipo de servicio</option>

                        <?php foreach($Tipo_servicio as $tipo_servicio) {?>
                   
                   <?php foreach($tipo_servicio as $nombre_tipo_servicio) {?>    
                        
                        

                        <option><?php echo $nombre_tipo_servicio['nombre_tipo_servicio']?></option>
                            <?php }?>
                          <?php }?>
                        </select>

                        </div>





                        <div class="col-sm-6">
                        <label>Servicio</label>


                        <select class="form-control" id="id_servicio" name="id_servicio" require> 

                        <option>Selecciona  servicio</option>

                        <?php foreach($Servicios as $servicio) {?>
                   
                   <?php foreach($servicio as $nombre_servicio) {?>    
                        
                        

                        <option><?php echo $nombre_servicio['id_servicio']?></option>
                            <?php }?>
                          <?php }?>
                        </select>

                        </div>

   

                      



                <div class="col-sm-12">
                    <button class="btn btn-info"  type="submit"  name="btnAccion" value="AgregarDetalleServicios"
                    style="
                        margin-top: 5%;
                        margin-bottom: 0px;
                        width: 100%;" 
                        >

                    Agregar Servicios>> 
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