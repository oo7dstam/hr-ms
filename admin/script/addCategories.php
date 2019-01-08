
<script>
	
	function validate(){
		var name = $('#name').val();		
		var salary_grade_id = $('#salary_grade_id').val();		
		
		var error = 0;
		
		if(name == ""){
			$('#name').parent('div').addClass('has-error');
			error++;
		}else{
			$('#name').parent('div').removeClass('has-error');
		}		
		if(salary_grade_id == ""){
			$('#salary_grade_id').parent('div').addClass('has-error');
			error++;
		}else{
			$('#salary_grade_id').parent('div').removeClass('has-error');
		}		
		
		if(error > 0){
			return false;
		}else{
			return true;
		}
	}

	$('body').on('click','.btn-add-category',function(e){
     
        $('#addCategory').modal({
            backdrop:'static',
            keyboard:false
        });			
    });
	
	$('body').on('click','.btn-save',function(e){
		
		e.preventDefault();
		$(this).attr("disabled", "disabled");
		var self = $('#category_form');
		
		console.log(name);

		validate();
		
		if(validate()){
			$.ajax({
				url:"controller/AddCategoriesController.php?action=save",
				data:self.serialize(),
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(res == 1){
						$('#successAddCategories').modal({
							backdrop:'static',
							keyboard:false
						});
					}else if(res == 3){
						$('#categoriesExist').modal({
							backdrop:'static',
							keyboard:false
						});
						$(this).removeAttr("disabled");
					}else{
						$('#errorAddCategories').modal({
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