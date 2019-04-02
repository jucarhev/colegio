<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li><a href="<?php echo base_url('grupos/index'); ?>">Grupos</a></li>
  <li class="active">New</li>
</ol>

<div class="panel panel-primary">
	
	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Nuevo </h3>
		<div class="pull-right">
			<a href="<?php echo base_url('grupos/index'); ?>" class="btn btn-success btn-sm">
				<span class="fa fa-times"></span> Close
			</a>
		</div>
	</div>

	<div class="panel-body">

		<?php echo form_open('grupos/create'); ?>

			<div class="form-group">
				<label for=""><?php echo 'Letra'; ?></label>
				<?php 
				$data = array(
					'type'  => 'text',
					'name'  => 'letra',
					'id'    => 'letra',
					'value' => set_value('letra'),
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
					echo form_dropdown('turno',$data,'Matutino',array('class'=>'form-control')); ?>
			</div>

			<div class="form-group">
				<label for="">asesor</label>
				<?php 
				$data = NULL;
				foreach ($profesores as $profesor) {
					$data[$profesor->id] = $profesor->nombre;
				}
					echo form_dropdown('id_asesor',$data,'Ninguno',array('class'=>'form-control')); ?>
			</div>

			<div class="form-group">
				<label for="">grado</label>
				<?php 
				$data = NULL;
				foreach ($grados as $grado) {
					$data[$grado->id] = $grado->nombre;
				}
				echo form_dropdown('id_grado',$data,'Ninguno',array('class'=>'form-control')); ?>
			</div>

			<?php echo form_submit('Aceptar', 'Guardar registro',array('class'=>'btn btn-primary')); ?>

		<?php echo form_close(); ?>
	</div>

</div>