<ol class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li><a href="<?php echo base_url('grupos/index'); ?>">Grupos</a></li>
	<li class="active">Show</li>
</ol>


<div class="panel panel-primary">
	
	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Editar </h3>
		<div class="pull-right">
			<a href="<?php echo base_url('alumnos/asignar'); ?>/<?= $grupo->id; ?>" class="btn btn-primary btn-sm">
				<span class="fa fa-plus"></span> Add students
			</a>
			<a href="<?php echo base_url('grupos/index'); ?>" class="btn btn-success btn-sm">
				<span class="fa fa-times"></span> Close
			</a>
		</div>
	</div>

	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Matricula</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($alumnos as $alumno): ?>
				<tr>
					<td><?php echo $alumno->id; ?></td>
					<td><?php echo $alumno->nombre.' '.$alumno->apellido_paterno.' '.$alumno->apellido_materno; ?></td>
					<td><?php echo $alumno->matricula; ?></td>
					<td>
						<div class="btn-group" role="group" aria-label="...">
							<a href="#" class="btn btn-sm btn-default">Left</a>
							<a href="#" class="btn btn-sm btn-default">Middle</a>
							<a href="#" class="btn btn-sm btn-default">Right</a>
						</div>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>