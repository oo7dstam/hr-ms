
<script>
	$('body').on('click','.btn-log-out',function(e){
		$.ajax({
			url:"controller/UserController.php?action=logout",
			type:'GET',
			dataType:'json',
			success:function(res){
				
				if(res == 1){
					$('#successLogout').modal({
						backdrop:'static',
						keyboard:false
					});
				}else{
					$('#errorLogout').modal({
						backdrop:'static',
						keyboard:false
					});
				}
			}
		});
	});
</script>