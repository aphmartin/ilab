<?php
// Start the session
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro De Computadoras</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="principal.html"><b>Registro de</b> Computadoras</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresar datos de las computadoras</p>

      <form action="validaRegComp.php" method="post">
        <div class="input-group mb-3">
          <input disabled type="text" class="form-control" placeholder="Folio" name="folio">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nombre" name="nombre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <label for="lang">Aulas</label>
            <select name="aulas" id="selectAul">
              <option value="k01">K01</option>
              <option value="k02">K02</option>
              <option value="c008">C008</option>
            </select>
          <div class="input-group-append">
          </div>
          <div class="input-group mb-3">

          <label for="lang">Caracteristicas</label>
          <textarea name="textarea" rows="10" cols="50"></textarea>
        </div>
      </div>
        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
        
      </form>
      <a href="catcomputadoras.php"><button style="margin-top: 10px" class="btn btn-primary btn-block">Cancelar</button></a>

      
      <!-- /.social-auth-links -->

      
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
