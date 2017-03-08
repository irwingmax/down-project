<!DOCTYPE html>
<html lang="br">
<head>
	<meta charset="UTF-8">
	<title>A Lenda dos Carecas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body id="MyPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<div class="container text-center">
		<header class="col-sm-12 header" style="background-image: url('images/florest.jpg'); background-repeat:no-repeat;">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					    </button>  
					   <a href="#" class="navbar-brand"></a>
				  	</div>
				  	<div class="collapse navbar-collapse" id="MyNavbar">
					    <ul class="nav navbar-nav cl-effect-4" >
					    	<li><a href="#MyPage">HOME</a></li>
					        <li><a href="#">SOBRE O GAME</a></li>
					      	<li><a href="#">SOBRE A DOENCA</a></li>
					      	<li><a href="#about">QUEM SOMOS</a></li>
					      	<li><a href="#contact">FALE CONOSCO</a></li>
					    </ul>
					    <ul class="nav navbar-nav navbar-right cl-effect-4" style="margin-right: 30px; ">
					    	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
					    	<li><a href="#"><span class="glyphicon glyphicon-user"></span> CADASTRA-SE</a></li>
      						
					    </ul>
				  	</div>
				</div>			 
			</nav>

			<div class="jumbotron text-center">
				<h1>A LENDA DOS CARECAS</h1>
				<p>Seja livre, seja uma lenda!</p>
				
			</div>
		</header>
		
		</div>

		<div id="about" class="container text-center" style="background-color: #fdfdfd;">
			<div class="row" >
				<div class="col-sm-12">
					<img src="images/Logo1.jpg" alt="linkeo" width="700" height="560">
				</div>
				
			</div>
			<div class="row slideanim">
				<div class="col-sm-4 ">
					<p><strong>IRWING MAX</strong></p>
					<p>DESENVOLVEDOR WEB</p>
					<img src="images/Irwing.jpg" class="img-circle person" width="300" height="300">
				</div>
				<div class="col-sm-4" >
					<p><strong>DANIEL GUIMARÃES</strong></p>
					<p>DESENVOLVEDOR C#</p>
					<img src="images/daniel.jpg" class="img-circle person" width="300" height="300">
				</div>
				<div class="col-sm-4">
					<p><strong>PAULO CÉSAR</strong></p>
					<p>DESENVOLVEDOR JAVA</p>
					<img src="images/paulo.jpg" class="img-circle person" width="300" height="300">
				</div>
			</div>
			<div class="row slideanim">
				<div class="col-sm-6">
					<p><strong>JÉSSICA PRICILA</strong></p>
					<p>DESENVOLVEDOR FRONT-END</p>
					<img src="images/jess.jpg" class="img-circle person" width="300" height="300">
				</div>
				<div class="col-sm-6">
					<p><strong>THIAGO MONTEIRO</strong></p>
					<p>DESIGNER GRÁFICO</p>
					<img src="images/thiago.jpg" class="img-circle person" width="300" height="300">
				</div>
			</div>
		</div>

		<!--FALE CONOSCO-->
		<div id="contact" class="container-fluid bg-grey" style="margin: 150px;">
			<h2 class="text-center" style="margin-bottom: 30px; ">CONTATO</h2>
			<div class="row">
				<div class="col-sm-5 text-left" style="font-size: 18px;">
					<p>Mande suas dúvidas e respondemos em 24 horas</p>
					<p><span class="glyphicon glyphicon-phone"></span> +55 11 2365-9658</p>
					<p><span class="glyphicon glyphicon-envelope"></span> lenda@doscarecas.com.br</p>
				</div>
				<div class="col-sm-7 slideanim">
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
		<!--FOOTER-->
	<footer class="container-fluid text-center" style="background-color: #000;">
		<a href="#MyPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p style="color: white;">Todos os Direitos reservados</p>
	</footer>
	<script>
	$(document).ready(function(){
	  // Add smooth scrolling to all links in navbar + footer link
	  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

	   // Make sure this.hash has a value before overriding default behavior
	  if (this.hash !== "") {

	    // Prevent default anchor click behavior
	    event.preventDefault();

	    // Store hash
	    var hash = this.hash;

	    // Using jQuery's animate() method to add smooth page scroll
	    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
	    $('html, body').animate({
	      scrollTop: $(hash).offset().top
	    }, 900, function(){

	      // Add hash (#) to URL when done scrolling (default click behavior)
	      window.location.hash = hash;
	      });
	    } // End if
	  });
	})

	$(window).scroll(function() {
	  $(".slideanim").each(function(){
	    var pos = $(this).offset().top;

	    var winTop = $(window).scrollTop();
	    if (pos < winTop + 600) {
	      $(this).addClass("slide");
	    }
	  });
	});
	</script>
</body>
</html>