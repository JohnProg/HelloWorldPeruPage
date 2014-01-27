$(document).on('ready', function(){
	var form = $('.ajax');
	var url = form.attr('action');
	form.on('submit', function(){
		$.ajax({
			type: 'POST',
			url: url,
			data: form.serialize(),
			beforeSend: function(){
				console.log('...');
			},
			success: function(data){
				debugger;
				if(data.status){
					console.log(data.msg);
				}
				else{
					console.log(data.msg);
				}
			},
			error: function(data){
			}
		});
		return false;
	});
});