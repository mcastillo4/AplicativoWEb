<?php include('global/sesiones.php'); ?>
<?php include("cabecera.php"); ?>
<?php include("sidebar.php"); ?>
<?php include("modulos/asesorias.php"); ?>


<?php if($_SESSION['usuario']["id_rol"] == "3"){ ?>

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
                <h3 class="card-title">Generar Reporte Por Fecha</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="get">
                <div class="card-body">
        
                  <div class="form-group">
                    <label for="buscarproducto">Reporte</label>
                    <input autofocus type="text" class="form-control" id="buscarproducto" name="table_search" placeholder="Buscar por mes">
                  </div>


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Generar</button>
                </div>
              </form>
        </div>
                                          
                

<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Reporte</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="post">
                  <div class="row">
                        <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nombre Empresa</label>
                            <input type="text" class="form-control" name="nombre" value="" require>
                            <input type="hidden" class="form-control" name="id" value="" require>
                        </div>
                        </div>

                        
                        <div class="col-sm-6">
                        <label>Cantidad Accidentes</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="" require>
                        </div>



                        <div class="col-sm-6">
                        <label>Cantidad asesorias</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Cantidad mejoras solicitadas</label>
                            <input type="text" class="form-control" name="" placeholder=" "  value="" require>
                        </div>


                        <div class="col-sm-6">
                        <label>Cantidad mejoras exitosas</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="" require>
                        </div>


                        <div class="col-sm-6">
                        <label>Cantidad mejoras pendientes</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Fecha informe</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Nombre profesional acargo</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="" require>
                        </div>

                        <div class="col-sm-6">
                        <label>Estado de Mensualidad</label>
                            <input type="text" class="form-control" name="" placeholder=" " value="" require>
                        </div>







                        <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Proceso de asesorias</label>
                           
                            <input type="text" class="form-control" name="" placeholder=" " value=""  require>
                        </div>
                    </div>



                    <a href="VistaDescargaReporte.php" ><button class="btn btn-info"  type="submit"  name="btnAccion" value=""
                    style="
                        margin-top: 2%;
                        margin-bottom: 0px;
                        width: 100%;" 
                        >


                    Obtener Reporte >> 
                    </button> </a>
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








        </div>
        <!-- /.row -->
      </div>



          


  















</div>


 <?php include("piePagina.php"); ?>

 <?php } ?>