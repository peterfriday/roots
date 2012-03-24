/* Author:

*/


$(function(){


	if($('body.instagram').length > 0){
		$.ajax({
			type: 'GET',
			dataType: 'jsonp',
			cache: false,
			url: 'https://api.instagram.com/v1/users/self/media/recent?access_token=339836.3d6ab95.f70450982b6f4056855ee028a266da91&count=50',
			success: function(data){
				var h = ''
				for(i in data.data){
					var item = data.data[i]
					if(typeof item === "undefined") continue

					url = item.images.standard_resolution.url
					h += '<div class="span3"><img style="margin-bottom: 6px;" src="' + url + '" /></div>'
				}
				console.log(h)
				$('#main').html(h)
			}
		})
	}
})

