<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li><a href="<?php echo base_url('materias/index'); ?>">Materias</a></li>
  <li class="active">Edit</li>
</ol>

<div class="panel panel-primary">
	
	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Materias </h3>
		<div class="pull-right">
			<a href="<?php echo base_url('materias/index'); ?>" class="btn btn-success btn-sm">
				<span class="fa fa-times"></span> Close
			</a>
		</div>
	</div>

	<div class="panel-body">

		<?php echo form_open('materias/update'); ?>
		
		<?php if ($this->session->flashdata('Error')){ 
			echo $this->session->flashdata('Error'); } ?>

		<?php echo form_hidden('id', $materia->id); ?>

			<div class="form-group">
				<label for="">Nombre:</label>
				<?php 
				$data = array(
					'type'  => 'text',
					'name'  => 'nombre',
					'id'    => 'nombre',
					'value' => $materia->nombre,
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
					'value' => $materia->clave,
					'class' => 'form-control');
					echo form_input($data); ?>
				<?php echo form_error('clave','<span class="help-block">','</span>'); ?>
			</div>

			<?php echo form_submit('Aceptar', 'Editar registro',array('class'=>'btn btn-primary')); ?>

		<?php echo form_close(); ?>
	</div>

</div>