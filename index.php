<?php
// Start the session
  session_start();

  if($_SESSION["autenticado"] == 0){

     header("Location: login.php");
  }
  else
  {

 
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>.: iLab :. </title>
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

  <!-- Barra de navegación izquierda -->
   <?php  
      include('izq.php')
   ?>
  

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Encabezado - titulo -->
    <?php 
      include('header.php')
    ?>

    <!-- Contenido principal -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Página principal</h3>
          <!--
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          -->
        </div>



        <div class="card-body">
          <!--  empieza -->
            <section class="content">

              <div class="container-fluid">

              <div class="row">
              <div class="col-lg-3 col-6">

              <div class="small-box bg-info">
              <div class="inner">
              <h3>150</h3>
              <p>New Orders</p>
              </div>
              <div class="icon">
              <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>

              <div class="col-lg-3 col-6">

              <div class="small-box bg-success">
              <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>
              <p>Bounce Rate</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>

              <div class="col-lg-3 col-6">

              <div class="small-box bg-warning">
              <div class="inner">
              <h3>44</h3>
              <p>User Registrations</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>

              <div class="col-lg-3 col-6">

              <div class="small-box bg-danger">
              <div class="inner">
              <h3>65</h3>
              <p>Unique Visitors</p>
              </div>
              <div class="icon">
              <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>
             
              
              </div>  
               <div class="row" style="height: 200px;"></div>
              <div class="row"></div>
              <div class="row"></div>
          </section>

  

       </div>
     </div>
</section>
  <!-- termina contenido -->
</div>

  <!-- /.content-wrapper -->

  <?php
    include('down.php')
  ?>

  
</div>


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
