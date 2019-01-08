aa
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
	function newAddDatepickerInTable(){
		$('.birth_date_table').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
		});
	}
	
    $('body').on('click','.btn-update',function(e){
		var error = 0;
        console.log('btn update');
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
		}
	});
</script>