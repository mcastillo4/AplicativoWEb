

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="Vistapanel.php" class="brand-link">
      <img src="https://yt3.ggpht.com/ytc/AMLnZu-elqtdOPNnVBcs6SfoMa1ZOr2-VnQmWlv7MvJnpQ=s900-c-k-c0x00ffffff-no-rj" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PREVAC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php print_r (strval(($_SESSION['usuario']['data']['imagen'] ))) ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php print_r($nombreRol) ?></a>
        </div>
      </div>

 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-header">MENU</li>

            <a href="Vistapaneladministrativo.php" class="nav-link">
            <i class='ion-ios-arrow-right'></i>
              <p>
                Inicio

              </p>
            </a>



            <a href="VistaAgregarDireccion.php" class="nav-link">
            <i class='fas fa-briefcase'></i>
              <p>
                Agregar Direccion

              </p>
            </a>



            <a href="VistaMantenedorContrato.php" class="nav-link">
            <i class='fas fa-briefcase'></i>
              <p>
                Mantenedor Contrato

              </p>
            </a>



            <a href="VistaAgregarServicio.php" class="nav-link">
            <i class='fas fa-briefcase'></i>
              <p>
                Agregar Servicios

              </p>
            </a>



            
            <a href="VistaAgregarActividad.php" class="nav-link">
            <i class='fas fa-briefcase'></i>
              <p>
                Agregar Detalle Servicios

              </p>
            </a>


            <a href="VistaAgregarEmpresa.php" class="nav-link">
            <i class='fas fa-briefcase'></i>
              <p>
                Agregar Empresa

              </p>
            </a>


            <a href="VistaMantenedorCliente.php" class="nav-link">
            <i class='fas fa-briefcase'></i>
              <p>
                Agregar Cliente

              </p>
            </a>




            <a href="VistaModificarCliente.php" class="nav-link">
            <i class='fas fa-briefcase'></i>
              <p>
                Modificar Clientes

              </p>
            </a>

            <a href="VistaVerCliente.php" class="nav-link">
            <i class='fas fa-briefcase'></i>
              <p>
               Ver Clientes

              </p>
            </a>


            <a href="VistaMantenedorProfesional.php" class="nav-link">
            <i class='ion-ios-bolt-outline'></i>
              <p>
                Agregar Profesional
                </p>
            </a>

            <a href="VistaModificarProfesional.php" class="nav-link">
            <i class='ion-ios-bolt-outline'></i>
              <p>
                Modificar Profesional
                </p>
            </a>


            <a href="VistaVerProfesional.php" class="nav-link">
            <i class='ion-ios-bolt-outline'></i>
              <p>
                Ver Profesional
                </p>
            </a>


            <a href="VistaPagoClientes.php" class="nav-link">
            <i class='ion-ios-bolt-outline'></i>
              <p>
                Pagos Clientes
                </p>
            </a>

            
            <a href="VistaAsesoriaAdministrador.php" class="nav-link">
            <i class='ion-ios-bolt-outline'></i>
              <p>
                Ver Actividades
                </p>
            </a>
            

            
            <a href="VistaReportesAdministradorCliente.php" class="nav-link">
            <i class='ion-ios-bolt-outline'></i>
              <p>
                Reportes Cliente
                </p>
            </a>
            
            <a href="VistaReportesAdministradorGlobal.php" class="nav-link">
            <i class='ion-ios-bolt-outline'></i>
              <p>
                Reportes Global
                </p>
            </a>
            
            









        </ul>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>