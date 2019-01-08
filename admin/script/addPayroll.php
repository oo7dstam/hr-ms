
<script>
	
	function validate(){
		var from_date = $('#from_date').val();
		var to_date = $('#to_date').val();
		var sss = $('#sss').val();
		var phil_health = $('#phil_health').val();
		var pag_ibig = $('#pag_ibig').val();
		
		var error = 0;
		
		if(from_date == ""){
			$('#from_date').parent('div').addClass('has-error');
			error++;
		}else{
			$('#from_date').parent('div').removeClass('has-error');
		}
		
		if(to_date == ""){
			$('#to_date').parent('div').addClass('has-error');
			error++;
		}else{
			$('#to_date').parent('div').removeClass('has-error');
		}
		
		if(sss == ""){
			$('#sss').parent('div').addClass('has-error');
			error++;
		}else{
			$('#sss').parent('div').removeClass('has-error');
		}
		
		if(phil_health == ""){
			$('#phil_health').parent('div').addClass('has-error');
			error++;
		}else{
			$('#phil_health').parent('div').removeClass('has-error');
		}
		
		if(pag_ibig == ""){
			$('#pag_ibig').parent('div').addClass('has-error');
			error++;
		}else{
			$('#pag_ibig').parent('div').removeClass('has-error');
		}
		
		if(error > 0){
			return false;
		}else{
			return true;
		}
	}
	
	
	$('body').on('click','.btn-generate',function(e){
		
		e.preventDefault();
		$(this).attr("disabled", "disabled");
		var self = $('#payroll_form');
		var employee_id =$('#employee_id').val();
		if(validate()){
			$.ajax({
				url:"controller/PayrollController.php?action=generate",
				data:self.serialize()+'&employee_id='+employee_id,
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(res == 1){
						$('#successPayroll').modal({
							backdrop:'static',
							keyboard:false
						});
					
					}else{
						$('#errorPayroll').modal({
							backdrop:'static',
							keyboard:false
						});
						$(this).removeAttr("disabled");
					}
				}
			});

		}
			
	});
	
	$('body').on('change','#first_name',function(){
		
		var id = $(this).val();
		
		$.ajax({
			url:"controller/EmployeeController.php?action=getEmployeeSalary",
			data:{'id':id},
			type:'POST',
			dataType:'json',
			success:function(res){
				if(res != null){
					$('#salary').val(res.salary);
					$('#rate').val(res.rate);
					$('#employee_id').val(res.employee_id);
					$('#sss').val(res.sss);
					$('#phil_health').val(res.phil_health);
					$('#pag_ibig').val(res.pag_ibig);
				}else{
					$('#salary').val('');
					$('#rate').val('');
					$('#employee_id').val('');
					$('#sss').val(0);
					$('#phil_health').val(0);
					$('#pag_ibig').val(0);
				}
				
			}
		});
		
	});
</script>