<?php
define ( "BASE_URL", "/Proyecto/views/");
/* Llamamos al archivo de conexion.php*/
require_once("../config/conexion.php");
if(isset($_SESSION["id"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Dashboard</title>

	<?php
    require_once("modulos/head.php");
    ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

	<!-- Preloader -->
	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
	</div>

	<!-- Navbar -->
	<?php
    require_once("modulos/header.php");
    ?>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index3.html" class="brand-link">
			<img src="imagenes/santiago.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<span class="brand-text font-weight-light">Santiago Medina</span>
		</a>

		
		<!-- Sidebar -->
		<?php
		require_once("modulos/menu.php");
		?>

			<!-- SidebarSearch Form -->


			<!-- Sidebar Menu -->
			
			<?php
			require_once("modulos/menu.php");
			?>
			

			<nav class="mt-2">
        

		<li class="nav-item">
		  <a href="#" class="nav-link">
			<i class="nav-icon far fa-envelope"></i>
			<p>
			  Informacion
			  <i class="fas fa-angle-left right"></i>
			</p>
		  </a>
		  <ul class="nav nav-treeview">
			<li class="nav-item">
			  <a href="usuarios.php" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Usuarios</p>
			  </a>
			</li>
			<li class="nav-item">
			  <a href="RedesSociales.php" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Redes Sociales</p>
			  </a>
			</li>
			<li class="nav-item">
			  <a href="../mailbox/read-mail.html" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Estudios</p>
			  </a>
			  </li>
			<li class="nav-item">
			  <a href="../mailbox/read-mail.html" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Habilidades</p>
			  </a>
			</li>
			</li>
			<li class="nav-item">
			  <a href="../mailbox/read-mail.html" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Informacion Personal</p>
			  </a>
			</li>
			</li>
		  </ul>
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
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Dashboard</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Dashboard v1</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>

		 <!-- Main content -->
		 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
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
          <!-- ./col -->
        </div>
        <!-- /.row -->

		<!-- /.content-header -->

		<!-- Main content -->
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<?php
    require_once("modulos/footer.php");
	?>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php
require_once("modulos/js.php");
?>


</body>
</html>
<?php
	}else{
		/* Si no s iniciado sesion se redireccionra a la ventana principal */
	 header("Location:".Conectar::ruta()."views/404.php"); 
	}
?>