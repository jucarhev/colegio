<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>
			Grados
		</h3>
	</div>
	<div class="panel-body">

		<?php echo form_open('grados/create'); ?>

			<div class="form-group">
				<label for=""><?php echo 'Nombre'; ?></label>
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
				<label for="">Fecha inicio</label>
				<?php 
				$data = array(
					'type'  => 'date',
					'name'  => 'inicio',
					'id'    => 'inicio',
					'class' => 'form-control');
					echo form_input($data); ?>
			</div>

			<div class="form-group">
				<label for="">Fecha fin</label>
				<?php 
				$data = array(
					'type'  => 'date',
					'name'  => 'fin',
					'id'    => 'fin',
					'class' => 'form-control');
					echo form_input($data); ?>
			</div>

			<div class="form-group">
				<label for="">Tipo</label>
				<?php 
				$data = array(
					'Semestre'  => 'Semestre',
					'Cuatrimestre'  => 'Cuatrimestre');
					echo form_dropdown('tipo',$data,'Semestre',array('class'=>'form-control')); ?>
			</div>

			<?php echo form_submit('Aceptar', 'Guardar registro',array('class'=>'btn btn-primary')); ?>

		<?php echo form_close(); ?>
	</div>

</div>