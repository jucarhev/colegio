<ol class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li><a href="<?php echo base_url('grados/index'); ?>">Grados</a></li>
	<li class="active">Show</li>
</ol>

<div class="panel panel-primary">

	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left" style="padding-top: 7.5px;"><?php if($grado->nombre == 'Primero'){echo 'Primer';}elseif($grado->nombre == 'Tercero'){echo 'Tercer';}else{echo $grado->nombre;} ?> <?php echo $grado->tipo; ?></h3>
		<div class="pull-right">
			<a href="<?php echo base_url('grados/index'); ?>" class="btn btn-success btn-sm">
			<span class="fa fa-times"></span> Close
			</a>
		</div>
	</div>

	<div class="panel-body">
		<div style="border-bottom: 1px solid #898989;margin-bottom: 20px;padding-bottom: 10px; ">
			Inicia el <strong><?php echo $grado->fecha_inicio; ?></strong> y termina el <strong><?php echo $grado->fecha_fin; ?></strong>
		</div>
		<h4>Grupos asociados</h4>
		<table class="table table-hover">
			<thead>
				<tr>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($grupos as $grupo): ?>
				<tr>
					<td><?= $grupo->letra; ?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>