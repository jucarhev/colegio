<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Grados</h3>
	</div>
	<div class="panel-body">
		<?php 
foreach ($grados as $grado) {
	echo $grado->id;
}
 ?>
	</div>
</div>

<div class="col-md-12">
	<form action="" method="POST" class="m5">
		<div class="input-group" id="adv-search">
			<input type="text" class="form-control" placeholder="Search for snippets" />
			<div class="input-group-btn">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</div>
		</div>
	</form>
</div>