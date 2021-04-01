$(document).ready(function(){
	common_function();
	$("#no_facebook_link").click(function(){
		if($(this).is(':checked')){
			$("#facebook_link").val('');
			$("#facebook_link").attr("disabled", "disabled"); 
		}
		else
			$("#facebook_link").removeAttr("disabled"); 
	});
	$("#no_instagram_link").click(function(){
		if($(this).is(':checked')){
			$("#instagram_link").val('');
			$("#instagram_link").attr("disabled", "disabled"); 
		}
		else
			$("#instagram_link").removeAttr("disabled"); 
	});
	$("#no_website_link").click(function(){
		if($(this).is(':checked')){
			$("#website_link").val('');
			$("#website_link").attr("disabled", "disabled"); 
		}
		else
			$("#website_link").removeAttr("disabled"); 
	});
})
