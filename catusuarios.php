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

  <!-- Barra de navegación izquierda -->
  <?php  
      include('izq.php')
   ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Catalogo de Tickets</h1>
          </div>
          <div class="col-sm-6">
            <a href="regusuarios.php"><button type="button" class="btn btn-primary">Registrar Usuario</button></a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

<div class="card">
<div class="card-header">
<h3 class="card-title">Lista de Tickets</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
<!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
<i class="fas fa-times"></i>
</button> -->
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
        Ticket
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
        $sql = "SELECT idk, nombre, isActivo FROM ticket";
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
      //$conn->close();
      ?>
      

</tbody>
</table>
</div>

</div>

<div class="card">
<div class="card-header">
<h3 class="card-title">Lista de Tickets</h3>
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
        <th style="width: 2%">
        ID
        </th>
        <th style="width: 2%">
        ID Computadora
        </th>
        <th style="width: 2%">
        ID Aula
        </th>
        <th style="width: 2%">
        ID Usuario
        </th>
        <th style="width: 50%">
        Descripcion
        </th>
        <th style="width: 10%">
        Fecha
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
        $sql = "SELECT idk, nombre, isActivo FROM ticket ";
      //echo $sql;
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
              $idk=$row['idk'];
              $idComp=$row['id_computadora'];
              $idAula=$row['id_aula'];
              $idUsuario=$row['id_usuario'];
              $descripcion=$row['descripcion'];
              $activo=$row['isActivo'];
              ?>  
              <tr>
          <td>
            <?php echo $idk;?>
          </td>
          <td>
              <?php echo $idComp;?>
          </td>
          <td>
              <?php echo $idAula;?>
          </td>
          <td>
              <?php echo $idUsuario;?>
          </td>
          <td>
              <?php echo $descripcion;?>
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
