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
            <h1 class="m-0">Agregar Direccion Cliente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Vistapanel.php">Inicio</a></li>
              <li class="breadcrumb-item active">AgregarDireccionCliente</li>
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
                <h3 class="card-title">Direccion</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="" method="post">
                  <div class="row">

                        <div class="col-sm-6">
                            <label>Pais</label>
                            <select class="form-control" id="id_pais" name="id_pais" require>
                
                <option>Selecciona el Pais </option>
            <?php foreach($Paises as $pais) {?>
               
              <?php foreach($pais as $nombrepais) {?>
                <option><?php echo $nombrepais['nombre_pais']?></option>
                <?php }?>
              <?php }?>
            </select>
               
                        </div>

                        
                        <div class="col-sm-6">
                        <label>Region</label>
                            

                        <select class="form-control" id="id_region" name="id_region" require>
                
                <option>Selecciona la Region </option>
                        <?php foreach($Regiones as $region) {?>
                        
                        <?php foreach($region as $nombreregion) {?>
                            <option><?php echo $nombreregion['nombre_region']?></option>
                            <?php }?>
                        <?php }?>
                        </select>
                        
                        
                        
                        
                        
                        </div>


                        <div class="col-sm-6">
                        <label>Comuna</label>
                           

                        <select class="form-control" id="id_comuna" name="id_comuna" require>
                
                            <option>Selecciona La Comuna </option>
                                    <?php foreach($Comunas as $comuna) {?>
                                    
                                    <?php foreach($comuna as $nombrecomuna) {?>
                                        <option><?php echo $nombrecomuna['nombre_comuna']?></option>
                                        <?php }?>
                                    <?php }?>
                                    </select>
                        
                        
                        
                        
                       
                        </div>

                        <div class="col-sm-6">
                        <label>Ciudad</label>


                        <select class="form-control" id="id_ciudad" name="id_ciudad" require>
                            
                            <option>Selecciona La Ciudad </option>
                                    <?php foreach($Ciudades as $ciudad) {?>
                                    
                                    <?php foreach($ciudad as $nombreciudad) {?>
                                        <option><?php echo $nombreciudad['nombre_ciudad']?></option>
                                        <?php }?>
                                    <?php }?>
                                    </select>
            





                        </div>

                        <div class="col-sm-6">
                        <label>Numero</label>
                            

                        <input type="text" class="form-control" name="numero" placeholder=" " value="" require>



                        </div>

                        <div class="col-sm-6">
                        <label>	Calle </label>
                            <input type="text" class="form-control" name="calle" placeholder=" " value="" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Observacion</label>
                            <input type="text" class="form-control" name="observacion" placeholder=" " value="" require>
                        </div>



                <div class="col-sm-12">
                    <button class="btn btn-info"  type="submit"  name="btnAccion" value="guardarDireccion"
                    style="
                        margin-top: 5%;
                        margin-bottom: 0px;
                        width: 100%;" 
                        >

                    Agregar Direccion Cliente>> 
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