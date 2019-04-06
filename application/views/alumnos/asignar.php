<ol class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li><a href="<?php echo base_url('grupos/index'); ?>">Grupos</a></li>
	<li><a href="<?php echo base_url('grupos/show'); ?>/<?= $id_grupo; ?>">Show</a></li>
	<li class="active">Asignar</li>
</ol>


<div class="panel panel-primary">
	
	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Editar </h3>
		<div class="pull-right">
			<a href="<?php echo base_url('grupos/show'); ?>/<?= $id_grupo; ?>" class="btn btn-success btn-sm">
				<span class="fa fa-times"></span> Close
			</a>
		</div>
	</div>

	<div class="panel-body">
		
		<?php echo form_open('alumnos/asignar_grupo'); ?>

			<?php echo form_hidden('id_grupo', $id_grupo); ?>

			<div class="form-group">
				<label for="">Alumno</label>
				<?php 
				$data = NULL;
				foreach ($alumnos as $alumno) {
					$data[$alumno->id] = $alumno->nombre;
				}
					echo form_dropdown('id_alumno',$data,'Ninguno',array('class'=>'form-control')); ?>
			</div>

		<?php echo form_submit('Aceptar', 'Guardar registro',array('class'=>'btn btn-primary')); ?>
		<?php echo form_close(); ?>

	</div>
</div>