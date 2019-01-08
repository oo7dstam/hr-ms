
<script>
	
	
	
	//VOLUNTARY//-------------------------------------------------
		
		var remove_voluntary_ids = [];
		$('body').on('click','.btn-remove-voluntary',function(e){
			remove_voluntary_ids.push($(this).data('id'));
			$(this).parent().parent('tr').remove();
			if($('#voluntary_body tr').length == 0){
				var tablePart = '<tr><td><input type="text" name="voluntary_name_and_address[]" class="form-control"/></td><td><input type="text" name="voluntary_from[]" class="form-control birth_date_table"/></td><td><input type="text" name="voluntary_to[]" class="form-control birth_date_table"/></td><td><input type="text" name="voluntary_no_of_hour[]" class="form-control"/></td><td><input type="text" name="voluntary_position[]" class="form-control"/></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-voluntary" data-id="0"><i class="fa fa-trash"></i></a></td></tr>';
			
				$('#voluntary_body').append(tablePart);
				newAddDatepickerInTable();
			}
		});
		$('body').on('click','.btn-add-voluntary',function(e){
			
			var tablePart = '<tr><td><input type="text" name="voluntary_name_and_address[]" class="form-control"/></td><td><input type="text" name="voluntary_from[]" class="form-control birth_date_table"/></td><td><input type="text" name="voluntary_to[]" class="form-control birth_date_table"/></td><td><input type="text" name="voluntary_no_of_hour[]" class="form-control"/></td><td><input type="text" name="voluntary_position[]" class="form-control"/></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-voluntary" data-id="0"><i class="fa fa-trash"></i></a></td></tr>';
			
			$('#voluntary_body').append(tablePart);
			
			newAddDatepickerInTable();
		});
		
	//VOLUNTARY//-------------------------------------------------
	
</script>