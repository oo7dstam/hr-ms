
<script>

    function validate(){
        var salary_grade = $('#salary_grade').val();		
        var step_1 = $('#step_1').val();		
        var step_2 = $('#step_2').val();		
        var step_3 = $('#step_3').val();		
        var step_4 = $('#step_4').val();		
        var step_5 = $('#step_5').val();		
        var step_6 = $('#step_6').val();		
        var step_7 = $('#step_7').val();		
        var step_8 = $('#step_8').val();		

        var error = 0;

        if(salary_grade == ""){
            $('#salary_grade').parent('div').addClass('has-error');
            error++;
        }else{
            $('#salary_grade').parent('div').removeClass('has-error');
        }		


        if(step_1 == ""){
            $('#step_1').parent('div').addClass('has-error');
            error++;
        }else{
            $('#step_1').parent('div').removeClass('has-error');
        }		



        if(step_2 == ""){
            $('#step_2').parent('div').addClass('has-error');
            error++;
        }else{
            $('#step_2').parent('div').removeClass('has-error');
        }		


        if(step_3 == ""){
            $('#step_3').parent('div').addClass('has-error');
            error++;
        }else{
            $('#step_3').parent('div').removeClass('has-error');
        }		

        if(step_4 == ""){
            $('#step_4').parent('div').addClass('has-error');
            error++;
        }else{
            $('#step_4').parent('div').removeClass('has-error');
        }		

        if(step_5 == ""){
            $('#step_5').parent('div').addClass('has-error');
            error++;
        }else{
            $('#step_5').parent('div').removeClass('has-error');
        }		

        if(step_6 == ""){
            $('#step_6').parent('div').addClass('has-error');
            error++;
        }else{
            $('#step_6').parent('div').removeClass('has-error');
        }		


        if(step_7 == ""){
            $('#step_7').parent('div').addClass('has-error');
            error++;
        }else{
            $('#step_7').parent('div').removeClass('has-error');
        }		


        if(step_8 == ""){
            $('#step_8').parent('div').addClass('has-error');
            error++;
        }else{
            $('#step_8').parent('div').removeClass('has-error');
        }		

        if(error > 0){
            return false;
        }else{
            return true;
        }
    }

    $('body').on('click','.btn-update',function(e){

        e.preventDefault();
        $(this).attr("disabled", "disabled");
        var self = $('#category_form');
        var id = $('#id').val();
        var salary_grade = $('#salary_grade').val();		
        var step1 = $('#step_1').val();		
        var step2 = $('#step_2').val();		
        var step3 = $('#step_3').val();		
        var step4 = $('#step_4').val();		
        var step5 = $('#step_5').val();		
        var step6 = $('#step_6').val();		
        var step7 = $('#step_7').val();		
        var step8 = $('#step_8').val();
        
        console.log(id + salary_grade + step1 + step2 + step3 + step4 + step5 + step6 + step7 + step8);

        validate();

        if(validate()){
            $.ajax({
                url:"controller/EditSalaryGradeController.php?action=update",
                data:{'id':id,'salary_grade':salary_grade,'step1':step1,'step2':step2,'step3':step3,'step4':step4,'step5':step5,'step6':step6,'step7':step7,'step8':step8},
                type:'POST',
                dataType:'json',
                success:function(res){

                    if(res == 1){
                        $('#successUpdateSalaryGrade').modal({
                            backdrop:'static',
                            keyboard:false
                        });
                    }else if(res == 3){
                        $('#salaryGradeExist').modal({
                            backdrop:'static',
                            keyboard:false
                        });
                        $(this).removeAttr("disabled");
                    }else{
                        $('#errorUpdateSalaryGrade').modal({
                            backdrop:'static',
                            keyboard:false
                        });
                        $(this).removeAttr("disabled");
                    }
                }
            });

        }

    });

</script>