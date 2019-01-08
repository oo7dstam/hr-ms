
<script>
	
	
	//WORK EXPERIENCE//-------------------------------------------------
		var remove_work_ids = [];
		$('body').on('click','.btn-remove-work-exp',function(e){
			remove_work_ids.push($(this).data('id'));
			$(this).parent().parent('tr').remove();
			if($('#work_exp_body tr').length == 0){
				var tablePart = '<tr><td><input type="text" name="work_from[]" class="form-control birth_date_table"/></td><td><input type="text" name="work_to[]" class="form-control birth_date_table"/></td><td><input type="text" name="work_position[]" class="form-control"/></td><td><input type="text" name="work_company[]" class="form-control"/></td><td><input type="text" name="work_salary[]" class="form-control"/></td><td><input type="text" name="work_grade[]" class="form-control"/></td><td><input type="text" name="work_status[]" class="form-control"/></td><td><input type="text" name="work_service[]" class="form-control"/></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-work-exp" data-id="0"><i class="fa fa-trash"></i></a></td></tr>';
				$('#work_exp_body').append(tablePart);
				newAddDatepickerInTable();
			}
		});
		$('body').on('click','.btn-add-work-exp',function(e){
			
			var tablePart = '<tr><td><input type="text" name="work_from[]" class="form-control birth_date_table"/></td><td><input type="text" name="work_to[]" class="form-control birth_date_table"/></td><td><input type="text" name="work_position[]" class="form-control"/></td><td><input type="text" name="work_company[]" class="form-control"/></td><td><input type="text" name="work_salary[]" class="form-control"/></td><td><input type="text" name="work_grade[]" class="form-control"/></td><td><input type="text" name="work_status[]" class="form-control"/></td><td><input type="text" name="work_service[]" class="form-control"/></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-work-exp" data-id="0"><i class="fa fa-trash"></i></a></td></tr>';
			
			$('#work_exp_body').append(tablePart);
			
			newAddDatepickerInTable();
		});
	
	//WORK EXPERIENCE//-------------------------------------------------
	
	
</script>