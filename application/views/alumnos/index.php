<ol class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li class="active">Alumnos</li>
</ol>

<div class="panel panel-primary">
	
	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Alumnos</h3>
		<div class="pull-right">
			<a href="<?php echo base_url('alumnos/new'); ?>" class="btn btn-success btn-sm">
			<span class="fa fa-plus"></span> Add
			</a>
		</div>
	</div>

	<div class="panel-body">
		
		<div class="col-md-12">
			<?php echo form_open('alumnos/search',array('class'=>'m5')); ?>
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
					<th>apellido_paterno</th>
					<th>apellido_materno</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($alumnos as $alumno): ?>
				<tr>
					<td><?= $alumno->id; ?></td>
					<td><?= $alumno->nombre; ?></td>
					<td><?= $alumno->apellido_paterno; ?></td>
					<td><?= $alumno->apellido_materno; ?></td>

					<td>
						<a href="<?= base_url(); ?>alumnos/delete/<?= $alumno->id; ?>" class="btn btn-danger btn-sm">
							<span class="fa fa-trash"></span>
						</a>
						<a href="<?= base_url(); ?>alumnos/edit/<?= $alumno->id; ?>" class="btn btn-warning btn-sm">
							<span class="fa fa-pencil"></span>
						</a>
						<a href="#" onclick="show(<?= $alumno->id; ?>);return false" class="btn btn-info btn-sm"
							id="show">
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



<script>
	function show(id) {
		var csrf_value = '<?php echo $this->security->get_csrf_hash(); ?>';
		$('#myModal').modal('show');
		$.post('<?php echo base_url(); ?>grados/show/'+id,{'csrf_test_name': csrf_value }, function(data) {
			$('.modal-body').html(data);
		},'json');
	}
</script>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>