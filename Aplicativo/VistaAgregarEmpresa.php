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
            <h1 class="m-0">Agregar Empresa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Vistapanel.php">Inicio</a></li>
              <li class="breadcrumb-item active">AgregarEmpresa</li>
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
                <h3 class="card-title">Agrega Empresa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="" method="post">
                  <div class="row">


                        <div class="col-sm-6">
                        <label>Nombre Empresa</label>
                            <input type="text" class="form-control"  name="nombre_empresa" placeholder=" "  value="" require>
                        

                        </div>


                        <div class="col-sm-6">
                        <label>Rut Empresa</label>
                            <input type="text" class="form-control" id="rut_empresa" name="rut_empresa" placeholder=" "  value="" require>
                        

                        </div>



                        <div class="col-sm-6">
                        <label>Rubro</label>
                        <select class="form-control" id="rubro" name="rubro" require> 


                        <option>Selecciona el Rubro</option>
                        <?php foreach($Rubros as $rubros) {?>
                   
                   <?php foreach($rubros as $nombrerubros) {?>
            

                        
                    <option><?php echo $nombrerubros['nombre_rubro']?></option>
                            <?php }?>
                          <?php }?>
                        </select>

                        </div>




                        <div class="col-sm-6">

                        <label>Contrato</label>

                       

                        <select class="form-control" id="contrato" name="contrato" require> 
                        <option>Selecciona el contrato</option>
                        <?php foreach($Contratos as $contratos) {?>
                   
                   <?php foreach($contratos as $nombrecontrato) {?>
            

                        
                    <option><?php echo $nombrecontrato['id_contrato']?></option>
                            <?php }?>
                          <?php }?>
                        </select>


                        </div>



                   
   

                      



                <div class="col-sm-12">
                    <button class="btn btn-info"  type="submit"  name="btnAccion" value="AgregarEmpresa"
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