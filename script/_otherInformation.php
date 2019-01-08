
<script>
	
	
	
	//LEARNING//-------------------------------------------------
		var remove_other_ids = [];
		$('body').on('click','.btn-remove-other-information',function(e){
			remove_other_ids.push($(this).data('id'));
			
		});
		$('body').on('click','.btn-add-other-information',function(e){
			
			var tablePart = '<tr><td><input type="text" name="other_skills[]" class="form-control"/></td><td><input type="text" name="other_recognition[]" class="form-control"/></td><td><input type="text" name="other_organization[]" class="form-control"/></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-other-information" data-id="0"><i class="fa fa-trash"></i></a></td></tr>';
			
			$('#other_information_body').append(tablePart);
		});
		
		$('body').on('click','.btn-remove-other-information',function(e){
			
			
			var id = $(this).data('id');
			
			if(id != 0){
				//remove_ids.
			}
			
			$(this).parent().parent('tr').remove();
		});
	//LEARNING//-------------------------------------------------
	
</script>