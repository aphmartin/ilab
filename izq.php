<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/logo.jpg" alt="Taller Web" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">iLab</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="Usuario">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["username"]; ?></a>
        </div>
      </div>
    </div>


<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-header">Operaciones</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Catalogos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="cataulas.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Aulas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="catcomputadoras.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Computadoras
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="catinventario.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Inventarios
                        </p>
                    </a>
                </li>
            </ul>
        </li>

        <li class = "nav-header">------------------------------------------------</li>
          
        <li class = "nav-header">Reportes</li>
        <li class="nav-item">
            <a href="reportes.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Reportes
              </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="tickets.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tickets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
        </li>

        <li class = "nav-header">------------------------------------------------</li>
          
        <li class="nav-header">Configuración</li>
            
        <li class="nav-item">
            <a href="catusuarios.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Usuario
                </p>
            </a>
        </li>
          
        <li class = "nav-header">------------------------------------------------</li>
           
        <li class="nav-item">
            <a href="cerrar.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Cerrar
                </p>
            </a>
        </li>

    </ul>
</nav>

</aside>