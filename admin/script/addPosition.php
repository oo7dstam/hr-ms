
<script>
	
	function validate(){
		var salary_grade_id = $('#salary_grade_id').val();		
		var categories = $('#categories').val();		
		var position = $('#position').val();		
		
		var error = 0;
		
		if(categories == ""){
			$('#categories').parent('div').addClass('has-error');
			error++;
		}else{
			$('#categories').parent('div').removeClass('has-error');
		}		
		
		if(salary_grade_id == ""){
			$('#salary_grade_id').parent('div').addClass('has-error');
			error++;
		}else{
			$('#salary_grade_id').parent('div').removeClass('has-error');
		}		
		
		if(position == ""){
			$('#position').parent('div').addClass('has-error');
			error++;
		}else{
			$('#position').parent('div').removeClass('has-error');
		}		
		
		if(error > 0){
			return false;
		}else{
			return true;
		}
	}
	
	$('body').on('click','.btn-add-position',function(e){
        id = null;
       

       id = $(this).data('id');
       

        $('#addPosition').modal({
            backdrop:'static',
            keyboard:false
        });			
    });

	$('body').on('click','.btn-save',function(e){
		
		e.preventDefault();
		$(this).attr("disabled", "disabled");
		var position = $('#position').val();
		var category_id = $('#categories').val();
		var salary_grade_id = $('#salary_grade_id').val();
		
		validate();
		
		if(validate()){
			$.ajax({
				url:"controller/CategoryHasPositionController.php?action=save",
				data:{'position':position,'category_id':category_id,'salary_grade_id':salary_grade_id},
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(res == 1){
						$('#successAddPosition').modal({
							backdrop:'static',
							keyboard:false
						});
					}else{
						$('#errorAddPosition').modal({
							backdrop:'static',
							keyboard:false
						});
						$(this).removeAttr("disabled");
					}
				}
			});

		}
			
	});
	
</script>