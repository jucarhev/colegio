<ol class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li><a href="<?php echo base_url('grados/index'); ?>">Grados</a></li>
	<li class="active">New</li>
</ol>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>
			Grados
		</h3>
	</div>
	<div class="panel-body">
		<?php echo $grado->nombre; ?>
		<?php echo $grado->inicio; ?>
		<?php echo $grado->fin; ?>
		<?php echo $grado->tipo; ?>
	</div>
</div>