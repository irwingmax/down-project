<?php include("header.php"); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2 class="titulo-page">PARCEIROS</h2>
			</div>
		</div>
	</div>
	<article>
			<div class="row">
				<div class="col-sm-12">
					<p class="text-center">Já usou nosso brinquedo? Gostou? Deixa resgistrado aqui pra gente saber</p>
					<form action="" method="get" accept-charset="utf-8">
						<div class="form-group">
							<label for="name">Nome da Instituição: </label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>
						<div class="form-group">
							<label for="date">Quando foi adiquirido o brinquedo? </label>
							<input type="date" class="form-control" id="date" name="date" placeholder="" required>
						</div>
						<div class="form-group">
							<label for="comments">Diga o que achou do brinquedo: </label>
							<textarea name="comments" id="comments" rows="5" class="form-control"></textarea>
						</div>
						<button class="btn btn-default" type="submit">Enviar</button>
					</form>
				</div>
			</div>
		</article>
<?php include("footer.php"); ?>