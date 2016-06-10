jQuery(document).ready(function(){
	$('form').submit(function(info)
	{
		info.preventDefault();
		$.post(/*'...'*/, {/**/}, function()
		{
			//
		});
		return false;
	});
	setInterval(function()
	{
	   $('#liste_messages').load('index.php?page=chat_liste&ajax');
	}, 1000);
});