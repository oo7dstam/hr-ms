
<script>
// Deactivate
var employee_id = null;
var employee_name = null;
var employee_email = null;
$('body').on('click','.btn-deactivate',function(e){
    employee_id = null;
    employee_name = null;
    employee_email = null;

    employee_id = $(this).data('id');
    employee_name = $(this).data('name');
    employee_email = $(this).data('email');

    console.log(employee_id + employee_name + employee_email);

    $('#deactivate').modal({
        backdrop:'static',
        keyboard:false
    });			
});


$('body').on('click','.btn-deactivate-confirm',function(e){
    $.ajax({
        url:"controller/EmployeeController_cloud.php?action=deactivate",
        data:{'id':employee_id,'name':employee_name,'email':employee_email},
        type:'POST',
        dataType:'json',
        success:function(res){

            if(res == 1){
                $('#successDeactivate').modal({
                    backdrop:'static',
                    keyboard:false
                });
            }else{
                $('#errorDeactivate').modal({
                    backdrop:'static',
                    keyboard:false
                });
            }
        }
    });

});
 
// Activate
var employee_id = null;
var employee_name = null;
var employee_email = null;
$('body').on('click','.btn-activate',function(e){
    employee_id = null;
    employee_name = null;
    employee_email = null;

    employee_id = $(this).data('id');
    employee_name = $(this).data('name');
    employee_email = $(this).data('email');


    $('#activate').modal({
        backdrop:'static',
        keyboard:false
    });			
});


$('body').on('click','.btn-activate-confirm',function(e){
    $.ajax({
        url:"controller/EmployeeController_cloud.php?action=activate",
        data:{'id':employee_id,'name':employee_name,'email':employee_email},
        type:'POST',
        dataType:'json',
        success:function(res){

            if(res == 1){
                $('#successActivate').modal({
                    backdrop:'static',
                    keyboard:false
                });
            }else{
                $('#errorActivate').modal({
                    backdrop:'static',
                    keyboard:false
                });
            }
        }
    });

});    
    
    
// Approved
var employee_id = null;
var employee_name = null;
var employee_email = null;
$('body').on('click','.btn-approved',function(e){
    employee_id = null;
    employee_name = null;
    employee_email = null;

    employee_id = $(this).data('id');
    employee_name = $(this).data('name');
    employee_email = $(this).data('email');


    $('#approved').modal({
        backdrop:'static',
        keyboard:false
    });			
});


$('body').on('click','.btn-approved-confirm',function(e){
    $.ajax({
        url:"controller/EmployeeController_cloud.php?action=approved",
        data:{'id':employee_id,'name':employee_name,'email':employee_email},
        type:'POST',
        dataType:'json',
        success:function(res){

            if(res == 1){
                $('#successApproved').modal({
                    backdrop:'static',
                    keyboard:false
                });
            }else{
                $('#errorApproved').modal({
                    backdrop:'static',
                    keyboard:false
                });
            }
        }
    });

});
    
// cancelled
var employee_id = null;
var employee_name = null;
var employee_email = null;
$('body').on('click','.btn-cancelled',function(e){
    employee_id = null;
    employee_name = null;
    employee_email = null;

    employee_id = $(this).data('id');
    employee_name = $(this).data('name');
    employee_email = $(this).data('email');


    $('#cancelled').modal({
        backdrop:'static',
        keyboard:false
    });			
});


$('body').on('click','.btn-cancelled-confirm',function(e){
    $.ajax({
        url:"controller/EmployeeController_cloud.php?action=cancelled",
        data:{'id':employee_id,'name':employee_name,'email':employee_email},
        type:'POST',
        dataType:'json',
        success:function(res){

            if(res == 1){
                $('#successCancelled').modal({
                    backdrop:'static',
                    keyboard:false
                });
            }else{
                $('#errorCancelled').modal({
                    backdrop:'static',
                    keyboard:false
                });
            }
        }
    });

});    


</script>