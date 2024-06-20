<?php
// Start the session
  session_start();

  if($_SESSION["autenticado"] == 0){

     header("Location: login.php");
  }
  else
  {

 include 'conexionBD.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>.: Taller Web:. </title>
   <!-- puedes trabajar un concepto favicon -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!--Favicon-->
  <link rel="icon" type="image/x-icon" href="dist/img/ilab.png">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="principal.php" class="brand-link">
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

    

      <!-- Sidebar Menu -->
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
                  <p>Computadoras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="catinventario.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inventarios</p>
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
                Usuarios
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


      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Catalogo de Aulas</h1>
          </div>
          <div class="col-sm-6">
            <a href="regaulas.php"><button type="button" class="btn btn-primary">Registrar Aula</button></a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

<div class="card">
<div class="card-header">
<h3 class="card-title">Lista de Aulas</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body p-0">
<table class="table table-striped projects">
    <thead>
        <tr>
        <th style="width: 1%">
        ID
        </th>
        <th style="width: 30%">
        Aula
        </th>
        
        
        <th style="width: 18%">
        Status
        </th>
        <th style="width: 20%">
        </th>
        </tr>
    </thead>
<tbody>
      <?php
        $sql = "SELECT idk, nombre, isActivo FROM aulas ";
      //echo $sql;
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
              $idk=$row['idk'];
              $nombre=$row['nombre'];
              $activo=$row['isActivo'];
              ?>  
              <tr>
          <td>
            <?php echo $idk;?>
          </td>
          <td>
              <?php echo $nombre;?>
          </td>
          <td>
          <?php if($activo == 1){
            echo "<span class='badge badge-success'>Activo</span>";
          }else{
            echo "<span class='badge badge-danger'>Inactivo</span>";
          } ?>
            
          </td>
         
        
                <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="#">
                <i class="fas fa-folder">
                </i>
                View
                </a>
                <a class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                <i class="fas fa-trash">
                </i>
                Delete
                </a>
          </td>
      </tr>

              <?php
            }
       
      } else {
       
        echo "No hay datos para mostrar";
      }
      $conn->close();
      ?>
      

</tbody>
</table>
</div>
</div>

</section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="principal.php">Taller Web</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

<?php

  }

?>
