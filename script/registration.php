<!--
<?php 
    $password = "password";
    echo password_hash($password, PASSWORD_DEFAULT); 
?> 
-->
<script type="text/javascript">
	function validate(){
		var username = $('#username').val();
		var password = $('#password').val();
		var email = $('#email').val();
//		var confirm_password = $('#confirm_password').val();
		var error = 0;
        
		if(username == ""){
			$('#username').parent('div').addClass('has-error');
			error++;
		}else{
			$(username).parent('div').removeClass('has-error');
		}
		
		if(password == ""){
			$('#password').parent('div').addClass('has-error');
			error++;
		}else{
			$('#password').parent('div').removeClass('has-error');
		}
        
        if(email == ""){
			$('#email').parent('div').addClass('has-error');
			error++;
		}else{
			$('#email').parent('div').removeClass('has-error');
		}
		
//		if(confirm_password == ""){
//			$('#confirm_password').parent('div').addClass('has-error');
//			error++;
//		}else{
//			$('#confirm_password').parent('div').removeClass('has-error');
//		}
		
		
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
	$('body').on('click','.btn-registration',function(e){
        var employee_id = $('#employee_id').val();
        var name = $('#name').val();
         var username = $('#username').val();
      
        var email = $('#email').val();
        
        
        
       var password = $('#password').val();
     
  

  
     
        var confirm_password = $('#confirm_password').val();
        console.log(employee_id + name + email + username + password );

        validate();
        validatePassword();
        
		if(validate() && validatePassword()){
			var self = $('#registration_form');
			$.ajax({
				url:"controller/RegistrationController.php?action=registration",
                data:{'username':username,'password':password,'name':name,'email':email,'employee_id':employee_id},
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(res == 1){
						$('#successRegistration').modal({
							backdrop:'static',
							keyboard:false
						});
					}else{
						$('#errorRegistration').modal({
							backdrop:'static',
							keyboard:false
						});
					}
				}
			});
	
		}else{
            
        }
	});
	
	$('body').on('click','.btn-update',function(e){
		if(validate()){
			var self = $('#employee_form');
			$.ajax({
				url:"controller/EmployeeController.php?action=update",
				data:self.serialize(),
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(res == 1){
						$('#successSaveEmployee').modal({
							backdrop:'static',
							keyboard:false
						});
					}else{
						$('#errorSaveEmployee').modal({
							backdrop:'static',
							keyboard:false
						});
					}
				}
			});
		}
	});
	
</script>