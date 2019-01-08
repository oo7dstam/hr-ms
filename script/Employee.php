
<script>
	
	var employment_id = null;
	var employee_id = null;
	var employee_name = null;
	var employee_email = null;
	$('body').on('click','.btn-invite',function(e){
		employee_id = null;
		employee_name = null;
		employee_email = null;

		employee_id = $(this).data('id');
		employee_name = $(this).data('name');
		employee_email = $(this).data('email');
		
		
		$('#inviteEmployee').modal({
			backdrop:'static',
			keyboard:false
		});
			
	});

	
	$('body').on('click','.btn-invite-confirm',function(e){
		
		
		$('#loading').modal('show');
		
		$.ajax({
			url:"controller/EmployeeController.php?action=invite",
			data:{'id':employee_id,'name':employee_name,'email':employee_email},
			type:'POST',
			dataType:'json',
			success:function(res){
				
				setTimeout(function () {
					$('#loading').modal('hide');
				}, 1000);
			   
				if(res == 1){
					$('#successInvitation').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorInvitation').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});

		
			
	});
	
	$('body').on('click','.btn-regularization',function(e){
		employment_id = null;
		employee_id = null;
		employee_id = $(this).data('employee_id');
		employment_id = $(this).data('employment_id');

		$('#regularizationEmployee').modal({
			backdrop:'static',
			keyboard:false
		});
			
	});

	$('body').on('click','.btn-regularization-confirm',function(e){
		
		
		$('#loading').modal('show');
		
		$.ajax({
			url:"controller/EmployeeController.php?action=regularization",
			data:{'employee_id':employee_id,'employment_id':employment_id},
			type:'POST',
			dataType:'json',
			success:function(res){
				
				setTimeout(function () {
					$('#loading').modal('hide');
				}, 1000);
			   
				if(res == 1){
					$('#successRegularization').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorRegularization').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});

		
			
	});
	
</script>