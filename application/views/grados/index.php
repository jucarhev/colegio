<div class="panel panel-primary">
	
	<div class="panel-heading clearfix">
      <h3 class="panel-title pull-left" style="padding-top: 7.5px;">Grados</h3>
      <div class="pull-right">
        <a href="<?php echo base_url('grados/new'); ?>" class="btn btn-success btn-sm">
        	<span class="fa fa-plus"></span>
        </a>
      </div>
    </div>

	<div class="panel-body">
		
		<div class="col-md-12">
			<?php echo form_open('grados/search',array('class'=>'m5')); ?>
			<div class="input-group" id="adv-search">
				<input type="text" class="form-control" name="search" placeholder="Search for snippets" />
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
				<?php foreach($grados as $grado): ?>
				<tr>
					<td><?= $grado->id; ?></td>
					<td><?= $grado->nombre; ?></td>
					<td><?= $grado->tipo; ?></td>
					<td><?= $grado->inicio; ?></td>
					<td><?= $grado->fin; ?></td>
					<td><?= $grado->status; ?></td>
					<td>
						<a href="<?= base_url(); ?>grados/delete/<?= $grado->id; ?>" class="btn btn-danger btn-sm">
							<span class="fa fa-trash"></span>
						</a>
						<a href="<?= base_url(); ?>grados/edit/<?= $grado->id; ?>" class="btn btn-warning btn-sm">
							<span class="fa fa-pencil"></span>
						</a>
						<a href="<?= base_url(); ?>grados/show/<?= $grado->id; ?>" class="btn btn-info btn-sm">
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