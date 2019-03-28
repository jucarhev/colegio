<div class="panel panel-primary">
	
	<div class="panel-heading clearfix">
      <h3 class="panel-title pull-left" style="padding-top: 7.5px;">profesores</h3>
      <div class="pull-right">
        <a href="<?php echo base_url('profesores/new'); ?>" class="btn btn-success btn-sm">
        	<span class="fa fa-plus"></span>
        </a>
      </div>
    </div>

	<div class="panel-body">
		
		<div class="col-md-12">
			<?php echo form_open('profesores/search',array('class'=>'m5')); ?>
			<div class="input-group" id="adv-search">
				<?php echo form_input(["type"=>"text","name"=>"search","class"=>"form-control","placeholder"=>"Buscar"]); ?>
				<div class="input-group-btn">
					<div class="btn-group" role="group">
						<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
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

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Tipo</th>
					<th>Fecha inicio</th>
					<th>Fecha fin</th>
					<th>Status</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($profesores as $profesor): ?>
				<tr>
					<td><?= $profesor->id; ?></td>
					<td><?= $profesor->nombre; ?></td>
					<td><?= $profesor->apellido_paterno; ?></td>
					<td><?= $profesor->apellido_materno; ?></td>
					<td><?= $profesor->genero; ?></td>
					<td><?= $profesor->fecha_nacimiento; ?></td>
					<td>
						<a href="<?= base_url(); ?>profesores/delete/<?= $profesor->id; ?>" class="btn btn-danger btn-sm">
							<span class="fa fa-trash"></span>
						</a>
						<a href="<?= base_url(); ?>profesores/edit/<?= $profesor->id; ?>" class="btn btn-warning btn-sm">
							<span class="fa fa-pencil"></span>
						</a>
						<a href="<?= base_url(); ?>profesores/show/<?= $profesor->id; ?>" class="btn btn-info btn-sm">
							<span class="fa fa-eye"></span>
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