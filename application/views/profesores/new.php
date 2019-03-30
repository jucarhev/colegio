<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>
			Grados
		</h3>
	</div>
	<div class="panel-body">

		<?php echo form_open('profesores/create'); ?>

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

			<div class="form-group">
				<label for="">Domicilio</label>
				<?php 
				$data = array(
					'type'  => 'text',
					'name'  => 'domicilio',
					'id'    => 'domicilio',
					'value' => set_value('domicilio'),
					'rows' => '2',
					'class' => 'form-control');
					echo form_textarea($data); ?>
				<?php echo form_error('domicilio','<span class="help-block">','</span>'); ?>
			</div>

			<div class="form-group">
				<label for="">Fecha de nacimiento</label>
				<?php 
				$data = array(
					'type'  => 'date',
					'name'  => 'fecha_nacimiento',
					'id'    => 'fecha_nacimiento',
					'class' => 'form-control');
					echo form_input($data); ?>
			</div>

			<?php echo form_submit('Aceptar', 'Guardar registro',array('class'=>'btn btn-primary')); ?>

		<?php echo form_close(); ?>
	</div>

</div>