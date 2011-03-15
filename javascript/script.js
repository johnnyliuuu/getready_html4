$(document).ready(function() {
	//form validation
	$("#webform-client-form-1").bind("invalid-form.validate", function() {
		$("#error-summary").html("Warning message on the top of the form.");
		alert('sadf');
	}).validate({
		errorElement: "em",
		messages: {
			'submitted[contactinfo][tel]': "Enter your phone number",
			'submitted[name]': "Enter your name",
			'submitted[contactinfo][email]': "Enter your Email address",
			'submitted[contactinfo][url]': "Enter your Site address"
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.parent() );
			element.prev().addClass("error");
		}
	});	
	//jquery ui selectmenu
	$('select').selectmenu({style:'dropdown'});
	
	//file upload input
	$('#edit-submitted-upload').filestyle();
	
	//Text Zoom IN/OUT
	function textZoom(i){
		var newSize = fontSize;
		if(i<0 && fontSize>=125) {
		newSize -= 25;
		}
		if(i>0 && fontSize<=175) {
		newSize += 25;
		}
		fontSize = newSize;
		$('#content-area,.ui-selectmenu-menu').css('font-size', newSize+'%');
		if(100 == newSize) {
		$('#content-area,.ui-selectmenu-menu').css('font-size', '100%');
		}
	}
	var fontSize = 100;
	$('#zoom_minify').click(function(){
		textZoom(-25);
		return false;
	});
	$('#zoom_magnify').click(function(){
		textZoom(25);
		return false;
	});
	$('#zoom_reset').click(function(){
		$('#content-area,.ui-selectmenu-menu').removeAttr("style");
		fontSize = 100;
		return false;
	});
});