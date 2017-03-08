<!DOCTYPE html>
<html lang="br">
<head>
	<meta charset="UTF-8">
	<title>A Lenda dos Carecas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body id="MyPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<div class="container text-center">
		<header class="col-sm-12 header" style="background-image: url('images/florest.jpg'); background-repeat:no-repeat; height: 600px;">
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
					    	<li><a href="index.php">HOME</a></li>
					        <li><a href="index.php#game">SOBRE O GAME</a></li>
					      	<li><a href="#doenca">SOBRE A DOENÇA</a></li>
					      	<li><a href="#about">QUEM SOMOS</a></li>
					      	<li><a href="#contact">FALE CONOSCO</a></li>
					    </ul>
					    <ul class="nav navbar-nav navbar-right cl-effect-4" style="margin-right: 30px; ">
					    	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
					    	<li><a href="pre_cadastro.php"><span class="glyphicon glyphicon-user"></span> CADASTRA-SE</a></li>
      						
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