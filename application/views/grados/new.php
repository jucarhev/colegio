<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>
			Grados
		</h3>
	</div>
	<div class="panel-body">
		
		<div class="col-md-12">
			
			<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

		</div>

		<form action="" method="POST" role="form">

			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del grado">
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
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>