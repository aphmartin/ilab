<?php
// Start the session
session_start();
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



        <div class="card-body" style="display: flex; justify-content: center; flex-wrap: wrap">
          <!--  empieza -->
          <div class="login-box">
  <div class="login-logo">
    <p><b>Acceso a sistema</b> Web</p>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa los datos solicitados</p>
      <?php if (isset($_SESSION["error"])): ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION["error"]; unset($_SESSION["error"]); ?>
          </div>
      <?php endif; ?>
      <form action="validalogin.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Correo electrónico" name="email" value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="pwd">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


  

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