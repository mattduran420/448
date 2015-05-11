$(document).ready(function() {

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
	
	function countStar(){
		var star = document.getElementById('#star-rating').value();
		switch(star){
			case "#star1":
				star = 1;
				break;
			case "#star2":
				star = 2;
				break;
			case "#star3":
				star = 3;
				break;
			case "#star4":
				star = 4;
				break;
			case "#star5":
				star = 5;
				break;
			default: star = 0;
		}
	}
});