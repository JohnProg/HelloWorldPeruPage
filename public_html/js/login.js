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
			success: function(data){debugger;
				if(data.status){
					location.href ='admin/blog/posts';
					console.log(data.msg);
					if(data.msg.password != undefined){
						$('.password').html(data.msg.password);
					}
					if(data.msg.email != undefined){
						$('.email').html(data.msg.email);
					}
				}
				else{
					console.log(data.msg);
				}
			},
			error: function(data){
				debugger;
			}
		});
		return false;
	});
});