<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/school.png">
	<title><?= $title;?></title>

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-flat.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fontawesome/css/font-awesome.css">

	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= base_url(); ?>">Home</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Reportes</a></li>
				<li><a href="#">Acividades</a></li>
				<li><a href="#">Curso</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">login</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Session <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Perfil</a></li>
						<li><a href="#">Herramientas</a></li>
						<li><a href="#">Cerrar session</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

<!-- Fin del  Navbar -->

<article class="container">
<div class="row">
	<div class="col-md-9">