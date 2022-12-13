
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
            <h1 class="m-0">Reportes Mensuales</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="VistapanelCliente.php">Inicio</a></li>
              <li class="breadcrumb-item active">Reportes</li>
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
                <h3 class="card-title">Generar Reporte</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
        
                  <div class="form-group">
                    <label for="buscarcliente">Reporte</label>
                    

                    <select class="form-control" id="id_usuario" name="id_usuario" require>
                
                <option>Selecciona el Cliente </option>
                 <?php foreach($Cliente as $clientes) {?>
              
                  <?php foreach($clientes as $nombreclientes) {?>
                    <?php if($nombreclientes['id_rol'] == "83CAB109-0591-4D3C-86F8-D4033CAAEDCC" ) {?>
                <option><?php echo $nombreclientes['rut_usuario'];?></option>
                <?php }?>
              <?php }?>
            <?php }?>
            </select>


                  </div>


                <!-- /.card-body -->

                <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="btnAccion" value="BuscarClienteReporte">Buscar</button>
                </div>
              </form>
        </div>
                              
        


        <?php if(!empty($ClienteFiltrado)){ ?> 





                

<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Detalle Reporte</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="reporte.php" method="GET">
                  <div class="row">
                        <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nombre Empresa</label>
                            <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" value="<?php echo $nombre_xempresa ?>" require>

                        </div>
                        </div>

                        
                        <div class="col-sm-6">
                        <label>Cantidad Accidentes</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="<?php echo $contadorAccidente ?>" require>
                        </div>



                        <div class="col-sm-6">
                        <label>Cantidad asesorias</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="<?php echo $contadorAsesoria ?>" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Cantidad visitas realizadas</label>
                            <input type="text" class="form-control" name="" placeholder=" "  value="<?php echo $contadorVisita ?>" require>
                        </div>


                        <div class="col-sm-6">
                        <label>Cantidad Capacitaciones realizadas</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="<?php echo $contadorCapacitacion ?>" require>
                        </div>


                        <div class="col-sm-6">
                        <label>Cantidad llamadas realizadas</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="<?php echo  $contadorLlamada ?>" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Fecha informe</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="<?php echo date('d/m/y'); ?>" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Nombre profesional acargo</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="<?php echo $profesional?>" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Estado de Mensualidad</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="<?php echo $nombre_estados?>" require>
                        </div>






                        <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Cantidad de Items</label>
                           
                            <input type="text" class="form-control" name="" placeholder=" " value="<?php echo $contador_items?>" require>
                        </div>
                    </div>



                    <a class="btn btn-info" href="reporte.php?
                    nombreEmpresa=<?php echo $nombre_xempresa ?>
                    &CantidadAccidentes=<?php echo $contadorAccidente ?>
                    &contadorAsesoria=<?php echo $contadorAsesoria ?>
                    &contadorVisita=<?php echo $contadorVisita ?>
                    &contadorCapacitacion=<?php echo $contadorCapacitacion ?>
                    &contadorLlamada=<?php echo  $contadorLlamada ?>
                    &profesional=<?php echo $profesional?>
                    &nombre_estados=<?php echo $nombre_estados?>
                    &contador_items=<?php echo $contador_items?>
                    
                    
                    " target="_blank"   type="submit"  name="btnAccion" value="BuscarClienteReporte"
                    style="
                        margin-top: 2%;
                        margin-bottom: 0px;
                        width: 100%;" 
                        >


                    Obtener Reporte >> 
                    </a>

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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        </div>






        <?php } ?>

        </div>
        <!-- /.row -->
      </div>



          


  


























</div>



 <?php include("piePagina.php"); ?>


 <?php } ?>


