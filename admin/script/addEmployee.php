

<?php 
	include '_personalInformation.php';
	include '_familyBackground.php';
	include '_civil.php';
	include '_work_exp.php';
	include '_voluntary.php';
	include '_learning.php';
	include '_otherInformation.php';
	include '_survey.php';

?>


<script>

	function validateEmployement(){
		
		var category_id = $('#category_id').val();
		var position_id = $('#position_id').val();
		var date_hired = $('#date_hired').val();
		
		var error = 0;
		
		if(category_id == ""){
			$('#category_id').parent('div').addClass('has-error');
			error++;
		}else{
			$("#category_id").parent('div').removeClass('has-error');
		}
		
		if(position_id == ""){
			$('#position_id').parent('div').addClass('has-error');
			error++;
		}else{
			$('#position_id').parent('div').removeClass('has-error');
		}

		if(date_hired == ""){
			$('#date_hired').parent('div').addClass('has-error');
			error++;
		}else{
			$('#date_hired').parent('div').removeClass('has-error');
		}
		
		if(error == 0){
			return true;
		}else{
			return false;
		}
		
	}
	function newAddDatepickerInTable(){
		$('.birth_date_table').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
		});
	}
	
	$('body').on('click','.btn-save',function(e){
		e.preventDefault();
		// myDropzone.processQueue();
		// $(this).prop("disabled", true);
		var error = 0;
		if(!personalInformationValidate()){
			error++;
			
			$('#personal_tab').addClass('active');
			$('#family_tab').removeClass('active');
			$('#civil_tab').removeClass('active');
			$('#learning_tab').removeClass('active');
			$('#employment_tab').removeClass('active');
			
			$('#personal_tab_head').addClass('active');
			$('#family_tab_head').removeClass('active');
			$('#civil_tab_head').removeClass('active');
			$('#learning_tab_head').removeClass('active');
			$('#employment_tab_head').removeClass('active');
			
		}else if(!familyBackgroundValidate()){
			error++;
			
			$('#personal_tab').removeClass('active');
			$('#family_tab').addClass('active');
			$('#civil_tab').removeClass('active');
			$('#learning_tab').removeClass('active');
			$('#employment_tab').removeClass('active');
			
			$('#personal_tab_head').removeClass('active');
			$('#family_tab_head').addClass('active');
			$('#civil_tab_head').removeClass('active');
			$('#learning_tab_head').removeClass('active');
			$('#employment_tab_head').removeClass('active');
			
			
		}else if(!validateEmployement()){
			error++;
			
			$('#personal_tab').removeClass('active');
			$('#family_tab').removeClass('active');
			$('#civil_tab').removeClass('active');
			$('#learning_tab').removeClass('active');
			$('#employment_tab').addClass('active');
			
			$('#personal_tab_head').removeClass('active');
			$('#family_tab_head').removeClass('active');
			$('#civil_tab_head').removeClass('active');
			$('#learning_tab_head').removeClass('active');
			$('#employment_tab_head').addClass('active');
			
			
		}
		
		if(error == 0){
			var self = $('#employee_form');
			
			$.ajax({
				url:"controller/EmployeeController.php?action=save",
				data:self.serialize(),
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(res.status == 1){
						
						myDropzone.processQueue();
						$('#successSaveEmployee').modal({
							backdrop:'static',
							keyboard:false
						});
					}else{
						$(this).removeAttr("disabled");
						$('#errorSaveEmployee').modal({
							backdrop:'static',
							keyboard:false
						});
					}
				}
			});
	
		}else{
			// $(this).prop("disabled", false);
		}
	});
	
	$('body').on('click','.btn-update',function(e){
		var error = 0;
		$('#loading').modal('show');
		if(!personalInformationValidate()){
			error++;
			
			$('#personal_tab').addClass('active');
			$('#family_tab').removeClass('active');
			$('#civil_tab').removeClass('active');
			$('#learning_tab').removeClass('active');
			$('#employment_tab').removeClass('active');
			
		}else if(!familyBackgroundValidate()){
			error++;
			
			$('#personal_tab').removeClass('active');
			$('#family_tab').addClass('active');
			$('#civil_tab').removeClass('active');
			$('#learning_tab').removeClass('active');
			$('#employment_tab').removeClass('active');
			
		} 
		
		if(error == 0){
			var self = $('#employee_form');
			$.ajax({
				url:"controller/EmployeeController.php?action=update",
				data:self.serialize()+'&removeCivil_ids='+remove_civil_ids+'&removeChildren_ids='+remove_children_ids+'&removeLearning_ids='+remove_learning_ids+'&removeOther_ids='+remove_other_ids+'&removeVoluntary_ids='+remove_voluntary_ids+'&removeWork_ids='+remove_work_ids,
				type:'POST',
				dataType:'json',
				success:function(res){
					setTimeout(function () {
						$('#loading').modal('hide');
					}, 1000);
			   
					if(res == 1){
						myDropzone.processQueue();
						$('#successUpdateEmployee').modal({
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
		}else{
			setTimeout(function () {
					$('#loading').modal('hide');
				}, 1000);
			   
		}
	});
</script>