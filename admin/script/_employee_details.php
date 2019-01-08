
<script>
	
	//EMPLOYMENT//-------------------------------------------------
		$('body').on('change','#category_id',function(e){
			var id = $(this).val();
			
			$.ajax({
				url:'controller/CategoryHasPositionController.php?action=getAllBaseOnCategoryPosition',
				data:{'id':id},
				type:'POST',
				dataType:'json',
				success:function(res){
					var selectDropdown =$('#position_id');
					selectDropdown.children().remove();
					selectDropdown.append('<option value="">None</option>');
					$.each(res,function(i,data){
						selectDropdown.append('<option value="'+data.id+'">'+data.position+'</option>');
					});

				}
			});
			if($('#civil_body tr').length == 0){
				var tablePart = '<tr><td><input type="text" name="civil_service[]" class="form-control"/></td><td><input type="text" name="civil_rating[]" class="form-control"/></td><td><input type="text" name="civil_date_of_exam[]" class="birth_date_table form-control"/></td><td><input type="text" name="civil_place_of_exam[]" class="date_picker form-control"/></td><td><input type="text" name="civil_number_license[]" class="form-control"/></td><td><input type="text" name="civil_date_of_validity[]" class="form-control birth_date_table"/></td><td><a href="javascript:void(0)" class="btn btn-danger btn-remove-civil"><i class="fa fa-trash"></i></a></td></tr>';
			
				$('#civil_body').append(tablePart);
				newAddDatepickerInTable();
			}
		});
		
	//EMPLOYMENT//-------------------------------------------------
	
	
</script>