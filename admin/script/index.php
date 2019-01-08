
<script>
//--------------------------LEAVE-------------------
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
	
	
	
//-------------------------LEAVE-------------------



//-------------------------APPLICANT-------------------
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
		
		$.getJSON("http://hrmsbacolor.000webhostapp.com/cron/index.php?action=getAllApplicant",
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

//-------------------------APPLICANT-------------------
//-------------------------EMPLOYEE-------------------

	$('body').on('click','.btn-pull-employee',function(e){
		
		$('#loading').modal('show');
		
		$.getJSON("http://hrmsbacolor.000webhostapp.com/cron/index.php?action=getAllEmployee",
			function(res) {
				
				if(res.length != 0){
					saveEmployeeData(res);
				}else{
					setTimeout(function () {
						$('#loading').modal('hide');
					}, 3000);
				}  
			}
		)
		
	});

	function saveEmployeeData(data){
		$.ajax({
			url:"controller/EmployeeController.php?action=saveEmployeeData",
			data:data,
			type:'POST',
			dataType:'json',
			success:function(res){
				
				location.reload();  
				
			}
		});
		
	}
	
//-------------------------EMPLOYEE-------------------
	/* var id = null;
	$('body').on('click','.btn-delete',function(e){
		id = $(this).data('id');
		$('#deleteEmployee').modal({
			backdrop:'static',
			keyboard:false
		});
	});
	
	$('body').on('click','.btn-delete-confirm',function(e){
		$.ajax({
			url:"controller/EmployeeController.php?action=delete",
			data:{'id':id},
			type:'POST',
			dataType:'json',
			success:function(res){
				
				if(res == 1){
					$('#successDelete').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorDelete').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});
	});
	
	
	var adminID = null;
	$('body').on('click','.btn-delete-confirm-admin',function(e){
		$.ajax({
			url:"controller/AdminController.php?action=delete",
			data:{'id':id},
			type:'POST',
			dataType:'json',
			success:function(res){
				
				if(res == 1){
					$('#successDelete').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorDelete').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});
	}); */
	
//-------------------------Attendance-------------------	
	$('body').on('click','.btn-modal-attendance',function(e){
		
		$('#pushAttendance').modal('show');
		
	});
	
	$('body').on('click','.btn-push-attendance',function(e){
		$('#loading').modal('show');
		var start_date = $('#attendance_start_date').val();
		var end_date = $('#attendance_end_date').val();
		
		
		if(start_date != "" || end_date != ""){
			$.ajax({
				url:"controller/PayrollController.php?action=getAllAttendanceToday",
				data:{'start_date':start_date,'end_date':end_date},
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(!jQuery.isEmptyObject(res)){
						updateAttendanceOnline(res);
						
						
					}
					setTimeout(function () {
						$('#loading').modal('hide');
					}, 3000);
					
				}
			});
		}else{
			
			if(start_date == ""){
				$('#attendance_start_date').parent('div').addClass('has-error');
			}else{
				$('#attendance_start_date').parent('div').removeClass('has-error');
			}
			
			if(end_date == ""){
				$('#attendance_end_date').parent('div').addClass('has-error');
			}else{
				$('#attendance_end_date').parent('div').removeClass('has-error');
			}
			
			setTimeout(function () {
				$('#loading').modal('hide');
			}, 3000);
		}
		
		setTimeout(function () {
			$('#pushAttendance').modal('hide');
		}, 1000);
	});
	
	
	function updateAttendanceOnline(data){
		$.ajax({
			url:"http://hrmsbacolor.000webhostapp.com/admin/controller/PayrollController.php?action=updateFromLocal",
			// url:"controller/PayrollController.php?action=updateFromLocal",
			data:{data},
			type:'POST',
			dataType:'json',
			success:function(res){
				setTimeout(function () {
						$('#loading').modal('hide');
					}, 3000);
			}
		});
	}
	
//-------------------------Attendance-------------------		
</script>