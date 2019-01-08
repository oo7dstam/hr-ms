
<script>
	
	function validate(){
		var name = $('#name').val();
		var username = $('#username').val();
		var email = $('#email').val();
		
		var error = 0;
		
		if(name == ""){
			$('#name').parent('div').addClass('has-error');
			error++;
		}else{
			$('#name').parent('div').removeClass('has-error');
		}
		
		if(username == ""){
			$('#username').parent('div').addClass('has-error');
			error++;
		}else{
			$('#username').parent('div').removeClass('has-error');
		}
		
		if(email == ""){
			$('#email').parent('div').addClass('has-error');
			error++;
		}else{
			$('#email').parent('div').removeClass('has-error');
		}
		
		if(error > 0){
			return false;
		}else{
			return true;
		}
	}
	
	function validatePassword(){
		var confirm_password = $('#confirm_password').val();
		var password = $('#password').val();
		
		var error = 0;
		
		
		if(password == ""){
			$('#password').parent('div').addClass('has-error');
			error++;
		}else{
			$('#password').parent('div').removeClass('has-error');
		}
		
		if(confirm_password == ""){
			$('#confirm_password').parent('div').addClass('has-error');
			error++;
		}else{
			$('#confirm_password').parent('div').removeClass('has-error');
		}
		
		if(password != confirm_password){
			$('#password').parent('div').addClass('has-error');
			$('#confirm_password').parent('div').addClass('has-error');
			error++;
		}
		
		if(error > 0){
			return false;
		}else{
			return true;
		}
	}
	
	function validateNewPassword(){
		var password = $('#password').val();
		var confirm_password = $('#confirm_password').val();
		var new_password = $('#new_password').val();
		var old_password = '<?php echo (isset($adminDetails['username']))? $adminDetails['username']:""; ?>';
		
		var error = 0;
		
		if(new_password == ""){
			$('#new_password').parent('div').addClass('has-error');
			error++;
		}else{
			$('#new_password').parent('div').removeClass('has-error');
		}
		
		if(confirm_password == ""){
			$('#confirm_password').parent('div').addClass('has-error');
			error++;
		}else{
			$('#confirm_password').parent('div').removeClass('has-error');
		}
		
		if(new_password != confirm_password){
			$('#new_password').parent('div').addClass('has-error');
			$('#confirm_password').parent('div').addClass('has-error');
			error++;
		}
		
		
		
		if(old_password != ""){
			
			if(old_password != password){
				$('#password').parent('div').addClass('has-error');
				error++;
			}else{
				$('#password').parent('div').removeClass('has-error');
			}
		}
		
		
		if(error > 0){
			return false;
		}else{
			return true
		}
		
	}
	
	$('body').on('click','.btn-save',function(e){
		
		e.preventDefault();
		$(this).attr("disabled", "disabled");
		var name = $('#name').val();
		var username = $('#username').val();
		var password = $('#password').val();
		var confirm_password = $('#confirm_password').val();
		var email = $('#email').val();
		
		validate();
		validatePassword();
		
		if(validate() && validatePassword()){
			$.ajax({
				url:"controller/AdminController.php?action=save",
				data:{'name':name,'username':username,'password':password,'email':email},
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(res == 1){
						$('#successSaveAdmin').modal({
							backdrop:'static',
							keyboard:false
						});
					}else if(res == 3){
						$('#usernameExist').modal({
							backdrop:'static',
							keyboard:false
						});
						$(this).removeAttr("disabled");
					}else{
						$('#errorSaveAdmin').modal({
							backdrop:'static',
							keyboard:false
						});
						$(this).removeAttr("disabled");
					}
				}
			});

		}
			
	});
	

	$('body').on('click','.btn-update',function(e){
		var name = $('#name').val();
		var username = $('#username').val();
		var new_password = $('#new_password').val();
		var email = $('#email').val();
		var id = <?php echo $id; ?>;
		
		validate();
		validateNewPassword();
		
		if(validate() && validateNewPassword()){
			$.ajax({
				url:"controller/AdminController.php?action=update",
				data:{'name':name,'username':username,'password':new_password,'email':email,'id':id},
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(res == 1){
						$('#successSaveAdmin').modal({
							backdrop:'static',
							keyboard:false
						});
					}else{
						$('#errorSaveAdmin').modal({
							backdrop:'static',
							keyboard:false
						});
					}
				}
			});

		}
	});
	
</script>