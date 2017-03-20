			<!--FOOTER-->
	<footer class="container-fluid text-center" style="background-color: #000;">
		<a href="#MyPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p style="color: white;">Todos os Direitos reservados</p>
	</footer>
	<script>
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