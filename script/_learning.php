
<script>
	
	
	
	//LEARNING//-------------------------------------------------
		
		var remove_learning_ids = [];
		$('body').on('click','.btn-remove-learning',function(e){
			remove_learning_ids.push($(this).data('id'));
			
		});
		
		$('body').on('click','.btn-add-learning',function(e){
			
			var tablePart = '<tr><td><input type="text" name="learning_title[]" class="form-control"/></td><td><input type="text" name="learning_from[]" class="form-control birth_date_table"/></td><td><input type="text" name="learning_to[]" class="form-control birth_date_table"/></td><td><input type="text" name="learning_hours[]" class="form-control"/></td><td><input type="text" name="learning_ids[]" class="form-control"/></td><td><input type="text" name="learning_sponsored[]" class="form-control"/></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-learning" data-id="0"><i class="fa fa-trash"></i></a></td></tr>';
			
			$('#learning_body').append(tablePart);
			newAddDatepickerInTable();
		});
		
		$('body').on('click','.btn-remove-learning',function(e){
			
			
			var id = $(this).data('id');
			
			if(id != 0){
				//remove_ids.
			}
			
			$(this).parent().parent('tr').remove();
		});
	//LEARNING//-------------------------------------------------
	
</script>