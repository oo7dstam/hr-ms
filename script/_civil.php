
<script>
	
	//CIVIL//-------------------------------------------------
		var remove_civil_ids = [];
		$('body').on('click','.btn-remove-civil',function(e){
			remove_civil_ids.push($(this).data('id'));
			
		});
		$('body').on('click','.btn-add-civil',function(e){
			
			var tablePart = '<tr><td><input type="text" name="civil_service[]" class="form-control"/></td><td><input type="text" name="civil_rating[]" class="form-control"/></td><td><input type="text" name="civil_date_of_exam[]" class="birth_date_table form-control"/></td><td><input type="text" name="civil_place_of_exam[]" class="date_picker form-control"/></td><td><input type="text" name="civil_number_license[]" class="form-control"/></td><td><input type="text" name="civil_date_of_validity[]" class="form-control birth_date_table"/></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-civil"><i class="fa fa-trash"></i></a></td></tr>';
			
			$('#civil_body').append(tablePart);
			newAddDatepickerInTable();
		});
		
		$('body').on('click','.btn-remove-civil',function(e){
			
			
			var id = $(this).data('id');
			
			if(id != 0){
				//remove_ids.
			}
			
			$(this).parent().parent('tr').remove();
		});
	//CIVIL//-------------------------------------------------
	
	
</script>