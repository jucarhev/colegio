<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>
			Grados
		</h3>
	</div>
	<div class="panel-body">

		<?php echo form_open('materias/store'); ?>

			<div class="form-group">
				<label for="">Nombre:</label>
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
				<label for="">Clave:</label>
				<?php 
				$data = array(
					'type'  => 'text',
					'name'  => 'clave',
					'id'    => 'clave',
					'value' => set_value('clave'),
					'class' => 'form-control');
					echo form_input($data); ?>
				<?php echo form_error('clave','<span class="help-block">','</span>'); ?>
			</div>

			<?php echo form_submit('Aceptar', 'Guardar registro',array('class'=>'btn btn-primary')); ?>

		<?php echo form_close(); ?>
	</div>

</div>