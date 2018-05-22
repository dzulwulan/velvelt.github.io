  		$(document).ready(function(){
			$('#panel1, #panel2, #panel3').slideUp('slow');
			$("#1").click(function(){
				$("#panel1").slideToggle("slow");
			});
			$("#2").click(function(){
				$("#panel2").slideToggle("slow");
			});
			$("#3").click(function(){
				$("#panel3").slideToggle("slow");
			});

		});
