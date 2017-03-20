<?php include("header.php"); ?>
		
		<div id="contact" class="container-fluid bg-grey ajuste" style="padding-top: 0px;">
			<h2 class="text-center" style="margin-bottom: 30px; ">CONTATO</h2>
			<div class="row">
				<div class="col-sm-5 text-left" style="font-size: 18px;">
					<p>Mande suas dúvidas e respondemos em 24 horas</p>
					<p><span class="glyphicon glyphicon-phone"></span> +55 11 2365-9658</p>
					<p><span class="glyphicon glyphicon-envelope"></span> lenda@doscarecas.com.br</p>
				</div>
				<div class="col-sm-7 ">
					<div class="row">
						<div class="col-sm-6" style="padding-left: 0;">
							<input type="text" class="form-control" id=name name="name" placeholder="Nome" required>
						</div>
						<div class="col-sm-6" style="padding-right: 0;">
							<input type="email" class="form-control" id=email name="email" placeholder="Email" required>
						</div>
					</div><br>
					<textarea name="comments" id="comments" rows="10" class="form-control" placeholder="Digite sua mensagem"></textarea><br>
					<div class="row">
						<div class="col-sm-12">
							<button class="btn btn-default pull-right" type="submit">Enviar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include("footer.php");?>