
<script>
	
	
	//CHILDREN//-------------------------------------------------
		
		var remove_children_ids = [];
		$('body').on('click','.btn-remove-children',function(e){
			remove_children_ids.push($(this).data('id'));
			$(this).parent().parent('tr').remove();
			if($('#children_body tr').length == 0){
				var tablePart = '<tr><td><div class="col-md-12" ><input type="text" name="child_name[]" class="form-control" /></div></td><td><div class="col-md-12" ><input type="text" name="child_birthday[]" class="form-control birth_date_table" /></div></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-children" data-id="0"><i class="fa fa-trash"></i></a></td></tr>';
				$('#children_body').append(tablePart);
				newAddDatepickerInTable();
			}
		});
		$('body').on('click','.btn-add-children',function(e){
			
			var tablePart = '<tr><td><div class="col-md-12" ><input type="text" name="child_name[]" class="form-control" /></div></td><td><div class="col-md-12" ><input type="text" name="child_birthday[]" class="form-control birth_date_table" /></div></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-children" data-id="0"><i class="fa fa-trash"></i></a></td></tr>';
			$('#children_body').append(tablePart);
			newAddDatepickerInTable();
		});
		
		
	function familyBackgroundValidate(){
		var f_last_name = $('#f_last_name').val();
		var f_first_name = $('#f_first_name').val();
		var f_middle_name = $('#f_middle_name').val();
		var m_last_name = $('#m_last_name').val();
		var m_first_name = $('#m_first_name').val();
		var m_middle_name = $('#m_middle_name').val();
		
		var error = 0;
		
		if(f_last_name == ""){
			$('#f_last_name').parent('div').addClass('has-error');
			error++;
		}else{
			$("#f_last_name").parent('div').removeClass('has-error');
		}
		
		if(f_first_name == ""){
			$('#f_first_name').parent('div').addClass('has-error');
			error++;
		}else{
			$('#f_first_name').parent('div').removeClass('has-error');
		}

		if(f_middle_name == ""){
			$('#f_middle_name').parent('div').addClass('has-error');
			error++;
		}else{
			$('#f_middle_name').parent('div').removeClass('has-error');
		}
		
		if(m_last_name == ""){
			$('#m_last_name').parent('div').addClass('has-error');
			error++;
		}else{
			$("#m_last_name").parent('div').removeClass('has-error');
		}
		
		if(m_first_name == ""){
			$('#m_first_name').parent('div').addClass('has-error');
			error++;
		}else{
			$('#m_first_name').parent('div').removeClass('has-error');
		}

		if(m_middle_name == ""){
			$('#m_middle_name').parent('div').addClass('has-error');
			error++;
		}else{
			$('#m_middle_name').parent('div').removeClass('has-error');
		}
		
		if(error > 0){
			return false;
		}else{
			return true;
		}
	}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	//CHILDREN//-------------------------------------------------
	
</script>