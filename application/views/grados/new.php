<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>
			Grados
		</h3>
	</div>
	<div class="panel-body">

		<form action="<?= base_url('grados/create') ?>" method="POST" role="form">

			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del grado" value="<?php echo set_value('nombre'); ?>">
				<?php echo form_error('nombre','<span class="help-block">','</span>'); ?>
			</div>

			<div class="form-group">
				<label for="">Fecha inicio</label>
				<input type="date" class="form-control" id="inicio" name="inicio">
			</div>

			<div class="form-group">
				<label for="">Fecha fin</label>
				<input type="date" class="form-control" id="fin" name="fin">
			</div>

			<div class="form-group">
				<label for="">Tipo</label>
				<select name="tipo" id="tipo" class="form-control">
					<option value="Semestre">Semestre</option>
					<option value="Cuatrimestre">Cuatrimestre</option>
				</select>
				<?php echo form_error('tipo'); ?>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</div>