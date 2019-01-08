
<script>
    // approved leave
    function validateDate(){
        var leaveAction = $('#leaveAction').val();
        var comment = $('#comment').val();

        var error = 0;

        if(comment == ""){
            $('#comment').parent('div').addClass('has-error');
            error++;
        }else{
            $('#comment').parent('div').removeClass('has-error');
        }

        if(error > 0){
            return false;
        }else{
            return true;
        }
    }
    
    
    var id = null;
    $('body').on('click','.btn-approvedLeave',function(e){
        id = null;
       

       id = $(this).data('id');
       

        $('#approvedLeave').modal({
            backdrop:'static',
            keyboard:false
        });			
    });


    $('body').on('click','.btn-approvedLeave-confirm',function(e){
        var leaveAction = $('#leaveAction').val();
        var comment = $('#comment').val();
        var id = $('#id').val();

        //        var confirm_password = $('#confirm_password').val();
       console.log(id + leaveAction + comment );

        //        validate();
        validateDate();
        
        if(leaveAction == 1){
            if(validateDate()){
                var self = $('#approvedLeave_form');
                $.ajax({
                    url:"controller/LeaveController_cloud.php?action=approvedLeave",
                    data:{'id':id,'leaveAction':leaveAction,'comment':comment},
                    type:'POST',
                    dataType:'json',
                    success:function(res){

                        if(res == 1){

                            $('#successApprovedLeave').modal({
                                backdrop:'static',
                                keyboard:false
                            });                        

                        }else{
                            $('#errorApprovedLeave').modal({
                                backdrop:'static',
                                keyboard:false
                            });
                        }
                    }
                });

            }else{

            }
        }else if(leaveAction == 2){
            if(validateDate()){
                var self = $('#approvedLeave_form');
                $.ajax({
                    url:"controller/LeaveController_cloud.php?action=disapprovedLeave",
                    data:{'id':id,'leaveAction':leaveAction,'comment':comment},
                    type:'POST',
                    dataType:'json',
                    success:function(res){

                        if(res == 1){

                            $('#successDisapprovedLeave').modal({
                                backdrop:'static',
                                keyboard:false
                            });                        

                        }else{
                            $('#errordisapprovedLeave').modal({
                                backdrop:'static',
                                keyboard:false
                            });
                        }
                    }
                });

            }else{

            }
        }

        

    });    


</script>