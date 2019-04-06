<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li><a href="<?php echo base_url('alumnos/index'); ?>">Alumnos</a></li>
  <li class="active">New</li>
</ol>


<div class="panel panel-primary">

	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Alumnos</h3>
		<div class="pull-right">
			<a href="<?php echo base_url('alumnos/index'); ?>" class="btn btn-success btn-sm">
			<span class="fa fa-times"></span> Close
			</a>
		</div>
	</div>

	<div class="panel-body">

		<?php echo form_open('alumnos/create'); ?>

			<div class="form-group">
				<label for="">Nombre</label>
				<?php 
				$data = array(
					'type'  => 'text',
					'name'  => 'nombre',
					'id'    => 'nombre',
					'value' => set_value('nombre'),
					'class' => 'form-control');
					echo form_input($data); ?>
				<?php echo form_error('nombre','<span class="help-block">','</span>'); ?>
			</div>

			<div class="form-group">
				<label for="">Apellido paterno</label>
				<?php 
				$data = array(
					'type'  => 'text',
					'name'  => 'apellido_paterno',
					'id'    => 'apellido_paterno',
					'value' => set_value('apellido_paterno'),
					'class' => 'form-control');
					echo form_input($data); ?>
				<?php echo form_error('apellido_paterno','<span class="help-block">','</span>'); ?>
			</div>

			<div class="form-group">
				<label for="">Apellido materno</label>
				<?php 
				$data = array(
					'type'  => 'text',
					'name'  => 'apellido_materno',
					'id'    => 'apellido_materno',
					'value' => set_value('apellido_materno'),
					'class' => 'form-control');
					echo form_input($data); ?>
				<?php echo form_error('apellido_materno','<span class="help-block">','</span>'); ?>
			</div>

			<?php echo form_submit('Aceptar', 'Guardar registro',array('class'=>'btn btn-primary')); ?>

		<?php echo form_close(); ?>
	</div>

</div>