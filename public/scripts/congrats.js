$(document).ready(function(){
	function classFunction(){
	  if($('body').width()<992){ 
		$('.toggle_back_radius').removeClass('back_radius');
	  }
	  else{
		$('.toggle_back_radius').addClass('back_radius');
	  }
	}
	
	classFunction();
	$(window).resize(classFunction);
   })