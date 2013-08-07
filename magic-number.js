// DOM reaady
(function($){

	$('form').on('submit', function(event) {
		event.preventDefault();
		$.ajax({
			url: $(this).attr('action'),
			type: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(data, textStatus, xhr) {
				console.log(data);
				console.log(textStatus);
				$('.magic-number .value').text(data.magic_number);
				$('.games-left .value').text(data.games_left);
			}, error: function(xhr, textStatus, errorThrown) {
    			console.log("ERROR");
    			console.log(errorThrown);
  			}
		});
	});
}(jQuery));