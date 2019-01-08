script
<script>
	$('body').on('click','.btn-login',function(e){
        
        
        var uname = $('#username').val();
        var pword = $('#password').val();
        console.log(uname + pword);
//        console.log('login');
        
		var self = $('#log_in_form');
		$.ajax({
			url:"controller/UserController.php?action=authenticate",
			data:self.serialize(),
			type:'POST',
			dataType:'json',
			success:function(res){
                
                if(res == 1){
					$('#successLogin').modal({
						backdrop:'static',
						keyboard:false
					   });
                }else if(res == 2){
                    $('#inactive').modal({
						backdrop:'static',
						keyboard:false
					   });
                }else if(res == 3){
                    $('#pending').modal({
						backdrop:'static',
						keyboard:false
					   });
                }else if(res == 4){
                    $('#cancelled').modal({
						backdrop:'static',
						keyboard:false
					   });
                }else if(res == 0){
                    $('#errorLogin').modal({
                        backdrop:'static',
                        keyboard:false
                    });
                }
				
				
			}
		});
	});
</script>