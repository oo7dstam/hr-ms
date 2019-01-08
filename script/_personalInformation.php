<script>
	var myDropzone = new Dropzone('#myDropZone', {
		url: "controller/EmployeeController.php?action=upload",                        
		autoProcessQueue: false, 
		addRemoveLinks: true, //remove button/link
		maxFiles: 1, //max files
		uploadMultiple: true, //multiple upload
		parallelUploads: 1, //for upload all at the same time
		acceptedFiles: "image/jpeg,image/png,image/gif",
		dictDefaultMessage: "Click or Drop image here to upload"
	});
	myDropzone.on("maxfilesexceeded", function(file)
	{
		this.removeFile(file);
	});
	
	function personalInformationValidate(){
		var last_name = $('#last_name').val();
		var first_name = $('#first_name').val();
		var middle_name = $('#middle_name').val();
		var birthday = $('#birthday').val();
		var place_of_birth = $('#place_of_birth').val();
		var sex = $('#sex').val();
		var civil_status = $('#civil_status').val();
		var citizenship = $('#citizenship').val();
		var height = $('#height').val();
		var weight = $('#weight').val();
		var blood_type = $('#blood_type').val();
		var gsis_no = $('#gsis_no').val();
		var pag_ibig_no = $('#pag_ibig_no').val();
		var phil_health_no = $('#phil_health_no').val();
		var sss_no = $('#sss_no').val();
		var tin_no = $('#tin_no').val();
		var telephone_no = $('#telephone_no').val();
		var mobile_no = $('#mobile_no').val();
		var email_address = $('#email_address').val();
		var house_no_1 = $('#house_no_1').val();
		var street_1 = $('#street_1').val();
		var subdivision_1 = $('#subdivision_1').val();
		var barangay_1 = $('#barangay_1').val();
		var municipality_1 = $('#municipality_1').val();
		var province_1 = $('#province_1').val();
		var zip_code_1 = $('#zip_code_1').val();
		var house_no_2 = $('#house_no_2').val();
		var street_2 = $('#street_2').val();
		var subdivision_2 = $('#subdivision_2').val();
		var barangay_2 = $('#barangay_2').val();
		var municipality_2 = $('#municipality_2').val();
		var province_2 = $('#province_2').val();
		var zip_code_2 = $('#zip_code_2').val();
		
		var error = 0;
		
		if(last_name == ""){
			$('#last_name').parent('div').addClass('has-error');
			error++;
		}else{
			$("#last_name").parent('div').removeClass('has-error');
		}
		
		if(first_name == ""){
			$('#first_name').parent('div').addClass('has-error');
			error++;
		}else{
			$('#first_name').parent('div').removeClass('has-error');
		}

		if(middle_name == ""){
			$('#middle_name').parent('div').addClass('has-error');
			error++;
		}else{
			$('#middle_name').parent('div').removeClass('has-error');
		}
		
		if(birthday == ""){
			$('#birthday').parent('div').addClass('has-error');
			error++;
		}else{
			$("#birthday").parent('div').removeClass('has-error');
		}
		
		if(place_of_birth == ""){
			$('#place_of_birth').parent('div').addClass('has-error');
			error++;
		}else{
			$('#place_of_birth').parent('div').removeClass('has-error');
		}

		if(sex == ""){
			$('#sex').parent('div').addClass('has-error');
			error++;
		}else{
			$('#sex').parent('div').removeClass('has-error');
		}
		
		if(civil_status == ""){
			$('#civil_status').parent('div').addClass('has-error');
			error++;
		}else{
			$("#civil_status").parent('div').removeClass('has-error');
		}
		
		if(citizenship == ""){
			$('#citizenship').parent('div').addClass('has-error');
			error++;
		}else{
			$('#citizenship').parent('div').removeClass('has-error');
		}

		if(height == ""){
			$('#height').parent('div').addClass('has-error');
			error++;
		}else{
			$('#height').parent('div').removeClass('has-error');
		}
		
		if(weight == ""){
			$('#weight').parent('div').addClass('has-error');
			error++;
		}else{
			$('#weight').parent('div').removeClass('has-error');
		}
		
		if(blood_type == ""){
			$('#blood_type').parent('div').addClass('has-error');
			error++;
		}else{
			$("#blood_type").parent('div').removeClass('has-error');
		}
		
		if(gsis_no == ""){
			$('#gsis_no').parent('div').addClass('has-error');
			error++;
		}else{
			$('#gsis_no').parent('div').removeClass('has-error');
		}

		if(pag_ibig_no == ""){
			$('#pag_ibig_no').parent('div').addClass('has-error');
			error++;
		}else{
			$('#pag_ibig_no').parent('div').removeClass('has-error');
		}
		
		if(phil_health_no == ""){
			$('#phil_health_no').parent('div').addClass('has-error');
			error++;
		}else{
			$('#phil_health_no').parent('div').removeClass('has-error');
		}

		if(sss_no == ""){
			$('#sss_no').parent('div').addClass('has-error');
			error++;
		}else{
			$('#sss_no').parent('div').removeClass('has-error');
		}
		
		if(tin_no == ""){
			$('#tin_no').parent('div').addClass('has-error');
			error++;
		}else{
			$('#tin_no').parent('div').removeClass('has-error');
		}
		
		if(telephone_no == ""){
			$('#telephone_no').parent('div').addClass('has-error');
			error++;
		}else{
			$("#telephone_no").parent('div').removeClass('has-error');
		}
		
		if(mobile_no == ""){
			$('#mobile_no').parent('div').addClass('has-error');
			error++;
		}else{
			$('#mobile_no').parent('div').removeClass('has-error');
		}

		if(email_address == ""){
			$('#email_address').parent('div').addClass('has-error');
			error++;
		}else{
			$('#email_address').parent('div').removeClass('has-error');
		}
		
		if(house_no_1 == ""){
			$('#house_no_1').parent('div').addClass('has-error');
			error++;
		}else{
			$('#house_no_1').parent('div').removeClass('has-error');
		}
		
		if(street_1 == ""){
			$('#street_1').parent('div').addClass('has-error');
			error++;
		}else{
			$('#street_1').parent('div').removeClass('has-error');
		}

		if(subdivision_1 == ""){
			$('#subdivision_1').parent('div').addClass('has-error');
			error++;
		}else{
			$('#subdivision_1').parent('div').removeClass('has-error');
		}
		
		if(barangay_1 == ""){
			$('#barangay_1').parent('div').addClass('has-error');
			error++;
		}else{
			$('#barangay_1').parent('div').removeClass('has-error');
		}
		
		if(municipality_1 == ""){
			$('#municipality_1').parent('div').addClass('has-error');
			error++;
		}else{
			$("#municipality_1").parent('div').removeClass('has-error');
		}
		
		if(province_1 == ""){
			$('#province_1').parent('div').addClass('has-error');
			error++;
		}else{
			$('#province_1').parent('div').removeClass('has-error');
		}

		if(zip_code_1 == ""){
			$('#zip_code_1').parent('div').addClass('has-error');
			error++;
		}else{
			$('#zip_code_1').parent('div').removeClass('has-error');
		}
		
		if(house_no_2 == ""){
			$('#house_no_2').parent('div').addClass('has-error');
			error++;
		}else{
			$('#house_no_2').parent('div').removeClass('has-error');
		}
		
		if(street_2 == ""){
			$('#street_2').parent('div').addClass('has-error');
			error++;
		}else{
			$('#street_2').parent('div').removeClass('has-error');
		}

		if(subdivision_2 == ""){
			$('#subdivision_2').parent('div').addClass('has-error');
			error++;
		}else{
			$('#subdivision_2').parent('div').removeClass('has-error');
		}
		
		if(barangay_2 == ""){
			$('#barangay_2').parent('div').addClass('has-error');
			error++;
		}else{
			$('#barangay_2').parent('div').removeClass('has-error');
		}
		
		if(municipality_2 == ""){
			$('#municipality_2').parent('div').addClass('has-error');
			error++;
		}else{
			$("#municipality_2").parent('div').removeClass('has-error');
		}
		
		if(province_2 == ""){
			$('#province_2').parent('div').addClass('has-error');
			error++;
		}else{
			$('#province_2').parent('div').removeClass('has-error');
		}

		if(zip_code_2 == ""){
			$('#zip_code_2').parent('div').addClass('has-error');
			error++;
		}else{
			$('#zip_code_2').parent('div').removeClass('has-error');
		}
		
		
		if(error > 0){
			return false;
		}else{
			return true;
		}
	}
	
	
	
</script>