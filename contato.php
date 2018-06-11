<?php include("header.php"); ?>
	<div class="container bg-grey ajuste" style="padding-top: 0px;">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2 class="titulo-page">fale conosco</h2>
			</div>
		</div>
		<article>
			<div class="row">
				<div class="col-sm-12">
					<p class="text-center">Tem dúvidas? Sugestões? Alguma reclamação? Mande pra nós e iremos responder o mais rápido possível</p>
					<form action="send-mail.php" method="post" accept-charset="utf-8">
						<div class="form-group">
							<input type="text" class="form-control" id=name name="name" placeholder="Nome" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id=email name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<textarea name="comments" id="comments" name="comments" rows="10" class="form-control" placeholder="Digite sua mensagem"></textarea>
						</div>
						<button class="btn btn-default" type="submit">Enviar</button>
					</form>
				</div>
			</div>
		</article>
	</div>
<?php include("footer.php");?>