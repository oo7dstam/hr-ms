
<script>
	var adminID = ""; 
	$('body').on('click','.btn-inactive',function(e){
		adminID = $(this).data('id');
		
		$('#inactivateAdmin').modal({
			backdrop:'static',
			keyboard:false
		});
			
	});

	$('body').on('click','.btn-yes-inactive-confirm',function(e){
		
		$.ajax({
			url:"controller/AdminController.php?action=inactive",
			data:{'id':adminID},
			type:'POST',
			dataType:'json',
			success:function(res){
				
				if(res == 1){
					$('#successAdminUpdate').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorAdminUpdate').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});

		
			
	});
	
	$('body').on('click','.btn-activate',function(e){
		adminID = $(this).data('id');
		$('#activateAdmin').modal({
			backdrop:'static',
			keyboard:false
		});
			
	});

	$('body').on('click','.btn-yes-activate-confirm',function(e){
		
		$.ajax({
			url:"controller/AdminController.php?action=active",
			data:{'id':adminID},
			type:'POST',
			dataType:'json',
			success:function(res){
				
				if(res == 1){
					$('#successAdminUpdate').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorAdminUpdate').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});

		
			
	});
</script>