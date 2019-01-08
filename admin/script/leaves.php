
<script>

	
	$('body').on('click','.btn-pull-data',function(e){
		
		$('#loading').modal('show');
		
		/* $.ajax({
		
			//url:"http://dhvtsu-hrms.epizy.com/hrms/cron/index.php?action=getAllLeaveToday",
			url:"http://municipality-of-bacolor.000webhostapp.com/cron/index.php?action=getAllLeaveToday",
			dataType:'jsonp',
			success:function(res){
				if(res.length != 0){
					saveData(res);
				}else{
					setTimeout(function () {
						$('#loading').modal('hide');
					}, 3000);
				}  
			},error:function(){
				alert('error');
			}
         
			
		}); */
		
		$.getJSON("http://municipality-of-bacolor.000webhostapp.com/cron/index.php?action=getAllLeaveToday",
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
			url:"controller/LeaveController.php?action=saveData",
			data:data,
			type:'POST',
			dataType:'json',
			success:function(res){
				
				location.reload();  
				
			}
		});
		
	}
	
	
	var leave_id = null;
	var statusUpdate = null;
	var reason = null;
	$('body').on('click','.btn-approve',function(e){
		leave_id = null;
		leave_id = $(this).data('id');
		$('#confirmApprove').modal({
			backdrop:'static',
			keyboard:false
		});
	});

	$('body').on('click','.btn-disapprove',function(e){
		leave_id = null;
		leave_id = $(this).data('id');
		$('#confirmDisapprove').modal({
			backdrop:'static',
			keyboard:false
		});
	});
	
	$('body').on('click','.btn-approve-confirm',function(e){
		statusUpdate =1;
		$('#loading').modal('show');
		$.ajax({
			url:"controller/LeaveController.php?action=approve",
			data:{'id':leave_id},
			type:'POST',
			dataType:'json',
			success:function(res){
				setTimeout(function () {
					$('#loading').modal('hide');
				}, 3000);
				if(res == 1){
					updateLeaveOnline();
					$('#successApprove').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorApprove').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});
	});
	
	$('body').on('click','.btn-disapprove-confirm',function(e){
		$('#loading').modal('show');
		statusUpdate = 2;
		reason = $('#disapproved_reason').val();
		$.ajax({
			url:"controller/LeaveController.php?action=disapprove",
			data:{'id':leave_id},
			type:'POST',
			dataType:'json',
			success:function(res){
				
				if(res == 1){
					$('#successDisapprove').modal({
						backdrop:'static',
						keyboard:false
					});
					
					updateLeaveOnline();
				}else{
					$('#errorDisapprove').modal({
						backdrop:'static',
						keyboard:false
					});
					
					setTimeout(function () {
						$('#loading').modal('hide');
					}, 3000);
				}
			}
		});
	});
	
	
	function updateLeaveOnline(){
		$.ajax({
			url:"http://municipality-of-bacolor.000webhostapp.com/admin/controller/EmployeeController.php?action=updateLeaveFromLocal",
			data:{'id':leave_id,'status':statusUpdate,'disapproved_reason':reason},
			type:'POST',
			dataType:'json',
			success:function(res){
				setTimeout(function () {
						$('#loading').modal('hide');
					}, 3000);
			}
		});
	}
</script>