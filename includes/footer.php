<footer>
	<div class="grid-container">
		<div class="col-4">
			<p>&#xa9; WOBA Media <?php echo date("Y"); ?></p>
		</div>
		<div class="col-4 right">
			<p class="right">Website made by <a href="http://www.miln.co">Miln</a></p>
		</div>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
<script src="javascript/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script>
	if ($(window).width() < 960) {
	   var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        slidesPerView: 1,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        paginationClickable: true,
	        spaceBetween: 0
    	});
	}
	else {
	   	var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        slidesPerView: 4,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        paginationClickable: true,
	        spaceBetween: 35
    	});
	}

	$(window).resize(function() {
	  if ($(window).width() < 960) {
	   var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        slidesPerView: 1,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        paginationClickable: true,
	        spaceBetween: 0
    	});
		}
		else {
		   	var swiper = new Swiper('.swiper-container', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 4,
		        nextButton: '.swiper-button-next',
		        prevButton: '.swiper-button-prev',
		        paginationClickable: true,
		        spaceBetween: 35
	    	});
		}
	});
    
</script>