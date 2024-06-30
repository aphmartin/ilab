<?php
// Start the session
session_start();

if ($_SESSION["autenticado"] == 0) {
    header("Location: login.php");
} else {
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
        include('izq.php');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Catalogo de Usuarios</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

        <div class="card">
        <div class="card-header">
        <h3 class="card-title">Lista de Usuarios</h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
        </button>
        </div>
        </div>
        <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                <th style="display: none;">
                ID
                </th>
                <th style="width: 30%">
                Nombre Completo
                </th>
                <th style="width: 20%">
                Perfil
                </th>
                <th style="width: 20%">
                Correo
                </th>
                <th style="width: 18%">
                Status
                </th>
                <th style="width: 10%">
                </th>
                </tr>
            </thead>
        <tbody>
            <?php
                $sql = "SELECT idK, CONCAT(nombre, ' ', apellidos) AS nombreCompleto, idPerfil, correo, isActivo 
                        FROM usuarios 
                        ORDER BY isActivo DESC, nombreCompleto ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $idK = $row['idK'];
                        $nombreCompleto = $row['nombreCompleto'];
                        $idPerfil = $row['idPerfil'];
                        $correo = $row['correo'];
                        $activo = $row['isActivo'];
                        $perfilTexto = '';
                        switch ($idPerfil) {
                            case 1:
                                $perfilTexto = 'Administrador';
                                break;
                            case 2:
                                $perfilTexto = 'Usuario';
                                break;
                            default:
                                $perfilTexto = 'Desconocido';
                        }
                        ?>  
                        <tr>
                            <td style="display: none;">
                                <?php echo $idK; ?>
                            </td>
                            <td>
                                <?php echo $nombreCompleto; ?>
                            </td>
                            <td>
                                <?php echo $perfilTexto; ?>
                            </td>
                            <td>
                                <?php echo $correo; ?>
                            </td>
                            <td>
                                <?php if ($activo == 1) {
                                    echo "<span class='badge badge-success'>Activo</span>";
                                } else {
                                    echo "<span class='badge badge-danger'>Inactivo</span>";
                                } ?>
                            </td>
                            <td class="project-actions text-right">
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
