$(function(){
	//for password match
		$('#cpass').on('change',function(e){
			var cpass=$(this).val();
			var pass=$("#pass").val();
			if(pass!=cpass)
			{
				$(this).val("");
				$("#cpasserr").html("<span class='alert alert-danger'>Password is not match</span>");
			}
			else
			{
				$("#cpasserr").html("<span class='alert alert-success'>Password is match</span>");
			}
		});

		$("#pass").on('change',function(e){
			$("#cpass").val("");
		});

		//for email validate
		
		$('#semail').on('change',function(e){
				
				if(!/(^(([a-zA-Z])|([0-9]))+@([a-zA-z])+.([a-zA-z]{2,3})$)/gi.test(this.value))
				{
					$(this).val("");	
					$('#emailmsg').html('<span class="alert alert-danger">Not Valid Email</span>');
					
				}
				else
				{
						$('#emailmsg').html('<span class="alert alert-success">Valid Email</span>');		
				}

			});

		//for checking the user is availble or not
		$("#user").on('keyup',function(e){
			var user=$(this).val();
			if(!user||user===' ')
			{	
				$(this).val("");
				$('#usererr').html('<span class="alert alert-danger">Empty field  is not allow</span>');
			}
			else
			{
				var dataString='user='+user;
				$.ajax({
					type:'POST',
					url:'OOPHP/Register/checkuser.php',
					data:dataString,
					cache:false,
					success:function(available)
					{
						if(available=="false")
						{
							$('#usererr').html('<span class="alert alert-danger">UserName is not available</span>');
						}
						else
						{
							$('#usererr').html('<span class="alert alert-success">UserName is available</span>');
						}
					},
					error: function(xhr,xer){
						$('#usererr').html('<span class="alert alert-danger">Some Error is Occur '+xhr.status+'</span>')
					}
				});
			}
		});

		$("#adno").on('change',function(e){
			var adno=$(this).val();
			if(!adno||adno===' ')
			{	
				$(this).val("");
				$('#adnomsg').html('<span class="alert alert-danger">Empty field  is not allow</span>');
			}
			else
			{
				var dataString='adno='+adno;
				$.ajax({
					type:'POST',
					url:'OOPHP/Register/checkadharno.php',
					data:dataString,
					cache:false,
					success:function(available)
					{
						if(available=="false")
						{
							$('#adnomsg').html('<span class="alert alert-danger">Adhar Number Already Exist</span>');
						}
					},
					error: function(xhr,xer){
						$('#usererr').html('<span class="alert alert-danger">Some Error is Occur '+xhr.status+'</span>')
					}
				});
			}
		});


		//for textarea remaining word
		var text_max = 200;
		$('#count_message').html(text_max + ' remaining');
		$("#textrem").keyup(function(){
		  var text_length = $('#textrem').val().length;
		  var text_remaining = text_max - text_length;
		  $('#count_message').html(text_remaining + ' remaining');	
			});

		//for subject validate

		$("#subject").on('change',function(e){

			if(!/[a-zA-Z\s]/.test(this.value)){
				$('#subjectmsg').html('<span class="alert alert-danger">subject must have alphabets</span>');
				$(this).val("");
				
			}
			else if(!/[a-zA-Z]/.test(this.value)){
				$('#subjectmsg').html('<span class="alert alert-danger">subject can\'t contain only spaces</span>');
				$(this).val("");
				
			}
			else if(!/([a-zA-Z]).{7,30}/.test(this.value)){
				$('#subjectmsg').html('<span class="alert alert-danger">subject contain atleast 8 character and max 30 charcater</span>');
				$(this).val("");
				
			}
			else
			{
				$('#subjectmsg').html('<span class="alert alert-success">Subject is valid</span>');
			}

		});

		//for name 
		$("#checkname").on('change',function(e){

			if(!/[a-zA-Z\s]/.test(this.value)){
				$('#namemsg').html('<span class="alert alert-danger">name must have alphabets</span>');
				$(this).val("");
				
			}
			else if(!/[a-zA-Z]/.test(this.value)){
				$('#namemsg').html('<span class="alert alert-danger">name can\'t contain only spaces</span>');
				$(this).val("");
				
			}
			else if(!/([a-zA-Z]).{2,30}/.test(this.value)){
				$('#namemsg').html('<span class="alert alert-danger">name contain atleast 3 character</span>');
				$(this).val("");
				
			}
			else
			{
				$('#namemsg').html('<span class="alert alert-success">Name is valid</span>');
			}
			
	});




});
