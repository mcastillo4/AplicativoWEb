
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
          <a href="#" class="d-block"><?php print_r($nombreRolCliente) ?></a>
        </div>
      </div>
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-header">MENU</li>

            <a href="VistapanelCliente.php" class="nav-link">
            <i class='ion-ios-arrow-right'></i>
              <p>
                Inicio

              </p>
            </a>




            <a href="VistaAsesoriaCliente.php" class="nav-link">
            <i class='fas fa-briefcase'></i>
              <p>
                Asesorias

              </p>
            </a>


            <a href="VistaAccidentes.php" class="nav-link">
            <i class='ion-ios-bolt-outline'></i>
              <p>
                Reporte de accidentes

              </p>
            </a>




            <a href="Vistamejorascliente.php" class="nav-link">
            <i class='fas fa-chart-line'> </i>
              <p>
              Mejoras
                
              </p>
            </a>

        </ul>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>