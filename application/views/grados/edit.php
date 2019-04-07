<ol class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li><a href="<?php echo base_url('grados/index'); ?>">Grados</a></li>
	<li class="active">Edit</li>
</ol>

<div class="panel panel-primary">

	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Editar </h3>
		<div class="pull-right">
			<a href="<?php echo base_url('grados/index'); ?>" class="btn btn-success btn-sm">
				<span class="fa fa-times"></span> Close
			</a>
		</div>
	</div>

	<div class="panel-body">

		<?php if ($this->session->flashdata('Error')){ 
			echo $this->session->flashdata('Error'); } ?>
		<?php echo form_open('grados/update'); ?>

			<?php echo form_hidden('id', $grado->id); ?>

			<div class="form-group">
				<label for="">Nombre</label>
				<?php 
				$data = array(
					'type'  => 'text',
					'name'  => 'nombre',
					'id'    => 'nombre',
					'value' => $grado->nombre,
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
					'value' => $grado->fecha_inicio,
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
					'value' => $grado->fecha_fin,
					'class' => 'form-control');
					echo form_input($data); ?>
			</div>

			<div class="form-group">
				<label for="">Tipo</label>
				<?php 
				$data = array(
					'Semestre'  => 'Semestre',
					'Cuatrimestre'  => 'Cuatrimestre');
					echo form_dropdown('tipo',$data,$grado->tipo,array('class'=>'form-control')); ?>
			</div>

			<?php echo form_submit('Aceptar', 'Guardar registro',array('class'=>'btn btn-primary')); ?>

		<?php echo form_close(); ?>
	</div>

</div>