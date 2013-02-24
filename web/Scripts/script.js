$(document).ready(function()
{
	$('li a').hover().addClass('hover');
	$('li a').bind('click', function(event)
	{
		$('li a').addClass('current');
	});

	$('#blur').hide();
	$('#login button').bind('click', function(event)
	{
		$('#blur').fadeIn(500);
		$('body').addClass('hide');
		event.preventDefault();
	});
	$('.close').bind('click', function(event)
		{
			$('#blur').fadeOut(500);
			$('body').removeClass('hide');
			event.preventDefault();
		});
});