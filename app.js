$('form').on('submit', function(e){
	e.preventDefault();
	var message = $('input[name=message]').val();
	var user = $('input[name=user]').val();
	$.post('proses.php', {user: user, message: message}, function(data){
		$('input[name=message]').val('');
	});
});

setInterval(function(){
	$.get('show.php', function(data){
		$('#chat').html(data);
		$('#chat').scrollTop(500);
	});
}, 500);