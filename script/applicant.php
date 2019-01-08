<script>
	function validate(){
		var first_name = $('#first_name').val();
		var last_name = $('#last_name').val();
        var email = $('#email').val();
		var number = $('#number').val();
        var country = $('#country').val();
		var city = $('#city').val();
        var address = $('#address').val();
        var desired_position = $('#desired_position').val();
//		var confirm_password = $('#confirm_password').val();
		var error = 0;
        
		if(first_name == ""){
			$('#first_name').parent('div').addClass('has-error');
			error++;
		}else{
			$(first_name).parent('div').removeClass('has-error');
		}
		
		if(last_name == ""){
			$('#last_name').parent('div').addClass('has-error');
			error++;
		}else{
			$('#last_name').parent('div').removeClass('has-error');
		}
		
        if(email == ""){
			$('#email').parent('div').addClass('has-error');
			error++;
		}else{
			$(email).parent('div').removeClass('has-error');
		}
		
		if(number == ""){
			$('#number').parent('div').addClass('has-error');
			error++;
		}else{
			$('#number').parent('div').removeClass('has-error');
		}
		
        if(country == ""){
			$('#country').parent('div').addClass('has-error');
			error++;
		}else{
			$(country).parent('div').removeClass('has-error');
		}
		
		if(city == ""){
			$('#city').parent('div').addClass('has-error');
			error++;
		}else{
			$('#city').parent('div').removeClass('has-error');
		}
		
        if(address == ""){
			$('#address').parent('div').addClass('has-error');
			error++;
		}else{
			$(address).parent('div').removeClass('has-error');
		}
		
        if(desired_position == ""){
			$('#desired_position').parent('div').addClass('has-error');
			error++;
		}else{
			$(desired_position).parent('div').removeClass('has-error');
		}
		
		if(error > 0){
			return false;
		}else{
			return true;
		}
	}
    
    function validatePassword(){       
        
        var firt_name = $('#firt_name').val();
		var last_name = $('#last_name').val();
        var email = $('#email').val();
		var number = $('#number').val();
        var country = $('#country').val();
		var city = $('#city').val();
        var address = $('#address').val();
        var desired_position = $('#desired_position').val();
		
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
    
	$('body').on('click','.btn-application',function(e){
        var first_name = $('#first_name').val();
		var last_name = $('#last_name').val();
        var email_address = $('#email_address').val();
		var number = $('#number').val();
        var country = $('#country').val();
		var city = $('#city').val();
        var address = $('#address').val();
        var desired_position = $('#desired_position').val();
        
//        var confirm_password = $('#confirm_password').val();
        console.log(first_name + last_name + email_address + number + country + city + address + desired_position);        
//        
        validate();
//        validatePassword();
//        
		if(validate()){
			var self = $('#job_application_form');
			$.ajax({
				url:"../controller/JobApplicationController.php?action=job_application",
				data:{'first_name':first_name,'last_name':last_name,'email_address':email_address,'number':number,'country':country,'city':city,'address':address,'desired_position':desired_position},
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
	
	
</script>