
<script>

    function validate(){
        var name = $('#name').val();			
        var id = $('#id').val();			

        var error = 0;

        if(name == ""){
            $('#name').parent('div').addClass('has-error');
            error++;
        }else{
            $('#name').parent('div').removeClass('has-error');
        }		

        if(error > 0){
            return false;
        }else{
            return true;
        }
    }

    $('body').on('click','.btn-add-category',function(e){

        $('#addCategory').modal({
            backdrop:'static',
            keyboard:false
        });			
    });

    $('body').on('click','.btn-update',function(e){

        e.preventDefault();
        $(this).attr("disabled", "disabled");
        var self = $('#category_form');
        var id = $('#id').val();
        var name = $('#name').val();	
        console.log(id + name);

        validate();

        if(validate()){
            $.ajax({
                url:"controller/EditCategoryController.php?action=update",
                data:{'id':id,'name':name},
                type:'POST',
                dataType:'json',
                success:function(res){

                    if(res == 1){
                        $('#successUpdateCategories').modal({
                            backdrop:'static',
                            keyboard:false
                        });
                    }else if(res == 3){
                        $('#categoriesExist').modal({
                            backdrop:'static',
                            keyboard:false
                        });
                        $(this).removeAttr("disabled");
                    }else{
                        $('#errorUpdateCategories').modal({
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