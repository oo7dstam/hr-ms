
<script>
	$('body').on('click','.btn-login',function(e){
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
				}else{
					$('#errorLogin').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});
	});
</script>