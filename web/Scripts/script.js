$(document).ready(function()
{
	$('li a').hover().addClass('hover');
	$('li a').bind('click', function(event)
	{
		$('li a').addClass('current');
		event.preventDefault();
	});

	$('#blur').hide();
	$('#login button').bind('click', function(event)
	{
		$('#blur').fadeIn(500);
		event.preventDefault();
	});
});