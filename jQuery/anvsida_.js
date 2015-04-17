$(document).ready(function(){

	$("#1").click(function(){
		
		$('#bikeInfo').fadeToggle('fast');
	});

	$("#2").click(function(){
		
		$('#socialMedia').fadeToggle('fast');
	});

	$("#3").click(function(){
		
		$('#issueReporting').fadeToggle('fast');
	});

	$('tr.header')
		.click(function(){
			$(this).siblings('.child-'+this.id).toggle('fast');
		});
	$('tr[class^=child-]').hide().children('tr');
});