<?php include('global/sesiones.php'); ?>
<?php include('modulos/administrativo.php') ?>
<?php include("cabecera.php"); ?>
<?php include("sidebar.php"); ?>
<?php include("modulos/Cliente.php"); ?>

<?php if($_SESSION['usuario']["data"]["id_rol"] == "83CAB109-0591-4D3C-86F8-D4033CAAEDCC"){ ?>

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
            <h1 class="m-0">Reportar Accidente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Vistapanel.php">Inicio</a></li>
              <li class="breadcrumb-item active">AgregarAccidente</li>
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
                <h3 class="card-title">Agrega tu Solciitud de Servicio</h3>
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
                            <input type="text" class="form-control"  name="extra" placeholder=" "  value="No" require>
                        

                        </div>




                        <div class="col-sm-6">

                        <label>Profesional</label>

                        <select class="form-control" id="profesional" name="profesional" value="Dracula" require> 

                   
                    <option>Dracula</option>

                        </select>

        
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


                        <select class="form-control" id="id_tipo_servicio" name="id_tipo_servicio"  value= "Accidente" require> 



                        <option>Accidente</option>

                        </select>

                        </div>





                        <div class="col-sm-6">
                        <label>Servicio</label>


                        <select class="form-control" id="id_servicio" name="id_servicio" value="2477F88F-F351-4DDD-9857-F6555D6965D" require> 

 


                        
                        

                        <option>2477F88F-F351-4DDD-9857-F6555D6965D</option>

                        </select>

                        </div>

   

                      



                <div class="col-sm-12">
                    <button class="btn btn-info"  type="submit"  name="btnAccion" value="AgregarDetalleServicios"
                    style="
                        margin-top: 5%;
                        margin-bottom: 0px;
                        width: 100%;" 
                        >

                    Agregar Accidente >> 
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