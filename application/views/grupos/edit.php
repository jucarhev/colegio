<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>
			grupos
		</h3>
	</div>
	<div class="panel-body">

		<?php echo form_open('grupos/update'); ?>

			<?php echo form_hidden('id', $grupo->id); ?>

			<div class="form-group">
				<label for="">Letra</label>
				<?php 
				$data = array(
					'type'  => 'text',
					'name'  => 'letra',
					'id'    => 'letra',
					'value' => $grupo->letra,
					'class' => 'form-control');
					echo form_input($data); ?>
				<?php echo form_error('letra','<span class="help-block">','</span>'); ?>
			</div>

			<div class="form-group">
				<label for="">Tipo</label>
				<?php 
				$data = array(
					'Matutino'  => 'Matutino',
					'Vespertino'  => 'Vespertino');
					echo form_dropdown('turno',$data,$grupo->turno,array('class'=>'form-control')); ?>
			</div>

			<div class="form-group">
				<label for="">asesor</label>
				<?php 
				$data = NULL;
				foreach ($profesores as $profesor) {
					$data[$profesor->id] = $profesor->nombre;
				}
					echo form_dropdown('id_asesor',$data,$grupo->id_asesor,array('class'=>'form-control')); ?>
			</div>

			<div class="form-group">
				<label for="">grado</label>
				<?php 
				$data = NULL;
				foreach ($grados as $grado) {
					$data[$grado->id] = $grado->nombre;
				}
				echo form_dropdown('id_grado',$data,$grupo->id_grado,array('class'=>'form-control')); ?>
			</div>

			<?php echo form_submit('Aceptar', 'Guardar registro',array('class'=>'btn btn-primary')); ?>

		<?php echo form_close(); ?>
	</div>

</div>