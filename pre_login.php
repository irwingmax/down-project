<!DOCTYPE html>
<html lang="br">
<head>
	<meta charset="UTF-8">
	<title>A Lenda dos Carecas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body class="full">

		<div class="box ">
			<div class="jumbotron text-center slideanim">
				<h1>EM BREVE</h1>
				<br>
				<button class="btn-site "><a href="game.php">VOLTAR PARA O SITE</a></button>
			</div>
		</div>	
	<script>
		$(document).ready(function(){
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
		
