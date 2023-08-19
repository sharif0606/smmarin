

// google maps
	function initMap() {
		var uluru = {lat: 22.3657883, lng: 91.7782267};
		var map = new google.maps.Map(document.getElementById('map'), {
		  zoom: 15,
		  center: uluru
		});
		var marker = new google.maps.Marker({
		  position: uluru,
		  map: map
		});
	}
/////////////////////////////////////
$(document).ready(function(){
	
	$('ul.nav li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
	
	var modal = $('#myModal');
	var img = $('.myImg');
	
	var modalImg = $("#img01");
	
	img.click(function(){
		modalImg.attr("src", this.src);
		modal.show();
	});
	
	
	/*$(".service_items").click(function(){
	    var anb = $(this).attr("data-img-url");
	    var knb = $(this).attr("data-pro-name");
		modalImg.attr("src", anb);
		$(".modal-content-h3").html(knb);
		modal.show();
	});*/
	

	$(".close").click(function(){
		modal.hide();
	});
	
	

// gallary filtering
	$(".gallery").isotope({itemSelector:".image-item"});

	var $gallery = $(".gallery").isotope({});

	$(".filtering").on("click","span",function(){
		var filterValue=$(this).attr("data-filter");
		$gallery.isotope({filter:filterValue})
	});

	$(".filtering").on("click","span",function(){
		$(this).addClass("active").siblings().removeClass("active")
	});
	
	
	
	$boxTwo = $('.animate_logo');
    $boxTwo.addClass('horizTranslate');
	
	setTimeout(function() {
		//$(".logoTxt").fadeIn('slow');
	}, 3000);

});



