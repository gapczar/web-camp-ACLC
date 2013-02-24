$(document).ready(function()
{
	$('li a').hover().addClass('hover');
	$('li a').bind('click', function(event)
	{
		$('li a').addClass('current');
		event.preventDefault;
	});
});