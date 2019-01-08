
<script>

    function validate(){
        var id = $('#id').val();
        var position = $('#position').val();			
        var category = $('#category').val();			
        var salary_grade = $('#salary_grade').val();			
        			

        var error = 0;

        if(position == ""){
            $('#position').parent('div').addClass('has-error');
            error++;
        }else{
            $('#position').parent('div').removeClass('has-error');
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
        var position = $('#position').val();			
        var category = $('#category').val();			
        var salary_grade = $('#salary_grade').val();	
        console.log(id + position + category + salary_grade);

        validate();

        if(validate()){
            $.ajax({
                url:"controller/EditPositionController.php?action=update",
                data:{'id':id,'position':position,'category':category,'salary_grade':salary_grade},
                type:'POST',
                dataType:'json',
                success:function(res){

                    if(res == 1){
                        $('#successUpdatePosition').modal({
                            backdrop:'static',
                            keyboard:false
                        });
                    }else if(res == 3){
                        $('#positionExist').modal({
                            backdrop:'static',
                            keyboard:false
                        });
                        $(this).removeAttr("disabled");
                    }else{
                        $('#errorUpdatePosition').modal({
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