<script>
//    Dropzone.options.myDropzone = {
//        //prevent dropzone from uploading in drop
//        autoProcessQueue: false;
//        
//        init: function(){
//        var submitButton = document.querySelector("#submit")
//        myDropzone = this;
//        
//        submitButton.addEventListener("Click", function(){
//        myDropzone.processQueue();
//        
//        
//    })
//    }
//    }
    
    
//	function validate(){
//		var fromDate = $('#fromDate').val();
//		var toDate = $('#toDate').val();
////		var confirm_password = $('#confirm_password').val();
//		var error = 0;
//        
//		if(fromDate == ""){
//			$('#fromDate').parent('div').addClass('has-error');
//			error++;
//		}else{
//			$(fromDate).parent('div').removeClass('has-error');
//		}
//		
//		if(toDate == ""){
//			$('#toDate').parent('div').addClass('has-error');
//			error++;
//		}else{
//			$('#toDate').parent('div').removeClass('has-error');
//		}
//		
////		if(confirm_password == ""){
////			$('#confirm_password').parent('div').addClass('has-error');
////			error++;
////		}else{
////			$('#confirm_password').parent('div').removeClass('has-error');
////		}
//		
//		
//		if(error > 0){
//			return false;
//		}else{
//			return true;
//		}
//	}
    
    function validateDate(){
		var leaveType = $('#leaveType').val();
        var fromDate = $('#fromDate').val();
        var toDate = $('#toDate').val();
        var reason = $('#reason').val();
		
		var error = 0;
		
        if(leaveType == ""){
			$('#leaveType').parent('div').addClass('has-error');
			error++;
		}else{
			$('#leaveType').parent('div').removeClass('has-error');
		}
		
		if(fromDate == ""){
			$('#fromDate').parent('div').addClass('has-error');
			error++;
		}else{
			$('#fromDate').parent('div').removeClass('has-error');
		}
		
		if(toDate == ""){
			$('#toDate').parent('div').addClass('has-error');
			error++;
		}else{
			$('#toDate').parent('div').removeClass('has-error');
		}
        
        if(reason == ""){
			$('#reason').parent('div').addClass('has-error');
			error++;
		}else{
			$('#reason').parent('div').removeClass('has-error');
		}
		
		if(fromDate >= toDate){
			$('#fromDate').parent('div').addClass('has-error');
			$('#toDate').parent('div').addClass('has-error');
			error++;
		}
		
		if(error > 0){
			return false;
		}else{
			return true;
		}
	}
	$('body').on('click','.btn-applyLeave',function(e){
        var available_leave = $('#available_leave').val();
        
        
        var leaveType = $('#leaveType').val();
        var fromDate = $('#fromDate').val();
        var toDate = $('#toDate').val();
        var reason = $('#reason').val();
        var employee_id = $('#id').val();
        var application_date = $('#now').val();

        seletedLeave = available_leave - 1;
            
        console.log(seletedLeave );
        
//        var confirm_password = $('#confirm_password').val();
//        console.log(leaveType + maternity_paternity_leave + vacation_leave + sick_leave);
//        console.log(leaveType + fromDate + toDate + reason);

//        validate();
        validateDate();
        
        
		if(validateDate()){
			var self = $('#applyLeave_form');
			$.ajax({
				url:"controller/UserController.php?action=applyLeave",
                data:{'leaveType':leaveType,'fromDate':fromDate,'toDate':toDate,'reason':reason,'application_date':application_date,'employee_id':employee_id,'seletedLeave':seletedLeave},
				type:'POST',
				dataType:'json',
				success:function(res){
					
					if(res == 1){
                        
                        $('#successApplyLeave').modal({
                            backdrop:'static',
                            keyboard:false
                        });                        
						
					}else{
						$('#errorApplyLeave').modal({
							backdrop:'static',
							keyboard:false
						});
					}
				}
			});
	
		}else{
            
        }
	});
	
	
</script>