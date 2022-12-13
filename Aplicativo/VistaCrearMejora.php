<?php include('global/sesiones.php'); ?>
<?php include("cabecera.php"); ?>
<?php include("sidebarprofesional.php"); ?>
<?php include("modulos/asesorias.php"); ?>


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
              <li class="breadcrumb-item"><a href="VistapanelProfesional.php">Inicio</a></li>
              <li class="breadcrumb-item active">Ingresar Mejoras</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


                                <!-- FORMULARIO PARA  SELECCIONAR EMPRESA ASOCIADA -->

      <form action="VistaCrearMejora.php" method="post">
      
                <div class="form-group" style="width: 100%;">
                        <label for="fono_id" class="control-label">EMPRESA</label>
                            <select class="form-control" id="empresa_id" name="empresa" require>
                            
                                <option>Selecciona tu EMPRESA </option>
                            <?php foreach($ListaFullDetalleUsuarios as $usuarios) {?>
                                                
                                <option><?php echo $usuarios['id_empresa']?></option>
                            <?php }?>
                            </select>
                        </div>
            

                    <button type="submit" value="proceder" name="btnAccion"  
                                style="
                                    margin-top: 0,2%;
                                    margin-bottom: 3%;
                                    width: 100%;" 
                                >


                Seleccionar Empresa >> 


                </button>
                    
                </form>

                <!-- FIN FORMULARIO PARA  SELECCIONAR EMPRESA ASOCIADA -->



<?php if(!empty($_POST['empresa'])){ ?>


        <div class="card card-warning">
                      <div class="card-header">
                        <h3 class="card-title">Generar Nuevo Item</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <form action="" method="post">
                          <div class="row">
                                <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Profesional</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Enter ..." required>
                                </div>
                                </div>

                                
                                <div class="col-sm-6">
                                <label>Detalle asesoria</label>
                                    <input type="text" class="form-control" name="codigobarra" placeholder="Enter ..." required>
                                </div>



                                <div class="col-sm-6">
                                <label>Tema</label>
                                    <input type="text" class="form-control" name="preciocompra" placeholder="Enter ..." required>
                                </div>

                                <div class="col-sm-6">
                                <label>Contraparte </label>
                                    <input type="text" class="form-control" name="precioventa" placeholder="Enter ..." required>
                                </div>

                                <div class="col-sm-6">
                                <label>Ubicacion </label>
                                    <input type="text" class="form-control" name="precioventa" placeholder="Enter ..." required>
                                </div>


                                <div class="col-sm-6">
                                <label>Objetivo </label>
                                    <input type="text" class="form-control" name="precioventa" placeholder="Enter ..." required>
                                </div>


                                <div class="col-sm-6">
                                <label>Fecha </label>
                                    <input type="text" class="form-control" name="precioventa" placeholder="Enter ..." required>
                                </div>


                                <div class="col-sm-6">
                                <label>Responsable </label>
                                    <input type="text" class="form-control" name="precioventa" placeholder="Enter ..." required>
                                </div>


                            <a href="VistaCrearAsesoriaProfesional.php" style="
                                margin-top: 2%;
                                margin-bottom: 0px;
                                width: 100%;" 
                            >
                          
                                <button class="btn btn-info"  type="submit"  name="btnAccion" value="guardarAsesoria">
                                    Generar asesoria>> 
                                </button> 
                            </a>
                        </form>
                      </div>
                    </div>
            </div>       

            <?php } ?>


            
    </div>

  
</div>



 <?php include("piePagina.php"); ?>


 <?php } ?>