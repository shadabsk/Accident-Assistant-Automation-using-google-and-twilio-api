$(document).ready(function(){
	$("#sign1").submit(function(event){
		event.preventDefault(); 
		$.ajax({
			type: "POST",
			url: "OOPHP/Fetch/Fetchdet1.php",
			data: new FormData(this),
			 contentType: false,
			 cache: false,
			 processData:false,
			success: function(result){
				if(result=="false")
				{					
					$('#regmsg').html('<div class="alert alert-danger">Application error</div>').fadeIn().delay(3000).fadeOut();
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