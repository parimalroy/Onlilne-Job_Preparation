
$(document).ready(function(){
    var navOffset=$("nav").offset().top;
	 
	 $(window).scroll(function(){
		 var scrolpo=$(window).scrollTop();
		 if(scrolpo>=navOffset){
			 $("nav").addClass("fixed");
		 }else{
			$("nav").removeClass("fixed"); 
		 }
	 });	
	
}); 

$(document).ready(function(){
	
	var btt=$('.scrollToTop');
	
	btt.on('click',function(){
		$('html,body').animate({
			scrollTop:0
		},3000);
		
	});
	
	$(window).on('scroll',function(){
		var self=$(this),
		height=self.height(),
		top=self.scrollTop();
		
		if(top>height){
			if(!btt.is(':visible')){
				btt.show();
			}
		}else{
			btt.hide();
		}
	});
	
});



/*
$(document).ready(function() {
	$( document ).tooltip();
}); 
 

  For Wow js*/
  