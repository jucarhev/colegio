<div class="panel panel-primary">
	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Materias</h3>
		<div class="pull-right">
			<a href="<?php echo base_url('materias/new'); ?>" class="btn btn-success btn-sm">
				<span class="fa fa-plus"></span>
			</a>
		</div>
	</div>

	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Clave</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($materias as $materia): ?>
				<tr>
					<td><?= $materia->id; ?></td>
					<td><?= $materia->nombre; ?></td>
					<td><?= $materia->clave; ?></td>
					<td>
						<a href="<?= base_url(); ?>materias/delete/<?php echo $materia->id; ?>" class="btn btn-danger btn-sm">
							<spam class="fa fa-trash"></spam>
						</a>
						<a href="<?= base_url(); ?>materias/edit/<?php echo $materia->id; ?>" class="btn btn-success btn-sm">
							<spam class="fa fa-pencil"></spam>
						</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

	<div class="panel-footer">
		<?= $this->pagination->create_links(); ?>
	</div>
</div>


<?php if ($this->session->flashdata('Success')){ ?>
			<script>
				Swal.fire(
					'Satisfactorio',
					'Peticion realizada con exito',
					'success'
					)
			</script>
		<?php } ?>