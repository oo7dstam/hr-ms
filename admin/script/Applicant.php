
<script>
	
	var id = null;
	var name = null;
	var email = null;
	var sattus = null;
	
	$('body').on('click','.btn-invite',function(e){
		id = null;
		name = null;
		email = null;
		status = null;

		id = $(this).data('id');
		name = $(this).data('name');
		email = $(this).data('email');
		status = $(this).data('status');

		
		$('#inviteApplicant').modal({
			backdrop:'static',
			keyboard:false
		});
			
	});
	
	$('body').on('click','.btn-done',function(e){
		id = null;
		
		id = $(this).data('id');
		
		$('#doneApplicant').modal({
			backdrop:'static',
			keyboard:false
		});
			
	});
	
	$('body').on('click','.btn-done-applicant',function(e){
		
		$.ajax({
			url:"controller/ApplicantController.php?action=doneProcess",
			data:{'id':id},
			type:'POST',
			dataType:'json',
			success:function(res){
				
				if(res == 1){
					$('#successDone').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorDone').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});

		
			
	});
	
	
	$('body').on('click','.btn-invite-confirm',function(e){
		$('#loading').modal('show');
		var date_interview = $('#date_interview').val();
		
		$.ajax({
			url:"controller/ApplicantController.php?action=invite",
			data:{'id':id,'name':name,'email':email,'date_interview':date_interview,'status':status},
			type:'POST',
			dataType:'json',
			success:function(res){
				setTimeout(function () {
					$('#loading').modal('hide');
				}, 1000);
				if(res == 1){
					$('#successInvitation').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorInvitation').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});

		
			
	});
	
	
	$('body').on('click','.btn-pull-data',function(e){
		
		$('#loading').modal('show');
		
		$.getJSON("http://municipality-of-bacolor.000webhostapp.com/cron/index.php?action=getAllApplicant",
			function(res) {
				
				if(res.length != 0){
					saveData(res);
				}else{
					setTimeout(function () {
						$('#loading').modal('hide');
					}, 3000);
				}  
			}
		)
		
	});

	function saveData(data){
		$.ajax({
			url:"controller/ApplicantController.php?action=saveData",
			data:data,
			type:'POST',
			dataType:'json',
			success:function(res){
				
				location.reload();  
				
			}
		});
		
	}
</script>