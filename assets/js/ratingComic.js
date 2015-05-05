$(document).ready(function() {
	
	/*$('.rate_widget').each(function(i) {
		var widget = this;
		var out_data = {
			widget_id : $(widget).attr('id'),
			fetch : 1
		};
		$.post(
			'comment_process.php'
			)
	})
	*/

	$("#star1").on('mouseover', function() {
		$(this).attr('src', 'assets/img/yellow_star.png');
		$('#star2').attr('src', 'assets/img/white_star.gif');
		$('#star3').attr('src', 'assets/img/white_star.gif');
		$('#star4').attr('src', 'assets/img/white_star.gif');
		$('#star5').attr('src', 'assets/img/white_star.gif');

	});

	$("#star2").on('mouseover', function() {
		return $(this).prepend().attr('src', 'assets/img/yellow_star.png');	
		$('#star3').attr('src', 'assets/img/white_star.gif');
		$('#star4').attr('src', 'assets/img/white_star.gif');
		$('#star5').attr('src', 'assets/img/white_star.gif');
	});

	$("#star3").on('mouseover', function() {
		$('#star1').attr('src', 'assets/img/yellow_star.png');
		$('#star2').attr('src', 'assets/img/yellow_star.png');
		$(this).attr('src', 'assets/img/yellow_star.png');
		$('#star4').attr('src', 'assets/img/white_star.gif');
		$('#star5').attr('src', 'assets/img/white_star.gif');
	});

	$("#star4").on('mouseover', function() {
		$('#star1').attr('src', 'assets/img/yellow_star.png');
		$('#star2').attr('src', 'assets/img/yellow_star.png');
		$('#star3').attr('src', 'assets/img/yellow_star.png');
		$(this).attr('src', 'assets/img/yellow_star.png');
		$('#star5').attr('src', 'assets/img/white_star.gif');
	});

	$("#star5").on('mouseover', function() {
		$('#star1').attr('src', 'assets/img/yellow_star.png');
		$('#star2').attr('src', 'assets/img/yellow_star.png');
		$('#star3').attr('src', 'assets/img/yellow_star.png');
		$('#star4').attr('src', 'assets/img/yellow_star.png');
		$(this).attr('src', 'assets/img/yellow_star.png');

	}).on('mouseout', function() {
		$(".button1").removeClass(function() {
			return $(this).attr("src", "assets/img/white_star.gif");
		}); 
	});
	

});