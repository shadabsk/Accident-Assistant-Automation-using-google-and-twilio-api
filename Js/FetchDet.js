$(document).ready(function(){
	$("#sign").submit(function(event){
		event.preventDefault(); 
		$.ajax({
			type: "POST",
			url: "OOPHP/Fetch/Fetchdet.php",
			data: new FormData(this),
			 contentType: false,
			 cache: false,
			 processData:false,
			success: function(result){
				if(result=="false")
				{					
					$('#regmsg').html('<div class="alert alert-danger">Vehicle is not registered with us</div>').fadeIn().delay(3000).fadeOut();
				}
				else
				{
					$('#regmsg').html('<div class="alert alert-success">Automated assistance has been provided</div>').fadeIn().delay(3000).fadeOut();
					
				}
			}
			});
		return false;
	});
});