jQuery(document).ready(function(){
	$('form').submit(function(info)
	{
		info.preventDefault();
		var nom = $('#nom').val();
		var message = $('#message').val();
		var tab = { 'nom' : nom,
					'message' : message,
					'action' : 'ajout'
					};
		console.log(tab);


		$.post( 'index.php?page=chat_liste&ajax', tab , function()
		{
			// vider champs message
			$('#message').val('');
		});
		return false;
	});
	setInterval(function()
	{
	   $('#liste_messages').load('index.php?page=chat_liste&ajax');
	}, 1000);
});