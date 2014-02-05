$(document).on('ready', init);
function init(){

	/* Starting gallery */
	$('#gallery').mixitup();

	/* Starting Animation on Load */
	$('<img/>').attr('src', 'img/header-bg.png').load(function() {
	  $('#navbar > ul > li').fadeIn(1200, function() {
	    $(this).animate({opacity: '1'});
	    $('.navbar-nav>li a ').css({'-webkit-transform': 'rotateX(0deg)'});
	    $('.text-extra-large').animate({opacity: '1', 'margin-top': '0'}, 500,function() {
	                        
	    });                
	  });
	});

	$('.text-menu').hide();

	$('.button-option').on('click',function(event){   
	    event.preventDefault();
	    if ($('#toque_main_content').hasClass("see_info") ) {
	        //$("#toque_main_content").stop().animate({width:50}, 500);          
	        $('#toque_main_content').removeClass("see_info");
	        $('.text-menu').hide();
	    } else {
	        //$("#toque_main_content").stop().animate({width:140}, 500);   
	        $('.text-menu').stop().delay(300).fadeIn();
	        $('#toque_main_content').stop().delay(500).addClass("see_info");
	        
	    }
	});    

	$('a[href*=#]:not([href=#])').on('click',function(e) {
	  e.preventDefault();
	  $('html, body').animate({
	    scrollTop: $($(this).attr('href')).offset().top+60
	  }, 800);
	});     

	$('#home').on('click',function(e){
	  e.preventDefault();
	  $('body,html').animate({
	     scrollTop:0
	  },800);
	});
	$(window).scroll(function(){
		var x =  $('#services').offset().top;
      	//obteniendo la mediada del scroll
      	if($(this).scrollTop()>=x){  			
  			$('#toque_main_content').animate({top: '0'}, 500).show();
      	}
      	else{
      		$('#toque_main_content').hide(); 		 
      	}
  	});
}