$(document).ready(function(){

	var carousel = $("#owl-demo");
	    carousel.owlCarousel({
        items:4,
	  	pagination:false,
	    navigation:true,
	    navigationText: [
	      "<i class='fa fa-angle-left'></i>",
	      "<i class='fa fa-angle-right'></i>"
	      ],
	});
    
    var carousel = $("#owl-demo1");
	    carousel.owlCarousel({
        items:4,
	  	pagination:false,
	    navigation:true,
	    navigationText: [
	      "<i class='fa fa-angle-left'></i>",
	      "<i class='fa fa-angle-right'></i>"
	      ],
	});
    
    var carousel = $("#owl-demo2");
	    carousel.owlCarousel({
        items:4,
	  	pagination:false,
	    navigation:true,
	    navigationText: [
	      "<i class='fa fa-angle-left'></i>",
	      "<i class='fa fa-angle-right'></i>"
	      ],
	});

});