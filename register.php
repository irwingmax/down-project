<?php include("header.php") ?>

	<div class="container" style="padding: 80px 150px 80px 80px;">
		<form action="" class="form-horizontal">
			<div class="form-group">
				<label for="name" class="control-label col-sm-2">Nome Completo: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Digite seu nome Completo" required>
				</div>
				
			</div>
			<div class="form-group">
				<label for="name" class="control-label col-sm-2">CPF: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Digite seu CPF" required>
				</div>
				
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button class="btn btn-default">Cadastrar</button>
				</div>
			</div>
			
		</form>
	</div>

<?php include("footer.php") ?>